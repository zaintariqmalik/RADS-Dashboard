<?php
/**
* Filename: DashboardSummaryController.php
* Created By: Zeeshan
* Date: 09-17-2018
* Change history:
* ---
*/

class DatatableController extends CI_Controller{

    public function posts()
    {

            $columns = array( 
                                0 =>'id', 
                                1 =>'title',
                                2=> 'body',
                                3=> 'created_at',
                                4=> 'id',
                            );

            $limit = $this->input->post('length');
            $start = $this->input->post('start');
            $order = $columns[$this->input->post('order')[0]['column']];
            $dir = $this->input->post('order')[0]['dir'];
    
            $totalData = $this->Homemodel->allposts_count();
                
            $totalFiltered = $totalData; 
                
            if(empty($this->input->post('search')['value']))
            {            
                $posts = $this->Homemodel->allposts($limit,$start,$order,$dir);
            }
            else {
                $search = $this->input->post('search')['value']; 

                $posts =  $this->Homemodel->posts_search($limit,$start,$search,$order,$dir);

                $totalFiltered = $this->Homemodel->posts_search_count($search);
            }

            $data = array();
            if(!empty($posts))
            {
                foreach ($posts as $post)
                {

                    $nestedData['id'] = $post->id;
                    $nestedData['title'] = $post->title;
                    $nestedData['body'] = substr(strip_tags($post->body),0,50)."...";
                    $nestedData['created_at'] = date('j M Y h:i a',strtotime($post->created_at));
                    
                    $data[] = $nestedData;

                }
            }
            
            $json_data = array(
                        "draw"            => intval($this->input->post('draw')),  
                        "recordsTotal"    => intval($totalData),  
                        "recordsFiltered" => intval($totalFiltered), 
                        "data"            => $data   
                        );
                
            echo json_encode($json_data); 
    }
}