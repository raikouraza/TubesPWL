<?php


class TransaksiController
{
    private $transaksiDao;


    public function __construct()
    {
        $this->transaksiDao = new TransaksiDao();

    }

    public function index()
    {
        $transaksis = $this->transaksiDao->getAllTransaksi();
        include_once '../../view/dashboard/form_view_transaksi.php';
    }
}