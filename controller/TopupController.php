<?php


class TopupController
{
    private $memberDao;
    private $topupDao;

    public function __construct()
    {
        $this->memberDao = new MemberDao();
        $this->topupDao = new TopupDao();

    }
    public function Index()
    {
        ///TOP UP SALDO
        $submitted = filter_input(INPUT_POST, 'btnTopup');
        if (isset($submitted)) {
            $username = filter_input(INPUT_POST, 'txtUsername');
            $amount = filter_input(INPUT_POST, 'txtAmount');
            $memberTopup = new Member();
            $memberTopup->setMemberUsername($username);
            $result = $this->memberDao->getMemberByUsername($memberTopup);


            $topupManual = new Topup();
            if ($result != null) {
                $topupManual->setTopupAmount($amount);
                $topupManual->setTbMemberMemberId($result->getMemberId());
                $topupManual->setTopupStatus(1);
                $topupManual->setTopupTanggal(date("Y-m-d"));
                $this->topupDao->addTopup($topupManual);

                $result->setMemberSaldo((int)$result->getMemberSaldo() + (int)$amount);
                $this->memberDao->addMemberSaldoById($result);

                $total = (int)$result->getMemberSaldo()+(int)$amount;
                $errMessage = "Topup senilai Rp." . $amount. " berhasil, Saldo awal = Rp." . $result->getMemberSaldo() . " menjadi Rp." . $total;
            }else{

                $errMessage = "Username tidak ditemukan";
            }
        }


        if (isset($errMessage)) {
            echo '<script type="text/javascript">alert("' . $errMessage . '")</script>';
        }
        $topups = $this->topupDao->getAllTopup();
        include_once '../../view/dashboard/form_topup_saldo_manual.php';

    }


    public function Index2(){
        $topup = new Topup();
        $member = new Member();


        if (isset($_POST['btnAcc'])) {
            $topup->setTopupId($topup["Topup_id"]);
            $topup->setTopupStatus("1");
            $this->topupDao->changeTopupStatus($topup);
            $member->setMemberUsername($topup["tbMember_member_id"]);
            $result = $this->memberDao->getMemberByUsername($member);
            $result->setMemberSaldo((int)$result->getMemberSaldo() + (int)$topup["Topup_amount"]);

        }


        if (isset($_POST['btnReject'])) {
            $topup->setTopupId($topup["Topup_id"]);
            $topup->setTopupStatus("0");
            $this->topupDao->changeTopupStatus($topup);

        }



        include_once '../../view/dashboard/form_topup_verification.php';

    }
}