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