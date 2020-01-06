<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
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
            echo '<div class="err-msg">' . $loginPressed .'</div>';
            $username = filter_input(INPUT_POST, 'txtUsername');
            $password =filter_input(INPUT_POST, 'txtPassword');
            $memberLogin = new Member();
            $memberLogin->setMemberUsername($username);
            $memberLogin->setMemberPassword($password);
            $registeredMember = $this->memberDao->login($memberLogin);
            /* @var $registeredMember Member*/

            if($registeredMember != null && $registeredMember->getMemberUsername() == $username){
                echo '<div class="err-msg">' . $registeredMember->getMemberUsername() .'</div>';
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
            echo '<script type="text/javascript">alert("' . $errMsg . '")</script>';
//            echo '<div class="err-msg">' . $errMsg .'</div>';
        }

        // SIGN UP FUNCTION
         $signupPressed = filter_input(INPUT_POST,'btnSignup');
         if(isset($signupPressed)){
            $username   = filter_input(INPUT_POST, 'txtSUUsername');
            $password   = filter_input(INPUT_POST, 'txtSUPassword');
            $firstName  = filter_input(INPUT_POST, 'txtSUFirstName');
            $lastName   = filter_input(INPUT_POST, 'txtSULastName');
            $email      = filter_input(INPUT_POST, 'txtSUEmail');

            $memberSignup = new Member();
            $memberSignup->setMemberUsername($username);
            $memberSignup->setMemberEmail($email);
            $memberSignup->setMemberPassword($password);
            $memberSignup->setMemberNamaDepan($firstName);
            $memberSignup->setMemberNamaBelakang($lastName);
            if($this->memberDao->getMemberByEmail($memberSignup)==null){
                if($this->memberDao->getMemberByUsername($memberSignup)==null){
                    $signedup = $this->memberDao->addMember($memberSignup);
                    if($signedup==1){
                        $errMsg = "Pendaftaran Akun Berhasil!,Silakan Login";
                        header('location:index.php?menu=sin');

                    }else{
                        $errMsg = "Pendaftaran Akun Baru ERROR!,Silakan coba lagi";
                    }
                }else{
                    $errMsg = "Username Sudah Terdaftar";
                }
            }else{
                $errMsg = "Email Sudah Terdaftar";
            }


        }
        if (isset($errMsg)){
            echo '<script type="text/javascript">alert("' . $errMsg . '")</script>';
        }

         // FORGOT PASSWORD FUNCTION
         $fpPressed = filter_input(INPUT_POST,'btnForgotPassword');
         if(isset($fpPressed)){
             var_dump($fpPressed);
             $fpemail =filter_input(INPUT_POST, 'txtFPEmail');

             $memberForgotPassword = new Member();
             $memberForgotPassword->setMemberEmail($fpemail);
             $result = $this->memberDao->getMemberByEmail($memberForgotPassword);



             // generate new password
             $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
             $pass = array();
             $alphaLength = strlen($alphabet) - 1;
             for ($i = 0; $i < 6; $i++) {
                 $n = rand(0, $alphaLength);
                 $pass[] = $alphabet[$n];
             }
             $newPassword = implode($pass);


             $MemberWithNewPassword = new Member();
             if($result!=null ){
                 // SEND NEW PASSWORD TO EMAIl !!!
                 date_default_timezone_set('Etc/UTC');
                 $mail = new PHPMailer;
                 $mail->isSMTP();
                 $mail->SMTPDebug = 0;
                 $mail->Host = 'smtp.gmail.com';
                 $mail->Port = 587;
                 $mail->SMTPSecure = 'tls';
                 $mail->SMTPAuth = true;
                 $mail->Username = "ariefk.tugas@gmail.com";
                 $mail->Password = "ariefkurniawan123";
                 $mail->setFrom('DoNotReply@CINEMAYAS.com', 'CINEMA YAS!');
                 $mail->addAddress($result->getMemberEmail(), $result->getMemberNamaDepan());
                 $mail->Subject = 'New Password - CINEMA YAS!';
                 $mail->Body = 'Hallo, ' . $result->getMemberUsername() . "\nPassword baru anda adalah : " . $newPassword .
                                "\nSILAKAN LOGIN DAN GANTI PASSWORD ANDA DENGAN PASSWORD YANG BARU!" .
                                "\n\n\n TUGAS BESAR PWL 2020";
                 if($mail->send()){
                     $MemberWithNewPassword->setMemberId($result->getMemberId());
                     $MemberWithNewPassword->setMemberPassword($newPassword);
                     $this->memberDao->updatePassword($MemberWithNewPassword);
                     $pesan = "Silakan cek folder inbox atau spam di email anda untuk mendapatkan password yang baru";
                     header('location:index.php?menu=hm');
                 }else{
                     $pesan = "Email gagal dikirim,coba lagi " . $mail->ErrorInfo;
                 }
                 }else{
                 $pesan = "Email tidak ditemukan!";
             }

             if (isset($pesan)){
                 echo '<script type="text/javascript">alert("' . $pesan . '")</script>';
             }
         }


        include_once 'view/signinsignup.php';
    }
}
?>
