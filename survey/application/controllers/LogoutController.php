<?php
/**
 * Created by PhpStorm.
 * User: Waqas Ahmad
 * Date: 1/30/2018
 * Time: 12:29 PM
 */
 class LogoutController extends CI_Controller{

     /*
      * when pressed logout the method will unset session and  will display login form..
      * */
     public function index(){
         $this->load->library('session');
         unset($_SESSION['User_Logged_In']);
         $this->load->view("Login");
     }
 }
?>