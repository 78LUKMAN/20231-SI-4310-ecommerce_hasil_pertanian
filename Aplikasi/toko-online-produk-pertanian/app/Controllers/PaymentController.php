<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetailTransactionModel;
use App\Models\TransactionModel;

class PaymentController extends BaseController
{
    function __construct()
    {
        $this->transaction = new TransactionModel();
    }

    public function snapToken($data)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = getenv('MIDTRANS_SERVER');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $transactionDetails = array(
            'order_id' => $data['id_order'],
            'gross_amount' => $data['total'],
        );

        $customerDetails = array(
            'first_name' => $data['name'],
            'email' => $data['email'],
            "billing_address" => array(
                "first_name" => $data['name'],
                "email" => $data['email'],
                "address" => $data['address'],
                "city" => $data['city'],
                "postal_code" => $data['poscode'],
                "country_code" => "IDN"
            ),
        );
        
        $params = array(
            'transaction_details' => $transactionDetails,
            'customer_details' => $customerDetails,
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return $snapToken;
    }

    public function updateStatus()
    {
        $orderIds = explode(',', $this->request->getPost('order_ids'));

        foreach ($orderIds as $orderId) {
            $status = $this->checkStatus($orderId);

            // Update status transaksi
            $this->transaction->update($orderId, ['status' => $status]);

            if ($status == 200) {
                $this->reduceProductStock($orderId);
            }
        }

        return redirect('activity/history');
    }

    protected function reduceProductStock($orderId)
    {
        $transactionModel = new TransactionModel();
        $productController = new ProductController();
        $transaction = $transactionModel->find($orderId);

        if ($transaction) {
            $transactionDetailModel = new DetailTransactionModel();
            $transactionDetails = $transactionDetailModel->where('transaction_id', $orderId)->findAll();

            foreach ($transactionDetails as $detail) {
                $productId = $detail['product_id'];
                $quantity = $detail['quantity'];
                $productController->reduceProductStockById($productId, $quantity);
                $productController->increaseSold($productId, $quantity);
            }
        }
    }
    public function checkStatus($id_order)
    {
        $key = base64_encode(getenv('MIDTRANS_SERVER') . ":");
        $endpoint = "https://api.sandbox.midtrans.com/v2/" . $id_order . "/status";
        $header = array(
            'Accept: application/json',
            'Authorization: Basic ' . $key,
            'Content-Type: application/json'
        );

        $method = 'GET';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_POSTFIELDS, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);

        $result = curl_exec($ch);
        $finalRes = json_decode($result, true);
        return $finalRes['status_code'];
    }


}
