<?php
/**
* Filename: SocialMobilizerController.php
* Created By: Zain Tariq
* Date: 12-04-2018
* Change history:
* ---
*/


class SocialMobilizerController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * [index call by default and load view "SearchView.php"]
     * @see SearchModel::getWomenGeneralInfo()
     */ 
    public function index()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SocialMobilizerModel');
            $data["fetch_data"] = $this->SocialMobilizerModel->getSMGeneralInfo();

            $this->load->view('SocialMobilizerView',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    }

    public function getDetailsOfSMBySNo($SNO)
    {
        if($this->session->userdata('User_Logged_In'))
        {
            if($SNO != null) {
                $this->load->model('SocialMobilizerModel');
                $data["fetch_data"] = $this->SocialMobilizerModel->getSMSpecificInfo($SNO);

                $this->load->view('ShowWomenSMInfoView', $data);
            }
            else show_404();
        }
        else // Display login page session is not set
            $this->load->view('login');
    }
}
?>