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
}