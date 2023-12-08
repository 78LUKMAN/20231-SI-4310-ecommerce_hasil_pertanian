<?php
namespace App\Controllers;

use App\Models\DetailTransactionModel;
use App\Models\TransactionModel;
use App\Models\ProductModel;

class HistoryController extends BaseController
{
    protected $transaksiModel;
    protected $detailTransaksiModel;

    public function __construct()
    {
        $this->transaksiModel = new TransactionModel();
        $this->detailTransaksiModel = new DetailTransactionModel();
        $this->dataProdukModel = new ProductModel();
        helper("form");

    }

    public function history()
    {
        // Mendapatkan ID user dari data user saat ini (sesuaikan dengan implementasi Anda)
        $userId = session()->get('username');

        // Mendapatkan transaksi berdasarkan ID user
        $transaksi = $this->transaksiModel->where('created_by', $userId)->findAll();

        $getDetailPoduk = $this->dataProdukModel->findAll();

        // Mendapatkan detail transaksi berdasarkan ID user
        $detailTransaksi = $this->detailTransaksiModel->where('created_by', $userId)->findAll();

        $data = [
            'transaction' => $transaksi,
            'detailTransactionData' => $detailTransaksi,
            'detailProduct' => $getDetailPoduk
        ];

        return view('pages/history/history', $data);
    }
}
