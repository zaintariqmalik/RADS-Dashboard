<?php
/**
 * Filename DisplayMapController
 * created By: waqas
 * Date: 1/24/2018
 * Time: 1:29 PM
 */
class DisplayMapDivisionController extends CI_Controller {

    /* This function to call a model and get latitude and longitude.....
     * @see DisplayMap:: getMapData()
     * passes data to view
    */
    public function index(){
        // IF session is set then the system will load map.
        if($this->session->userdata('User_Logged_In')) {
            $this->load->model('DisplayMap');
            $data["fetch_data"] = $this->DisplayMap->getMapData();
            $this->load->view('DivisionMap', $data);
        }
        else // Display login page session is not set
            $this->load->view('Login');


    }
}

?>