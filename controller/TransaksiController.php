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

    public function index()
    {
<<<<<<< HEAD
        $transaksis = $this->transaksiDao->getAllTransaksi();
=======
>>>>>>> f8c05fe65ac3d39b53954d18851fb51b5474d96c
        include_once '../../view/dashboard/form_view_transaksi.php';
    }
}