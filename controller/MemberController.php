<?php

// INIO MEMBERCONTROLLER UNTUK UPDATE PROFILE USER DAN TOP UP
class MemberController
{
    private $memberDao;
    public function __construct()
    {
        $this->memberDao = new MemberDao();
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

        if (isset($errMessage)){
            echo '<script type="text/javascript">alert("' . $errMessage . '")</script>';
        }
        include_once 'view/membership.php';
    }

}