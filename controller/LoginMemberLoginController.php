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
        include_once 'view\signinsignup.php';
    }
}

//
//    public function index()
//    {
//        $loginPressed = filter_input(INPUT_POST, 'btnLogin');

//        if(isset($loginPressed))
//        {
//            $username = filter_input(INPUT_POST, 'txtUsername');
//            $password = filter_input(INPUT_POST, 'txtPassword');
//
//            $md5Password = md5($password);
//
//            $this->memberLogin->setMemberUsername($username);
//            $this->memberLogin->setMemberPassword($md5Password);
//            $registeredMember = $this->memberDao->login($this->memberLogin);
//
//
//
//            if($registeredMember != null && $registeredMember->getUserUsername() == $username)
//            {
//                $_SESSION['user_logged'] = true;
//                $_SESSION['name'] = $registeredMember->getUserName();
//                header("location:index.php");
//            } else
//            {
//                $errMsg = "Invalid username or password";
//            }
//
//            if(isset($errMsg))
//            {
//                echo '<div class="err-msg">' . $errMsg . '</div>';
//            }
//        }
//        include_once 'index.php';
//    }

?>





