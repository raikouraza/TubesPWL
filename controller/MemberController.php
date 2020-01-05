<?php


class MemberController
{
    private $memberDao;

    public function __construct()
    {
        $this->memberDao = new MemberDao();
    }

    public function indexCreate()
    {
        // Change acording to submmit create button
        $submitted = filter_input(INPUT_POST, 'btnSubmit');
        if (isset($submitted)) {
            $member_username = filter_input(INPUT_POST, 'txtMemberUsername');
            $member_password = filter_input(INPUT_POST, 'txtMemberPassword');
            $member_email = filter_input(INPUT_POST, 'txtMemberEmail');
            $member_first_name = filter_input(INPUT_POST, 'txtMemberFirstName');
            $member_last_name = filter_input(INPUT_POST, 'txtMemberLastName');

            $member = new Member();
            $member->setMemberUsername($member_username);
            $member->setMemberPassword($member_password);
            $member->setMemberEmail($member_email);
            $member->setMemberNamaDepan($member_first_name);
            $member->setMemberNamaBelakang($member_last_name);

            if (fieldNotEmpty(array($member_username, $member_password, $member_email, $member_first_name, $member_last_name))) {
                if (isset($_FILES['txtMemberPhoto']['name'])) {
                    $targetDirectory = '../../src/images/poster/';
                    $targetFile = $targetDirectory . $_FILES['txtMemberPhoto']['name'];
                    move_uploaded_file($_FILES['txtMemberPhoto']['tmp_name'], $targetFile);
                    $member->setMemberPhoto($targetFile);
                    $this->memberDao->addMember($member);
                } else
                    $this->memberDao->addMember($member);
            } else
                $errMessage = 'Please check your input!';
        }

        if (isset($errMessage))
            echo '<div class="err-msg">' . $errMessage . '</div>';
        $members = $this->memberDao->getAllMember();
        include_once '../../view/dashboard/form_create_member.php';
    }

    public function indexUpdate()
    {
        // Block below for fetch data
        $member_id = filter_input(INPUT_GET, 'member_id');
        if (isset($member_id)) {
            $member = new Member();
            $member->setMemberId($member_id);
            $user = $this->memberDao->getMemberById($member);
        }

        // Change according to submit create button
        $submitted = filter_input(INPUT_POST, 'btnUpdate');
        if (isset($submitted)) {
            $member_username = filter_input(INPUT_POST, 'txtMemberUsername');
            $member_password = filter_input(INPUT_POST, 'txtMemberPassword');
            $member_email = filter_input(INPUT_POST, 'txtMemberEmail');
            $member_first_name = filter_input(INPUT_POST, 'txtMemberFirstName');
            $member_last_name = filter_input(INPUT_POST, 'txtMemberLastName');

            $updatedmember = new Member();
            $updatedmember->setMemberUsername($member_username);
            $updatedmember->setMemberPassword($member_password);
            $updatedmember->setMemberEmail($member_email);
            $updatedmember->setMemberNamaDepan($member_first_name);
            $updatedmember->setMemberNamaBelakang($member_last_name);

            if (fieldNotEmpty(array($member_username, $member_password, $member_email, $member_first_name, $member_last_name))) {
                $this->memberDao->updateMember($updatedmember);
                header("location:../../view/dashboard/index.php?dashboard=updateDeleteMember");
            } else
                $errMessage = 'Please check your input!';
        }

        if (isset($errMessage))
            echo '<div class="err-msg">' . $errMessage . '</div>';
        include_once '../../view/dashboard/form_update_member.php';
    }

    public function indexUpdateDelete()
    {
        $deleteCommand = filter_input(INPUT_GET, 'delcom');
        if (isset($deleteCommand) && $deleteCommand == 1) {
            $member_id = filter_input(INPUT_GET, 'member_id');
            $toBeDeletedMember = new User();
            $toBeDeletedMember->setUserId($member_id);
            $this->memberDao->deleteMember($toBeDeletedMember);
        }

        $members = $this->memberDao->getAllMember();
        include_once '../../view/dashboard/form_update_delete_member.php';
    }
}