<?php


class User{
    private $user_id;
    private $user_username;
    private $user_password;
    private $user_role;
    private $user_name;

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getUserUsername()
    {
        return $this->user_username;
    }

    /**
     * @param mixed $user_username
     */
    public function setUserUsername($user_username)
    {
        $this->user_username = $user_username;
    }

    /**
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->user_password;
    }

    /**
     * @param mixed $user_password
     */
    public function setUserPassword($user_password)
    {
        $this->user_password = $user_password;
    }

    /**
     * @return mixed
     */
    public function getUserRole()
    {
        return $this->user_role;
    }

    /**
     * @param mixed $user_role
     */
    public function setUserRole($user_role)
    {
        $this->user_role = $user_role;
    }

}