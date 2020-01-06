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
//<<<<<<< HEAD
//                $errMessage = "Topup berhasil";
//            } else {
//=======
//                $total = (int)$result->getMemberSaldo()+(int)$amount;
//                $errMessage = "Topup senilai Rp." . $amount. " berhasil, Saldo awal = Rp." . $result->getMemberSaldo() . " menjadi Rp." . $total;
//            }else{
//>>>>>>> d96c3cc09e2198a9ab9b62b0062029f3a40f7ea0
                $errMessage = "Username tidak ditemukan";
            }
        }


        if (isset($errMessage)) {
            echo '<script type="text/javascript">alert("' . $errMessage . '")</script>';
        }
        $topups = $this->topupDao->getAllTopup();
        include_once '../../view/dashboard/form_topup_saldo_manual.php';

    }
    public function Index2()
    {
        $topups = $this->topupDao->getAllTopup();
        include_once '../../view/dashboard/form_topup_verification.php';
    }
    public function accept(){
        $submitted = filter_input(INPUT_POST, 'btnAccept');
        if (isset($submitted)) {
            $topupManual = new Topup();
            $topupManual->setTopupStatus(1);
        }

    }
    public function reject(){
        $submitted = filter_input(INPUT_POST, 'btnReject');
            if (isset($submitted)) {
                $topupManual = new Topup();
                $topupManual->setTopupStatus(0);
            }

    }
}