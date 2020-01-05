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

    public function login(){

        $loginPressed = filter_input(INPUT_POST,'btnSubmit');
        if(isset($loginPressed)){

            $username = filter_input(INPUT_POST, 'txtUsername');
            $password =filter_input(INPUT_POST, 'txtPassword');

            $memberLogin = new Member();
            $memberLogin->setMemberUsername($username);
            $memberLogin->setMemberPassword($password);
            $registeredUser = $this->memberDao->getMemberById($memberLogin);
            if(isset($registeredUser)&& !empty($registeredUser->name)){
                $_SESSION['user_logged'] = true;
                $_SESSION['name'] = $registeredUser->name;
                $_SESSION['id'] = $registeredUser->id;
                header('location:index.php');
            }
            else{
                $errMsg = "Invalid Username or Password!";
            }
        }
        if (isset($errMsg)){
            echo '<div class="err-msg">' . $errMsg .'</div>';
        }
        include_once '..\..\view\signinsignup.php';
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





