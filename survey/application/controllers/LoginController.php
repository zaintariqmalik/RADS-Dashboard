<?php

class LoginController extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
       // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        //$this->form_validation->set_rules('password', 'Password', 'required');

        if($this->session->userdata('User_Logged_In')) {
            $this->load->model('DisplayData');
            $data["fetch_data"] = $this->DisplayData->getData();
            $this->load->view('success', $data);
        }
        else // Display login page session is not set
            $this->load->view('login');

    }

    public function checkLogin(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('LoginModel');

        if($this->LoginModel->login($email,$password))
        {
            $this->load->model('DisplayData');
            $this->data['fetch_data'] = $this->DisplayData->getSurveyQuestions();


            $this->session->set_userdata('User_Logged_In', 'true');
            $this->load->view('success', $this->data);
        }
        else {
            $this->load->view('login');
        }
    }
}