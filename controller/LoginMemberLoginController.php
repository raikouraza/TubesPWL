<?php

class LoginMemberLoginController
{
    private $memberDao;
    private $memberLogin;

    public function __construct()
    {
        $this->memberDao = new MemberDao();        
        $this->memberLogin = new Member();
    }

    public function index(){
        // LOGIN FUNCTION
        $loginPressed = filter_input(INPUT_POST,'btnLogin');
        if(isset($loginPressed)){

            $username = filter_input(INPUT_POST, 'txtUsername');
            $password =filter_input(INPUT_POST, 'txtPassword');

            $memberLogin = new Member();
            $memberLogin->setMemberUsername($username);
            $memberLogin->setMemberPassword($password);
            $registeredMember = $this->memberDao->login($memberLogin);
            /* @var $registeredMember Member*/
            echo '<div class="err-msg">' . $registeredMember->getMemberUsername() .'</div>';
            if($registeredMember != null && $registeredMember->getMemberUsername() == $username){
                $_SESSION['user_logged'] = true;
                $_SESSION['name'] = $registeredMember->getMemberNamaBelakang() . $registeredMember->getMemberNamaBelakang();
                $_SESSION['id'] = $registeredMember->getMemberId();
                header('location:index.php?menu=hm');
            }
            else{
                $errMsg = "Invalid Username or Password!";
            }
        }
        if (isset($errMsg)){
            echo '<div class="err-msg">' . $errMsg .'</div>';
        }

        // SIGN UP FUNCTION
         $signupPressed = filter_input(INPUT_POST,'btnSignup');
         if(isset($signupPressed)){

            $username = filter_input(INPUT_POST, 'txtSUUsername');
            $password =filter_input(INPUT_POST, 'txtSUPassword');
            $firstName =filter_input(INPUT_POST, 'txtSUFirstName');
            $lastName =filter_input(INPUT_POST, 'txtSULastName');
            $email =filter_input(INPUT_POST, 'txtSUEmail');

            $memberSignup = new Member();
            $memberSignup->setMemberUsername($username);
            $memberSignup->setMemberPassword($password);
            $memberSignup->setMemberNamaDepan($firstName);
            $memberSignup->setMemberNamaBelakang($lastName);
            $memberSignup->setMemberEmail($email);
            $signedup = $this->memberDao->addMember($memberSignup);

            if($signedup == 1){
                $errMsg = "Pendaftaran Akun Berhasil!,Silakan Login";

            }
            else{
                $errMsg = "Pendaftaran Akun Baru ERROR!,Silakan coba lagi";
            }
        }
        if (isset($errMsg)){
            echo '<div class="err-msg">' . $errMsg .'</div>';
        }

         // FORGOT PASSWORD FUNCTION
         $fpPressed = filter_input(INPUT_POST,'btnForgotPassword');
         if(isset($fpPressed)){
             $fpemail =filter_input(INPUT_POST, 'txtFPEmail');

             $memberForgotPassword = new Member();
             $memberForgotPassword->setMemberEmail($fpemail);
             $result = $this->memberDao->getMemberByEmail($memberForgotPassword);
             var_dump($result);


             // generate new password
             $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
             $pass = array(); //remember to declare $pass as an array
             $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
             for ($i = 0; $i < 6; $i++) {
                 $n = rand(0, $alphaLength);
                 $pass[] = $alphabet[$n];
             }
             $newPassword = implode($pass);

             $to = $result->getMemberEmail();
             $subject = 'New Password - CinemaYAS';
             $message = 'Hello ' . $result->getMemberUsername() . ' Your New Password is ' . $newPassword;
             $from = "From: Cinema YAS <DoNotReply@CinemaYAS.com>";


             $MemberWithNewPassword = new Member();
             $MemberWithNewPassword->setMemberId($result->getMemberId());
             $MemberWithNewPassword->setMemberPassword($newPassword);
             if($result!=null){
                 $this->memberDao->updatePassword($MemberWithNewPassword);
                 mail($to,$subject,$message,$from);
                 $pesan = "Silakan cek folder inbox atau spam di email anda untuk mendapatkan password yang baru";
             }else{
                 $pesan = "Email tidak ditemukan!";
             }

             if (isset($pesan)){
                 echo '<script type="text/javascript">alert("' . $pesan . '")</script>';
             }
         }


        include_once 'view\signinsignup.php';
    }



}



?>





