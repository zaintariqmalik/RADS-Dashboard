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

        $this->db->select('userUsername','userPassword');
        $this->db->from('user');
        $this->db->where('userUsername',$email);
        $this->db->where('userPassword',$password);

        $query = $this->db->get();

        if($query->num_rows()>0){
            return true;
        }
        else {
            return false;
        }
    }
}
?>