<?php
/**
 * Created by PhpStorm.
 * User: waqas
 * Date: 1/22/2018
 * Time: 12:22 AM
 */

class  LoginModel extends CI_Model{

    /**
     * [login function match the credentails with the database if exist return true]
     * @param  [string] $email    
     * @param  [string] $password 
     * @return [boolean]           [return true if data found]
     * @todo   [encryption with the password]
     */
    public function login($email,$password){

        //$this->load->database(true);
        //$this->load->library('session');
        
        /* old code - data fetching from resdev db 

        $this->db->select('userUsername','userPassword');
        $this->db->from('user');
        $this->db->where('userUsername',$email);
        $this->db->where('userPassword',$password);
        //$query = $this->db->get();
        */
       
        // seperate user table
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query("select userUsername, userPassword from user 
                                    where userUsername = '$email' and userPassword = '$password'");

        if($query->num_rows()>0){
            return true;
        }
        else {
            return false;
        }
    }

    public function login_details($email,$password){

        $this->load->helper('date');
        
        // set default timezone
        date_default_timezone_set('Asia/Karachi');
        
        $date = new DateTime("now");
 
        $curr_date = $date->format('Y-m-d ');
        $curr_time = $date->format('H:i:s ');

        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query("select userId from user 
                                    where userUsername = '$email'");

       /* $this->db->select('userId');
        $this->db->from('logindetails');
        $this->db->where('userUsername',$email);
        $this->db->where('userPassword',$password);

        $query = $this->db->get();*/

        $data = array(
            'userId'=> $query->row()->userId,
            'userUsername' => $email,
            'loginDate' => $curr_date,
            'loginTime' => $curr_time
    );
    
    $otherdb->insert('logindetails',$data);

    }
}
?>