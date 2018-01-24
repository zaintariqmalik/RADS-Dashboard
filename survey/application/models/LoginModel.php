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

        $this->db->select('userUsername','userPassword');
        $this->db->from('user');
        $this->db->where('userUsername',$email);
        $this->db->where('userPassword',$password);

        $query = $this->db->get();
        echo $query->num_rows();
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