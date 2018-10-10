<?php
/**
 * Created by PhpStorm.
 * User: Waqas Ahmad
 * Date: 3/1/2018
 * Time: 11:54 AM
 */

class SearchController extends CI_Controller{
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
            $this->load->model('SearchModel');
            $data["fetch_data"] = $this->SearchModel->getWomenGeneralInfo();
            $this->load->view('SearchView',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } 
    public function notFollowedUp()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetch_data"] = $this->SearchModel->notYetFollowedUp();
            $this->load->view('notFollowedUpView',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } 
    public function notNewUsers()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetch_data"] = $this->SearchModel->notNewUsers();
            $this->load->view('notNewUsersView',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } 
    public function HH_jan_data()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetch_data"] = $this->SearchModel->jan_data();
            $this->load->view('SearchView',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } 
    public function HH_feb_data()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetch_data"] = $this->SearchModel->feb_data();
            $this->load->view('SearchView',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } 
    public function HH_mar_data()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetch_data"] = $this->SearchModel->mar_data();
            $this->load->view('SearchView',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } 
    public function HH_apr_data()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetch_data"] = $this->SearchModel->apr_data();
            $this->load->view('SearchView',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } 
    public function HH_may_data()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetch_data"] = $this->SearchModel->may_data();
            $this->load->view('SearchView',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } 
    public function HH_jun_data()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetch_data"] = $this->SearchModel->jun_data();
            $this->load->view('SearchView',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } 
    public function HH_jul_data()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetch_data"] = $this->SearchModel->jul_data();
            $this->load->view('SearchView',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    }
    public function HH_aug_data()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetch_data"] = $this->SearchModel->aug_data();
            $this->load->view('SearchView',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } /*
    public function HH_sept_data()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetch_data"] = $this->SearchModel->sept_data();
            $this->load->view('SearchView',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } */

    public function HH_followup(){
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["HH_followup"] = $this->SearchModel->HH_followup();
            $this->load->view('HH_followup',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    }
    public function searchLarcs(){
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["larcs"] = $this->SearchModel->searchLarcs();
            $this->load->view('searchLarcs',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    }
   
    public function communityMeetings()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetchCommunityMeeting"] = $this->SearchModel->getCommunityMeetings();
            $this->load->view('searchCommunityMeeting',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } 


    public function pwdHealthCamp()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetchPWDNewUsers"] = $this->SearchModel->getPWDNewUsersInfo();
            $this->load->view('searchPWDNewUser',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } 
    public function getNewUsers()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetchNewUsers"] = $this->SearchModel->getNewUsersInfo();
            $this->load->view('searchNewUser',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } 
    public function NU_q2()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetchNewUsers"] = $this->SearchModel->NU_q2();
            $this->load->view('searchNewUser',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } 
    public function NU_q3()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetchNewUsers"] = $this->SearchModel->NU_q3();
            $this->load->view('searchNewUser',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } 
    public function NU_q4()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["fetchNewUsers"] = $this->SearchModel->NU_q4();
            $this->load->view('searchNewUser',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    } 

    public function conversions(){
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('SearchModel');
            $data["conversions"] = $this->SearchModel->getConversions();
            $this->load->view('conversions',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    }

    public function getDetailsOfWomenBySNo($SNO)
    {
        if($this->session->userdata('User_Logged_In'))
        {
            if($SNO != null) {
                $this->load->model('SearchModel');
                $data["fetch_data"] = $this->SearchModel->getWomenSpecificInfo($SNO);
                $data["fetch_data1"] = $this->SearchModel->getWomenSpecificInfo_FollowUp($SNO);
                $this->load->view('ShowWomenHouseholdInfoView', $data);
               // $this->load->view('ShowWomenFollowupInfoView', $data);
            }
            else show_404();
        }
        else // Display login page session is not set
            $this->load->view('login');
    }
/*
    public function getDetailsOfWomenBySNo_FollowUp($SNO)
    {
        if($this->session->userdata('User_Logged_In'))
        {
            if($SNO != null) {
                $this->load->model('SearchModel');
                $data["fetch_data"] = $this->SearchModel->getWomenSpecificInfo_FollowUp($SNO);
                $this->load->view('ShowWomenFollowupInfoView', $data);
            }
            else show_404();
        }
        else // Display login page session is not set
            $this->load->view('login');
    }
    */
}
?>