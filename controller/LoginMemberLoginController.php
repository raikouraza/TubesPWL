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


        include_once 'view\signinsignup.php';
    }


    public function forgotPassword(){

    }
}



?>





