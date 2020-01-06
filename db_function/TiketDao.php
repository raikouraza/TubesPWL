<?php

class TiketDao{

    function getAllTiket()
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbtiket";

        $result = $link->query($query);

        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Tiket");

        return $result;

    }

    function addTiket(Tiket $tiket)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "INSERT INTO tbtiket(tiket_harga,
                                     tiket_nomor_kursi,
                                     tbMember_member_id,
                                     tbStudio_studio_id,
                                     tbJadwal_jadwal_id)
                                     VALUES(?,?,?,?,?)";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $tiket->getTiketHarga(), PDO::PARAM_STR);
        $stmt->bindValue(2, $tiket->getTiketNomorKursi(), PDO::PARAM_STR);
        $stmt->bindValue(3, $tiket->getTbMemberMemberId(), PDO::PARAM_STR);
        $stmt->bindValue(4, $tiket->getTbStudioStudioId(), PDO::PARAM_STR);
        $stmt->bindValue(5, $tiket->getTbJadwalJadwalId(), PDO::PARAM_STR);

        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function deleteTiket(Tiket $tiket)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "DELETE FROM tbtiket WHERE tiket_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $tiket->getTiketId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function updateTiket(Tiket $tiket)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "UPDATE tbtiket SET tiket_harga=?,
                                     tiket_nomor_kursi=?,
                                     tbMember_member_id=?,
                                     tbStudio_studio_id=?,
                                     tbJadwal_jadwal_id=?
                                    WHERE tiket_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $tiket->getTiketHarga(), PDO::PARAM_STR);
        $stmt->bindValue(2, $tiket->getTiketNomorKursi(), PDO::PARAM_STR);
        $stmt->bindValue(3, $tiket->getTbMemberMemberId(), PDO::PARAM_STR);
        $stmt->bindValue(4, $tiket->getTbStudioStudioId(), PDO::PARAM_STR);
        $stmt->bindValue(5, $tiket->getTbJadwalJadwalId(), PDO::PARAM_STR);
        $stmt->bindValue(6, $tiket->getTiketId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function getTiketById(Tiket $tiket)
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbtiket WHERE tiket_id = ? LIMIT 1";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $tiket->getTiketId(), PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchObject("Tiket");

        $link = null;

        return $result;

    }

    function getAllTiketByMemberId(Tiket $tiket)
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbtiket WHERE tbMember_member_id  = ?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $tiket->getTbMemberMemberId(), PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchObject("Tiket");

        $link = null;

        return $result;

    }
}