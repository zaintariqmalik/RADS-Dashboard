<?php
/**
 * Created by PhpStorm.
 * User: waqas
 * Date: 1/22/2018
 * Time: 12:22 AM
 */
class  LoginModel extends CI_Model{
    public function login($email,$password){

        $this->load->database(true);
        $this->load->library('session');

        $this->db->select('email','password');
        $this->db->from('admin');
        $this->db->where('email',$email);
        $this->db->where('password',$password);

        $query = $this->db->get();

       // $query = $this->db->query("SELECT id FROM user WHERE email LIKE '$email' and password LIKE '$password';");
        if($query->num_rows()>0){
            return true;
        }
        else {
            return false;
        }
    }
}
?>