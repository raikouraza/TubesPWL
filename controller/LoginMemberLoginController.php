<?php

class UserLoginController
{
    private $memberDao;
    private $memberLogin;

    public function __construct()
    {
        $this->memberDao = new MemberDao();        
        $this->memberLogin = new Member();
    }

    public function index()
    {
        $loginPressed = filter_input(INPUT_POST, 'btnLogin');

        if(isset($loginPressed))
        {
            $username = filter_input(INPUT_POST, 'txtUsername');
            $password = filter_input(INPUT_POST, 'txtPassword');

            $md5Password = md5($password);

            $this->memberLogin->setMemberUsername($username);
            $this->memberLogin->setMemberPassword($md5Password);
            $registeredMember = $this->memberDao->login($this->memberLogin);

            if($registeredMember != null && $registeredMember->getUserUsername() == $username)
            {
                $_SESSION['user_logged'] = true;
                $_SESSION['name'] = $registeredMember->getUserName();
                $_SESSION['role_id'] = (int)$registeredMember->getUserRole();

                header("location:index.php");
            } else
            {
                $errMsg = "Invalid username or password";
            }

            if(isset($errMsg))
            {
                echo '<div class="err-msg">' . $errMsg . '</div>';
            }
        }
        include_once 'view/login.php';
    }
}

?>