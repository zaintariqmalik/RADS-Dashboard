<?php
/**
 * Created by PhpStorm.
 * User: waqas
 * Date: 1/22/2018
 * Time: 2:55 PM
 */
class  DisplayData extends CI_Model{

    public  function getData(){
        $this->load->database(true);

        // $this->db->select('email');
         //$this->db->from('user');

       $this->db->select('*');
        $this->db->from('questions');
        $query =$this->db->get();

         $result1 =$query->result();
        return $result1;
         //die(print_r($result1));
    }

    // when clicked on a an question
    public function getQuestionDetails($question_id){


        $this->load->database(true);
        // $this->db->select('email');
        //$this->db->from('user');

        $this->db->select('*');
        $this->db->from('survey');
        $this->db->join('user','user.id = survey.user_id','inner');
        $this->db->where('question_id',$question_id);
        $query =$this->db->get();

        $result1 =$query->result();
        //die(print_r($result1));
        return $result1;
    }
}
?>