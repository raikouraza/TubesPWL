<?php


class Topup{
    private $topup_id;
    private $topup_image;
    private $topup_tanggal;
    private $tbMember_member_id;
    private $topup_status;
    private $topup_amount;

    /**
     * @return mixed
     */
    public function getTopupId()
    {
        return $this->topup_id;
    }

    /**
     * @param mixed $topup_id
     */
    public function setTopupId($topup_id)
    {
        $this->topup_id = $topup_id;
    }

    /**
     * @return mixed
     */
    public function getTopupImage()
    {
        return $this->topup_image;
    }

    /**
     * @param mixed $topup_image
     */
    public function setTopupImage($topup_image)
    {
        $this->topup_image = $topup_image;
    }

    /**
     * @return mixed
     */
    public function getTopupTanggal()
    {
        return $this->topup_tanggal;
    }

    /**
     * @param mixed $topup_tanggal
     */
    public function setTopupTanggal($topup_tanggal)
    {
        $this->topup_tanggal = $topup_tanggal;
    }

    /**
     * @return mixed
     */
    public function getTbMemberMemberId()
    {
        return $this->tbMember_member_id;
    }

    /**
     * @param mixed $tbMember_member_id
     */
    public function setTbMemberMemberId($tbMember_member_id)
    {
        $this->tbMember_member_id = $tbMember_member_id;
    }

    /**
     * @return mixed
     */
    public function getTopupStatus()
    {
        return $this->topup_status;
    }

    /**
     * @param mixed $topup_status
     */
    public function setTopupStatus($topup_status)
    {
        $this->topup_status = $topup_status;
    }

    /**
     * @return mixed
     */
    public function getTopupAmount()
    {
        return $this->topup_amount;
    }

    /**
     * @param mixed $topup_amount
     */
    public function setTopupAmount($topup_amount)
    {
        $this->topup_amount = $topup_amount;
    }


}