<?php
/*
*file name: LoginController.php
 * created by : waqas ahmad
 * change history: 26/01/2018 /update routing/ waqas ahmad
*/
class LoginController extends CI_Controller {

    /*
     * The function will executed by default
     * @see load helper
     * @see load library('session')
     * @see  check if session(User_logged_in) is created ..
     * @see model DisplayDate:: getSurveyQuestions()
     */

    public function index()
    {
        // Load helper  & libraries
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');

       // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        //$this->form_validation->set_rules('password', 'Password', 'required');

        // IF session is set then call the model::getSurveyQuestions() to get data and pass to success
        if($this->session->userdata('User_Logged_In')) {
            $this->load->model('DashboardSummaryModel');
            $this->data["fetchHousehold"] = $this->DashboardSummaryModel->getHouseholdCount();
            $this->data["fetchFollowUp"] = $this->DashboardSummaryModel->getFollowUpCount();
            $this->data["fetchMonitoring"] = $this->DashboardSummaryModel->getMonitoringVisitsCount();
            $this->data["fetchSM"] = $this->DashboardSummaryModel->getSMVisitsCount();
            $this->data["fetchNewUser"] = $this->DashboardSummaryModel->getNewUserCount();
            $this->load->view('DashboardSummary', $this->data);
        }
        else // Display login page session is not set
            $this->load->view('Login');

    }

    /* This will be executed when user will enter data in form or press the back button
     * @see model DisplayData:: getSurveyQuestions
     * @see model LoginModel:: login($email,$password)
     *  @see session::set_userdata // set session that user is logged in...
     *
    */

    public function checkLogin()
    {
        // Load session
        // IF session is set then call the model::getSurveyQuestions() to get data and pass to success
        $this->load->library('session');
        $sess = $this->session->userdata('User_Logged_In');

        if(!empty($sess)) {
            $this->load->model('DashboardSummaryModel');
            $this->data["fetchHousehold"] = $this->DashboardSummaryModel->getHouseholdCount();
            $this->data["fetchFollowUp"] = $this->DashboardSummaryModel->getFollowUpCount();
            $this->data["fetchMonitoring"] = $this->DashboardSummaryModel->getMonitoringVisitsCount();
            $this->data["fetchSM"] = $this->DashboardSummaryModel->getSMVisitsCount();
            $this->data["fetchNewUser"] = $this->DashboardSummaryModel->getNewUserCount();
            $this->load->view('DashboardSummary', $this->data);
        }
        else
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('LoginModel');

            // calling LoginModel::login($email,$password)
            if ($this->LoginModel->login($email, $password)) {
                    //calling LoginModel::loginDetails(email,password);
                    $this->session->set_userdata('User_Logged_In', 'true');
                    $this->LoginModel->login_details($email, $password);
                    $this->load->model('DashboardSummaryModel');
                    $this->data["fetchHousehold"] = $this->DashboardSummaryModel->getHouseholdCount();
                    $this->data["fetchFollowUp"] = $this->DashboardSummaryModel->getFollowUpCount();
                    $this->data["fetchMonitoring"] = $this->DashboardSummaryModel->getMonitoringVisitsCount();
                    $this->data["fetchSM"] = $this->DashboardSummaryModel->getSMVisitsCount();
                    $this->data["fetchNewUser"] = $this->DashboardSummaryModel->getNewUserCount();
                    $this->load->view('DashboardSummary', $this->data);
            }
            else 
            {
                $this->load->view('Login');
            }
        }
    }
}