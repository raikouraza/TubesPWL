<?php

// INIO MEMBERCONTROLLER UNTUK UPDATE PROFILE USER DAN TOP UP
class MemberController
{
    private $memberDao;
    private $topupDao;
    private $tiketDao;
    public function __construct()
    {
        $this->memberDao = new MemberDao();
        $this->topupDao = new TopupDao();
        $this->tiketDao = new TiketDao();
    }
    public function Index()  {
        $id = $_SESSION['id'];
        if (isset($id)) {
            $member = new Member();
            $memberDao = new MemberDao();
            $member->setMemberId($id);
            $member = $memberDao->getMemberById($member);
        }

        // Update Data Member
        $submitted = filter_input(INPUT_POST, 'btnMemberUpdate');
        if (isset($submitted)) {
            $member_email = filter_input(INPUT_POST, 'txtMemberEmail');
            $member_first_name = filter_input(INPUT_POST, 'txtMemberFirstName');
            $member_last_name = filter_input(INPUT_POST, 'txtMemberLastName');


            if (!Empty(array($member_email, $member_first_name, $member_last_name))) {
                try {
                    if (isset($_FILES['txtMemberPhoto']['name'])) {
                        $targetDirectory = 'src/images/poster/';
                        $targetFile = $targetDirectory . $member_first_name . '.' . pathinfo($_FILES['txtMemberPhoto']['name'], PATHINFO_EXTENSION);
                        move_uploaded_file($_FILES['txtMemberPhoto']['tmp_name'], $targetFile);
                        $member->setMemberEmail($member_email);
                        $member->setMemberNamaDepan($member_first_name);
                        $member->setMemberNamaBelakang($member_last_name);
                        $member->setMemberPhoto($targetFile);
                        $this->memberDao->updateMember($member);
                    } else {
                        $member->setMemberPhoto(null);
                        $this->memberDao->updateMember($member);
                    }
                    $errMessage = "Update Profile Berhasil";
                    header("Location: index.php?menu=mem");
                } catch (Exception $e) {
                    echo $e;
                }
            }

        }

        // CHANGE PASSWORD
        $submitted = filter_input(INPUT_POST, 'btnTopup');
        if (isset($submitted)){
            $tfImage = filter_input(INPUT_POST, 'txtTransfer');
            $date = filter_input(INPUT_POST, 'txtDate');
            $amount = filter_input(INPUT_POST, 'txtAmount');
            $inputTopup =  new Topup();
            $inputTopup->setTopupImage($tfImage);
            $inputTopup->setTopupTanggal($date);
            $inputTopup->setTopupAmount($amount);
            $inputTopup->setTbMemberMemberId($_SESSION['id']);
            $inputTopup->setTopupStatus(0);
            $this->topupDao->addTopup($inputTopup);

        }


        // TOP UP SALDO
        $submitted = filter_input(INPUT_POST, 'btnChangePassword');
        if (isset($submitted)) {
            $pass1 = filter_input(INPUT_POST, 'txtNewPassword');
            $pass2 = filter_input(INPUT_POST, 'txtNewPassword2');
            if($pass1===$pass2){
                $member->setMemberPassword($pass1);
                $this->memberDao->updatePassword($member);
                $errMessage = "Password berhasil diganti";
            }else{
                $errMessage = "Password tidak sama, coba lagi";
            }
        }

        // GET ALL TOP UP TRANSACTION BY MEMBER ID
        $topid = new Topup();
        $topid->setTbMemberMemberId($_SESSION['id']);
        $topups = $this->topupDao->getAllTopupByMemberId($topid);

        // GET ALL TIKET TRANSACTIONS BY MEMBER ID
        $tiketid = new Tiket();
        $tiketid->setTbMemberMemberId($_SESSION['id']);
        $tikets = $this->tiketDao->getAllTiketByMemberId($tiketid);


        if (isset($errMessage)){
            echo '<script type="text/javascript">alert("' . $errMessage . '")</script>';
        }
        include_once 'view/membership.php';
    }

}