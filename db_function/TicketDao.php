<?php

class TicketDao{

    function getAllTicket()
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbtiket";

        $result = $link->query($query);

        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Tiket");

        return $result;

    }

    function addTicket(Tiket $tiket)
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

    function deleteTicket(Tiket $tiket)
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

    function updateTicket(Tiket $tiket)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "UPDATE tbtiket SET ticket_judul=?,
                                    ticket_tanggal_rilis=?,
                                    ticket_deskripsi=?,
                                    ticket_poster=?,
                                    ticket_genre=?,
                                    ticket_trailer=?,
                                    ticket_jam_penayangan=?,
                                    ticket_sutradara=?,
                                    WHERE ticket_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $ticket->getTicketJudul(), PDO::PARAM_STR);
        $stmt->bindValue(2, $ticket->getTicketTanggalRilis(), PDO::PARAM_STR);
        $stmt->bindValue(3, $ticket->getTicketDeskripsi(), PDO::PARAM_STR);
        $stmt->bindValue(4, $ticket->getTicketPoster(), PDO::PARAM_STR);
        $stmt->bindValue(5, $ticket->getTicketGenre(), PDO::PARAM_STR);
        $stmt->bindValue(6, $ticket->getTicketTrailer(), PDO::PARAM_STR);
        $stmt->bindValue(7, $ticket->getTicketJamPenayangan(), PDO::PARAM_STR);
        $stmt->bindValue(8, $ticket->getTicketSutradara(), PDO::PARAM_STR);
        $stmt->bindValue(9, $ticket->getTicketId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function getTicketById(Ticket $ticket)
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbticket WHERE ticket_id = ? LIMIT 1";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $ticket->getTicketId(), PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchObject("Ticket");

        $link = null;

        return $result;

    }
}