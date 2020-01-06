<?php


class JadwalController
{
    private $jadwalDao;

    public function __construct()
    {
        $this->jadwalDao = new JadwalDao();
    }

    public function indexCreate()
    {
        $jadwals = $this->jadwalDao->getAllJadwal();
        include_once '../../view/dashboard/form_create_jadwal.php';
    }
}