<?php

class UserDao{
    function login(User $user)
    {
        $link = DBHelper::createMySQLConnection();
        $query = "SELECT * FROM tbuser WHERE user_username=? AND user_password=? LIMIT 1";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $user->getUserUsername(), PDO::PARAM_STR);
        $stmt->bindValue(2, $user->getUserPassword(), PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchObject("User");
        $link = null;
        return $result;
    }


    function getAllUser()
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbuser";

        $result = $link->query($query);

        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "User");

        return $result;

    }

    function addUser(User $user)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "INSERT INTO tbuser(user_username,
                                     user_password,
                                     user_role,
                                     user_name) 
                                     VALUES(?,?,?,?)";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $user->getUserUsername(), PDO::PARAM_STR);
        $stmt->bindValue(2, $user->getUserPassword(), PDO::PARAM_STR);
        $stmt->bindValue(3, $user->getUserRole(), PDO::PARAM_STR);
        $stmt->bindValue(4, $user->getUserName(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function deleteUser(User $user){
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "DELETE FROM tbuser WHERE id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $user->getUserId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function updateUser(User $user){
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "UPDATE tbuser SET user_name=?,user_role=?  WHERE user_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $user->getUserName(), PDO::PARAM_STR);
        $stmt->bindValue(2, $user->getUserRole(), PDO::PARAM_INT);
        $stmt->bindValue(3, $user->getUserId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function updatePassword(User $user)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "UPDATE tbuser SET user_password=? WHERE user_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $user->getUserPassword(), PDO::PARAM_STR);
        $stmt->bindValue(2, $user->getUserId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function getUserById(User $user)
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbuser WHERE user_id = ? LIMIT 1";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $user->getUserId(), PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchObject("User");

        $link = null;

        return $result;

    }
}