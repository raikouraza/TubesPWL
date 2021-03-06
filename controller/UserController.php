<?php


class UserController
{
    private $userDao;

    public function __construct()
    {
        $this->userDao = new UserDao();
    }

    public function indexCreate()
    {
        // Change acording to submmit create button
        $submitted = filter_input(INPUT_POST, 'btnSubmit');
        if (isset($submitted)) {
            $user_username = filter_input(INPUT_POST, 'txtUserUsername');
            $user_password = filter_input(INPUT_POST, 'txtUserPassword');
            $user_name = filter_input(INPUT_POST, 'txtUserName');

            $user = new User();
            $user->setUserUsername($user_username);
            $user->setUserPassword($user_password);
            $user->setUserName($user_name);
            $user->setUserRole('kasir');

            if(fieldNotEmpty(array($user_username, $user_password, $user_name)))
            {
                $this->userDao->addUser($user);
            }
            else
                $errMessage = 'Please check your input!';
        }

        if(isset($errMessage)){
            echo '<script type="text/javascript">alert("' . $errMessage . '")</script>';
        }

        $users = $this->userDao->getAllUser();
        include_once '../../view/dashboard/form_create_user.php';
    }

    public function indexUpdate()
    {
        // Block below for fetch data
        $user_id = filter_input(INPUT_GET, 'user_id');
        if (isset($user_id))
        {
            $user = new User();
            $user->setUserId($user_id);
            $user = $this->userDao->getUserById($user);
        }

        // Change according to submit create button
        $submitted = filter_input(INPUT_POST, 'btnUpdate');
        if (isset($submitted)) {
            $user_username = filter_input(INPUT_POST, 'txtUserUsername');
            $user_password = filter_input(INPUT_POST, 'txtUserPassword');
            $user_name = filter_input(INPUT_POST, 'txtUserName');

            $updatedUser = new User();
            /* @var $user User */
            $updatedUser->setUserId($user->getUserId());
            $updatedUser->setUserUsername($user_username);
            $updatedUser->setUserPassword($user_password);
            $updatedUser->setUserName($user_name);
            $updatedUser->setUserRole('kasir');

            if(fieldNotEmpty(array($user_username, $user_password, $user_name)))
            {
                $this->userDao->updateUser($updatedUser);
                header("location:../../view/dashboard/index.php?dashboard=updateDeleteUser");
            }
            else
                $errMessage = 'Please check your input!';
        }

        if(isset($errMessage)){
            echo '<script type="text/javascript">alert("' . $errMessage . '")</script>';
        }
        include_once '../../view/dashboard/form_update_user.php';
    }

    public function indexUpdateDelete()
    {
        $deleteCommand =filter_input(INPUT_GET, 'delcom');
        if (isset($deleteCommand) && $deleteCommand == 1) {
            $user_id = filter_input(INPUT_GET, 'user_id');
            $toBeDeletedUser = new User();
            $toBeDeletedUser->setUserId($user_id);
            $this->userDao->deleteUser($toBeDeletedUser);
        }

        $users = $this->userDao->getAllUser();
        include_once '../../view/dashboard/form_update_delete_user.php';
    }

    public function indexLogin()
    {
        $loginPressed = filter_input(INPUT_POST, 'btnLogin');

        if(isset($loginPressed))
        {
            $username = filter_input(INPUT_POST, 'txtUsername');
            $password = filter_input(INPUT_POST, 'txtPassword');

            $userLogin = new User();
            $userLogin->setUserUsername($username);
            $userLogin->setUserPassword($password);
            $registeredUser = $this->userDao->login($userLogin);

            if($registeredUser != null && $registeredUser->getUserUsername() == $username)
            {
                $_SESSION['user_logged'] = true;
                $_SESSION['name'] = $registeredUser->getUserName();
                $_SESSION['user_role'] = $registeredUser->getUserRole();

                header("location:../../view/dashboard/index.php");
            } else
            {
                $errMsg = "Invalid username or password";
            }

            if(isset($errMsg)){
                echo '<script type="text/javascript">alert("' . $errMsg . '")</script>';
            }
        }
        include_once '../../view/dashboard/dashboard_login.php';
    }
}