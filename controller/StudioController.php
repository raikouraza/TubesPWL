<?php


class StudioController
{
    private $studioDao;

    public function __construct()
    {
        $this->studioDao = new StudioDao();
    }

    public function indexCreate()
    {
        // Change according to submit create button
        $submitted = filter_input(INPUT_POST, 'btnSubmit');
        if (isset($submitted)) {
            $studio_nama = filter_input(INPUT_POST, 'txtStudioNama');

            $studio = new Studio();
            $studio->setStudioNama($studio_nama);

            if (fieldNotEmpty(array($studio_nama))) {
                $this->studioDao->addStudio($studio);
            } else
                $errMessage = 'Please check your input!';
        }

        if (isset($errMessage))
            echo '<div class="err-msg">' . $errMessage . '</div>';
        $studios = $this->studioDao->getAllStudio();
        include_once '../../view/dashboard/form_create_studio.php';
    }

    public function indexUpdate()
    {
        // Block below for fetch data
        $studio_id = filter_input(INPUT_GET, 'studio_id');
        if (isset($studio_id)) {
            $studio = new Studio();
            $studio->setStudioId($studio_id);
            $studio = $this->studioDao->getStudioById($studio);
        }
        // Change according to submit create button
        $submitted = filter_input(INPUT_POST, 'btnUpdate');
        if (isset($submitted)) {
            $studio_nama = filter_input(INPUT_POST, 'txtStudioNama');

            $updatedStudio = new Studio();
            /* @var $studio Studio */
            $updatedStudio->setStudioId($studio->getStudioId());
            $updatedStudio->setStudioNama($studio_nama);

            if (fieldNotEmpty(array($studio_nama))) {
                $this->studioDao->updateStudio($updatedStudio);
                header("location:../../view/dashboard/index.php?dashboard=updateDeleteStudio");
            } else {
                $errMessage = 'Please check your input';
            }

            if (isset($errMessage)) {
                echo '<div class="err-msg">' . $errMessage . '</div>';
            }
        }
        include_once '../../view/dashboard/form_update_studio.php';
    }

    public function indexUpdateDelete()
    {
        $deleteCommand = filter_input(INPUT_GET, 'delcom');
        if (isset($deleteCommand) && $deleteCommand == 1) {
            $studio_id = filter_input(INPUT_GET, 'studio_id');
            $toBeDeletedStudio = new Studio();
            $toBeDeletedStudio->setStudioId($studio_id);
            $this->studioDao->deleteStudio($toBeDeletedStudio);
        }

        $studios = $this->studioDao->getAllStudio();
        include_once '../../view/dashboard/form_update_delete_studio.php';
    }
}