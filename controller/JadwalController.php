<?php


class JadwalController
{
    private $jadwalDao;
    private $filmDao;
    private $studioDao;

    public function __construct()
    {
        $this->jadwalDao = new JadwalDao();
        $this->filmDao = new FilmDao();
        $this->studioDao = new StudioDao();
    }

    public function indexCreate()
    {
        // Change acording to submmit create button
        $submitted = filter_input(INPUT_POST, 'btnSubmit');
        if (isset($submitted)) {
            $jadwal_tanggal = filter_input(INPUT_POST, 'txtJadwalTanggal');
            $jadwal_sesi = filter_input(INPUT_POST, 'txtJadwalSesi');
            $jadwal_film = filter_input(INPUT_POST, 'txtJadwalFilm');
            $jadwal_studio = filter_input(INPUT_POST, 'txtJadwalStudio');

            $film = new Film();
            $film->setFilmId($jadwal_film);

            $studio = new Studio();
            $studio->setStudioId($jadwal_studio);

            $jadwal = new Jadwal();
            $jadwal->setJadwalTanggal($jadwal_tanggal);
            $jadwal->setJadwalSesi($jadwal_sesi);
            $jadwal->setFilm($film);
            $jadwal->setStudio($studio);

            if (fieldNotEmpty(array($jadwal_tanggal, $jadwal_sesi, $jadwal_film, $jadwal_studio))) {
                $this->jadwalDao->addJadwal($jadwal);
            } else
                $errMessage = 'Please check your input!';
        }

        if (isset($errMessage))
            echo '<div class="err-msg">' . $errMessage . '</div>';

        $jadwals = $this->jadwalDao->getAllJadwal();
        $films = $this->filmDao->getAllFilm();
        $studios = $this->studioDao->getAllStudio();
        include_once '../../view/dashboard/form_create_jadwal.php';
    }

    public function indexUpdate()
    {
        // Block below for fetch data
        $jadwal_id = filter_input(INPUT_GET, 'jadwal_id');
        if (isset($jadwal_id)) {
            $jadwal = new Jadwal();
            $jadwal->setJadwalId($jadwal_id);
            $jadwal = $this->jadwalDao->getJadwalById($jadwal);
            /* @var $jadwal Jadwal */
        }
        // Change according to submit create button
        $submitted = filter_input(INPUT_POST, 'btnUpdate');
        if (isset($submitted)) {
            $jadwal_tanggal = filter_input(INPUT_POST, 'txtJadwalTanggal');
            $jadwal_sesi = filter_input(INPUT_POST, 'txtJadwalSesi');
            $jadwal_film = filter_input(INPUT_POST, 'txtJadwalFilm');
            $jadwal_studio = filter_input(INPUT_POST, 'txtJadwalStudio');

            $film = new Film();
            $film->setFilmId($jadwal_film);

            $studio = new Studio();
            $studio->setStudioId($jadwal_studio);

            $updatedJadwal = new Jadwal();
            /* @var $jadwal Jadwal */
            $updatedJadwal->setJadwalId($jadwal->getJadwalId());
            $updatedJadwal->setJadwalTanggal($jadwal_tanggal);
            $updatedJadwal->setJadwalSesi($jadwal_sesi);
            $updatedJadwal->setFilm($film);
            $updatedJadwal->setStudio($studio);

            if (fieldNotEmpty(array($jadwal_tanggal, $jadwal_sesi, $jadwal_film, $jadwal_studio))) {
                $this->jadwalDao->updateJadwal($updatedJadwal);
                header("location:../../view/dashboard/index.php?dashboard=updateDeleteJadwal");
            } else {
                $errMessage = 'Please check your input';
            }

            if (isset($errMessage)) {
                echo '<div class="err-msg">' . $errMessage . '</div>';
            }
        }
        $jadwals = $this->jadwalDao->getAllJadwal();
        $films = $this->filmDao->getAllFilm();
        $studios = $this->studioDao->getAllStudio();
        include_once '../../view/dashboard/form_update_jadwal.php';
    }

    public function indexUpdateDelete()
    {
        $deleteCommand = filter_input(INPUT_GET, 'delcom');
        if (isset($deleteCommand) && $deleteCommand == 1) {
            $jadwal_id = filter_input(INPUT_GET, 'jadwal_id');
            $toBeDeletedJadwal = new Jadwal();
            $toBeDeletedJadwal->setJadwalId($jadwal_id);
            $this->jadwalDao->deleteJadwal($toBeDeletedJadwal);
        }

        $jadwals = $this->jadwalDao->getAllJadwal();
        include_once '../../view/dashboard/form_update_delete_jadwal.php';
    }
}