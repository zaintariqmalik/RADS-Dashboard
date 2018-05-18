<?php
/**
 * Created by PhpStorm.
 * User: waqas
 * Date: 1/22/2018
 * Time: 2:55 PM
 */
class  DisplayData extends CI_Model{

    public function getData(){
        $this->load->database(true);

        // $this->db->select('email');
         //$this->db->from('user');

        $this->db->select('*');
        $this->db->from('user');
        $query =$this->db->get();

        $result1 =$query->result();
        return $result1;
         //die(print_r($result1));
    }

    /**
     * [getSurveyQuestions fetch all the Questions and Id from the database]
     * @return [array] [2-D array with question Text and ID]
     * @todo   [Hardcoded surveylistId = 102, should be generic for all surveys, linked with UI]
     */
    
    public function getSurveyQuestions()
    {
        $this->db->select('surveyquestionQuestion,surveyquestionId');
        $this->db->from('surveyquestion');
        $this->db->join('surveylist', 'surveyquestion.surveylistId = surveylist.surveylistId','left');
        $this->db->where('surveyquestion.surveylistId','103');

        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }
    

    /**
     * [getQuestionDetails: on selecting specific question from UI, 
     * will return the value of responses of that question]
     * @param  [int] $question_id [form UI (success.php) on selecting question Id is passed to this function]
     * @return [array]            [array of responses of all types choose one, multiselect or text]
     */
    public function getQuestionDetails($question_id){


        //$this->load->database(true);
        // $this->db->select('email');
        //$this->db->from('user');

        $where = "surveyquestionId ='$question_id' And surveylistId =103 ";
        $this->db->select('surveyanswerAnswer, count(surveyanswerAnswer) as total');
        $this->db->from('surveyanswer');
        //$this->db->where('surveyquestionId',$question_id);
        $this->db->where($where);
        $this->db->group_by('surveyanswerAnswer');
        $this->db->order_by('total','desc');
        $query =$this->db->get();

        $result =$query->result();
           // die(print_r($result));
      return $result;
    }

    /**
     * [getQuestionTitle: on selecting specific question from UI,
     * will return the Title of question of that question]
     * @param  [int] $question_id [form UI where all questions are present on selecting question Id is passed to this function]
     * @return [String]            [return text of specfic question]
     */
    public function getQuestionTitle($question_id){

        $this->db->select('surveyquestionQuestion');
        $this->db->from('surveyquestion');
        $this->db->where('surveyquestionId',$question_id);

        $query =$this->db->get();

        $result =$query->result();
       // die(print_r($result));
         return $result;
    }
}
?>