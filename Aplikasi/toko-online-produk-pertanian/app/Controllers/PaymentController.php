<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransactionModel;

class PaymentController extends BaseController
{
    function __construct()
    {
        $this->transaction = new TransactionModel();
    }

    public function snapToken($id_order, $total, $username)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-Z9WdyW2r3BEM_yboYz4vZzBz';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $id_order,
                'gross_amount' => $total,
            ),
            'customer_details' => array(
                'first_name' => $username,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        
        return $snapToken;
    }
    
    public function updateStatus()
    {
        $orderIds = explode(',', $this->request->getPost('order_ids'));

        foreach ($orderIds as $orderId) {
            $status = $this->checkStatus($orderId);

            $this->transaction->update($orderId, ['status' => $status]);
        }
        return redirect('activity/history');
    }
    public function checkStatus($id_order)
    {
        $key = base64_encode("SB-Mid-server-Z9WdyW2r3BEM_yboYz4vZzBz:");
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