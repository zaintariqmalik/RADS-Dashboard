<?php
/**
 * Created by PhpStorm.
 * User: waqas
 * Date: 1/23/2018
 * Time: 11:55 AM
 */

class DisplayController extends CI_Controller{
    public function index(){


    }

    public  function getQuestionData(){
        $this->load->library('session');
        $sess = $this->session->userdata('User_Logged_In');
        if(!empty($sess)) {
                    $question_id = $this->input->get('var1');
                    $this->load->model('DisplayData');
                    $data["fetch_data"] = $this->DisplayData->getQuestionDetails($question_id);
                    $data["question_title"] = $this->DisplayData->getQuestionTitle($question_id);
                    $this->load->view('result_graph', $data);
    }
        else {
            $this->load->view('login');
        }
    }



    /*
     * This method will show index file and questions on the page
     * First checks if session have some value or not..
     * If user is logged in calls to DisplayData::getSurveyQuestions
     * else load login view.
     * @see DisplayData::getSurveyQuestions
     *
     *
    */
    public function showIndexFile(){
        $this->load->library('session');
        $sess = $this->session->userdata('User_Logged_In');
        if(!empty($sess)) {
                $this->load->model('DisplayData');
                $this->data['fetch_data'] = $this->DisplayData->getSurveyQuestions();
                $this->load->view('index', $this->data);
    }
    else {
        $this->load->view('login');
    }
    }



}
?>