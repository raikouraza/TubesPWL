<?php


class Member{
    private $member_id;
    private $member_username;
    private $member_password;
    private $member_email;
    private $member_nama_depan;
    private $member_nama_belakang;
    private $member_photo;
    private $member_saldo;

    /**
     * @return mixed
     */
    public function getMemberSaldo()
    {
        return $this->member_saldo;
    }

    /**
     * @param mixed $member_saldo
     */
    public function setMemberSaldo($member_saldo)
    {
        $this->member_saldo = $member_saldo;
    }
    /**
     * @return mixed
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * @param mixed $member_id
     */
    public function setMemberId($member_id)
    {
        $this->member_id = $member_id;
    }

    /**
     * @return mixed
     */
    public function getMemberUsername()
    {
        return $this->member_username;
    }

    /**
     * @param mixed $member_username
     */
    public function setMemberUsername($member_username)
    {
        $this->member_username = $member_username;
    }

    /**
     * @return mixed
     */
    public function getMemberPassword()
    {
        return $this->member_password;
    }

    /**
     * @param mixed $member_password
     */
    public function setMemberPassword($member_password)
    {
        $this->member_password = $member_password;
    }

    /**
     * @return mixed
     */
    public function getMemberEmail()
    {
        return $this->member_email;
    }

    /**
     * @param mixed $member_email
     */
    public function setMemberEmail($member_email)
    {
        $this->member_email = $member_email;
    }

    /**
     * @return mixed
     */
    public function getMemberNamaDepan()
    {
        return $this->member_nama_depan;
    }

    /**
     * @param mixed $member_nama_depan
     */
    public function setMemberNamaDepan($member_nama_depan)
    {
        $this->member_nama_depan = $member_nama_depan;
    }

    /**
     * @return mixed
     */
    public function getMemberNamaBelakang()
    {
        return $this->member_nama_belakang;
    }

    /**
     * @param mixed $member_nama_belakang
     */
    public function setMemberNamaBelakang($member_nama_belakang)
    {
        $this->member_nama_belakang = $member_nama_belakang;
    }

    /**
     * @return mixed
     */
    public function getMemberPhoto()
    {
        return $this->member_photo;
    }

    /**
     * @param mixed $member_photo
     */
    public function setMemberPhoto($member_photo)
    {
        $this->member_photo = $member_photo;
    }

}