<?php
/**
 * Filename DisplayMapController
 * created By: waqas
 * Date: 1/24/2018
 * Time: 1:29 PM
 */
class DisplayMapController extends CI_Controller {

    /* This function to call a model and get latitude and longitude.....
     * @see DisplayMap:: getMapData()
     * passes data to view
    */
    public function index(){
        $this->load->model('DisplayMap');
        $data["fetch_data"] = $this->DisplayMap->getMapData();
        $this->load->view('Map', $data);
    }
}

?>