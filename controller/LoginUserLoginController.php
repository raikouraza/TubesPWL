<?php

class UserLoginController
{
    private $userDao;
    private $userLogin;

    public function __construct()
    {
        $this->userDao = new UserDao();        
        $this->userLogin = new User();
    }

    public function index()
    {
        $loginPressed = filter_input(INPUT_POST, 'btnLogin');

        if(isset($loginPressed))
        {
            $username = filter_input(INPUT_POST, 'txtUsername');
            $password = filter_input(INPUT_POST, 'txtPassword');

            $md5Password = md5($password);

            $this->userLogin->setUserUsername($username);
            $this->userLogin->setUserPassword($md5Password);
            $registeredUser = $this->userDao->login($this->userLogin);

            if($registeredUser != null && $registeredUser->getUserUsername() == $username)
            {
                $_SESSION['user_logged'] = true;
                $_SESSION['name'] = $registeredUser->getUserName();
                $_SESSION['role_id'] = (int)$registeredUser->getUserRole();

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