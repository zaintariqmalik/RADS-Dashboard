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
        $question_id = $this->input->get('var1');
        $this->load->model('DisplayData');
        $data["fetch_data"] = $this->DisplayData->getQuestionDetails($question_id);
        $this->load->view('survey', $data);
    }
}
?>