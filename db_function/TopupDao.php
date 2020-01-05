<?php

class TopupDao{

    function getAllTopup()
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbtopup";

        $result = $link->query($query);

        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Topup");

        return $result;

    }

    function addTopup(Topup $topup)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "INSERT INTO tbtopup(topup_image,
                                     topup_tanggal,
                                     tbMember_member_id,
                                     topup_status,
                                     topup_amount) 
                                     VALUES(?,?,?,?,?)";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $topup->getTopupImage(), PDO::PARAM_STR);
        $stmt->bindValue(2, $topup->getTopupTanggal(), PDO::PARAM_STR);
        $stmt->bindValue(3, $topup->getTbMemberMemberId(), PDO::PARAM_INT);
        $stmt->bindValue(4, $topup->getTopupStatus(), PDO::PARAM_STR);
        $stmt->bindValue(5, $topup->getTopupAmount(), PDO::PARAM_STR);


        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function deleteTopup(Topup $topup)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "DELETE FROM tbtopup WHERE topup_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $topup->getTopupId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function updateTopup(Topup $topup)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "UPDATE tbtopup SET topup_image=?,
                                     topup_tanggal=?,
                                     tbMember_member_id=?,
                                     topup_status=?,
                                     topup_amount=? 
                                    WHERE topup_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $topup->getTopupImage(), PDO::PARAM_STR);
        $stmt->bindValue(2, $topup->getTopupTanggal(), PDO::PARAM_STR);
        $stmt->bindValue(3, $topup->getTbMemberMemberId(), PDO::PARAM_INT);
        $stmt->bindValue(4, $topup->getTopupStatus(), PDO::PARAM_STR);
        $stmt->bindValue(5, $topup->getTopupAmount(), PDO::PARAM_STR);
        $stmt->bindValue(6, $topup->getTopupId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function getTopupById(Topup $topup)
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbtopup WHERE topup_id = ? LIMIT 1";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $topup->getTopupId(), PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchObject("Topup");

        $link = null;

        return $result;

    }

    function changeTopupStatus(Topup $topup)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "UPDATE tbtopup SET topup_status=?
                                    WHERE topup_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $topup->getTopupStatus(), PDO::PARAM_STR);
        $stmt->bindValue(2, $topup->getTopupId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }
}