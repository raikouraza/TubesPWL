<?php

class MemberDao{
    function login(Member $member)
    {
        $link = DBHelper::createMySQLConnection();
        $query = "SELECT * FROM tbmember WHERE member_username=? AND member_password=? LIMIT 1";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $member->getMemberUsername());
        $stmt->bindValue(2, $member->getMemberPassword());
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Member');
        $stmt->execute();
        $result = $stmt->fetch();
        $link = null;
        return $result;
    }


function getAllMember()
{
    $link = DBHelper::createMySQLConnection();

    $query = "SELECT * FROM tbmember";

    $result = $link->query($query);

    $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Member");

    return $result;

}

function addMember(Member $member)
{
    $link = DBHelper::createMySQLConnection();
    $link->beginTransaction();
    $query = "INSERT INTO tbmember(member_username,
                                 member_password,
                                 member_email,
                                 member_nama_depan,
                                 member_nama_belakang,
                                 member_photo) 
                                 VALUES(?,?,?,?,?,?)";

    $stmt = $link->prepare($query);
    $stmt->bindValue(1, $member->getMemberUsername(), PDO::PARAM_STR);
    $stmt->bindValue(2, $member->getMemberPassword(), PDO::PARAM_STR);
    $stmt->bindValue(3, $member->getMemberEmail(), PDO::PARAM_STR);
    $stmt->bindValue(4, $member->getMemberNamaDepan(), PDO::PARAM_STR);
    $stmt->bindValue(5, $member->getMemberNamaBelakang(), PDO::PARAM_STR);
    $stmt->bindValue(6, $member->getMemberPhoto(), PDO::PARAM_STR);
    if ($stmt->execute()) {
        $link->commit();
        $status = 1;
    } else {
        $link->rollBack();
        $status = 0;
    }

    $link = null;
    return $status;

}

function deleteMember(Member $member){
    $link = DBHelper::createMySQLConnection();
    $link->beginTransaction();
    $query = "DELETE FROM tbmember WHERE member_id=?";

    $stmt = $link->prepare($query);
    $stmt->bindValue(1, $member->getMemberId(), PDO::PARAM_INT);
    if ($stmt->execute()) {
        $link->commit();
    } else {
        $link->rollBack();
    }

    $link = null;

}

// member tidak bisa mengganti username
function updateMember(Member $member){
    $link = DBHelper::createMySQLConnection();
    $link->beginTransaction();
    $query = "UPDATE tbmember SET   member_email=?,
                                    member_nama_depan=?,
                                    member_nama_belakang=?,
                                    member_photo=?  
                                    WHERE member_id=?";

    $stmt = $link->prepare($query);
    $stmt->bindValue(1, $member->getMemberEmail(), PDO::PARAM_STR);
    $stmt->bindValue(2, $member->getMemberNamaDepan(), PDO::PARAM_STR);
    $stmt->bindValue(3, $member->getMemberNamaBelakang(), PDO::PARAM_STR);
    $stmt->bindValue(4, $member->getMemberPhoto(), PDO::PARAM_STR);
    $stmt->bindValue(5, $member->getMemberId(), PDO::PARAM_STR);
    if ($stmt->execute()) {
        $link->commit();
    } else {
        $link->rollBack();
    }

    $link = null;

}

    function updateSaldoMember(Member $member){
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "UPDATE tbmember SET   member_saldo=?,
                                    WHERE member_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $member->getMemberSaldo(), PDO::PARAM_STR);
        $stmt->bindValue(2, $member->getMemberId(), PDO:: PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

function updatePassword(Member $member)
{
    $link = DBHelper::createMySQLConnection();
    $link->beginTransaction();
    $query = "UPDATE tbmember SET member_password=? WHERE member_id=?";

    $stmt = $link->prepare($query);
    $stmt->bindValue(1, $member->getMemberPassword(), PDO::PARAM_STR);
    $stmt->bindValue(2, $member->getMemberId(), PDO::PARAM_INT);
    if ($stmt->execute()) {
        $link->commit();
    } else {
        $link->rollBack();
    }

    $link = null;

}

function getMemberById(Member $member)
{
    $link = DBHelper::createMySQLConnection();
    $query = "SELECT * FROM tbmember WHERE member_id = ? LIMIT 1";
    $stmt = $link->prepare($query);
    $stmt->bindValue(1, $member->getMemberId(), PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchObject("Member");
    $link = null;
    return $result;
}

function addMemberSaldoById(Member $member){
    $link = DBHelper::createMySQLConnection();
    $link->beginTransaction();
    $query = "UPDATE tbmember SET   member_saldo=?
                                WHERE member_id=?";

    $stmt = $link->prepare($query);
    $stmt->bindValue(1, $member->getMemberSaldo(), PDO::PARAM_INT);
    $stmt->bindValue(2, $member->getMemberId(), PDO::PARAM_STR);
    if ($stmt->execute()) {
        $link->commit();
    } else {
        $link->rollBack();
    }

    $link = null;

}

    function getMemberByEmail(Member $member)
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbmember WHERE member_email = ? LIMIT 1";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $member->getMemberEmail(), PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchObject("Member");

        $link = null;
        return $result;
    }


    function getMemberByUsername(Member $member)
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbmember WHERE member_username = ? LIMIT 1";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $member->getMemberUsername(), PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchObject("Member");

        $link = null;
        return $result;
    }


    function addMemberSaldoByUsername(Member $member){
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "UPDATE tbmember SET member_saldo=?
                                WHERE member_username=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $member->getMemberSaldo(), PDO::PARAM_INT);
        $stmt->bindValue(2, $member->getMemberUsername(), PDO::PARAM_STR);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

}