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
                                     user_name) 
                                     VALUES(?,?,?)";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $user->getUserUsername(), PDO::PARAM_STR);
        $stmt->bindValue(2, $user->getUserPassword(), PDO::PARAM_STR);
        $stmt->bindValue(3, $user->getUserName(), PDO::PARAM_STR);
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
        $query = "DELETE FROM tbuser WHERE user_id=?";

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
        $query = "UPDATE tbuser SET user_username=?,user_password=?,user_name=?  WHERE user_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $user->getUserUsername(), PDO::PARAM_STR);
        $stmt->bindValue(2, $user->getUserPassword(), PDO::PARAM_STR);
        $stmt->bindValue(3, $user->getUserName(), PDO::PARAM_STR);
        $stmt->bindValue(4, $user->getUserId(), PDO::PARAM_INT);
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