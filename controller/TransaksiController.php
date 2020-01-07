<?php


class TransaksiController
{
    private $transaksiDao;


    public function __construct()
    {
        $this->transaksiDao = new TransaksiDao();

    }

    public function Index()
    {

    }
}