<?php

class TransaksiDao{

    function getAllTransaksi()
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbtransaksi";

        $result = $link->query($query)->fetchAll();

        //$result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Transaksi");

        return $result;

    }

    function addTransaksi(Transaksi $transaksi)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "INSERT INTO tbtransaksi(
                                     transaksi_totalprice,
                                     transaksi_payment_method,
                                     transaksi_tanggal,
                                     tbTiket_tiket_id,
                                     tbTiket_tbJadwal_jadwal_id,
                                     tbTiket_tbMember_member_id,
                                     tbTiket_tbStudio_studio_id,
                                     tbFilm_film_id) 
                                     VALUES(?,?,?,?,?,?,?,?)";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $transaksi->getTransaksiTotalprice(), PDO::PARAM_STR);
        $stmt->bindValue(2, $transaksi->getTransaksiPaymentMethod(), PDO::PARAM_STR);
        $stmt->bindValue(3, $transaksi->getTransaksiTanggal(), PDO::PARAM_STR);
        $stmt->bindValue(4, $transaksi->getTbTiketTiketId(), PDO::PARAM_STR);
        $stmt->bindValue(5, $transaksi->getTbTiketTbJadwalJadwalId(), PDO::PARAM_STR);
        $stmt->bindValue(6, $transaksi->getTbTiketTbMemberMemberId(), PDO::PARAM_STR);
        $stmt->bindValue(7, $transaksi->getTbTiketTbStudioStudioId(), PDO::PARAM_STR);
        $stmt->bindValue(8, $transaksi->getTbFilmFilmId(), PDO::PARAM_STR);


        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function deleteTransaksi(Transaksi $transaksi)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "DELETE FROM tbtransaksi WHERE transaksi_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $transaksi->getTransaksiId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function updateTransaksi(Transaksi $transaksi)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "UPDATE tbtransaksi SET transaksi_totalprice=?,
                                     transaksi_payment_method=?,
                                     transaksi_tanggal=?,
                                     tbTiket_tiket_id=?,
                                     tbTiket_tbJadwal_jadwal_id=?,
                                     tbTiket_tbMember_member_id=?,
                                     tbTiket_tbStudio_studio_id=?,
                                     tbFilm_film_id=?  
                                    WHERE transaksi_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $transaksi->getTransaksiTotalprice(), PDO::PARAM_STR);
        $stmt->bindValue(2, $transaksi->getTransaksiPaymentMethod(), PDO::PARAM_STR);
        $stmt->bindValue(3, $transaksi->getTransaksiTanggal(), PDO::PARAM_STR);
        $stmt->bindValue(4, $transaksi->getTbTiketTiketId(), PDO::PARAM_STR);
        $stmt->bindValue(5, $transaksi->getTbTiketTbJadwalJadwalId(), PDO::PARAM_STR);
        $stmt->bindValue(6, $transaksi->getTbTiketTbMemberMemberId(), PDO::PARAM_STR);
        $stmt->bindValue(7, $transaksi->getTbTiketTbStudioStudioId(), PDO::PARAM_STR);
        $stmt->bindValue(8, $transaksi->getTbFilmFilmId(), PDO::PARAM_STR);
        $stmt->bindValue(9, $transaksi->getTransaksiId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function getTransaksiById(Transaksi $transaksi)
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbtransaksi WHERE transaksi_id = ? LIMIT 1";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $transaksi->getTransaksiId(), PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchObject("Transaksi");

        $link = null;

        return $result;

    }
}