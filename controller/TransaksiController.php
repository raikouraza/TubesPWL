<?php


class TransaksiController
{
    private $transaksiDao;
    private $transaksi;


    public function __construct()
    {
        $this->transaksiDao = new TransaksiDao();
        $this->transaksi = new Transaksi();

    }

    public function Index()
    {
//        $transaksis = $this->transaksiDao->getAllTransaksi();
        include_once '../../view/dashboard/form_view_transaksi.php';
    }
}