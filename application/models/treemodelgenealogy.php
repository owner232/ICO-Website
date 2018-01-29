<?php

Class treemodelgenealogy extends CI_Model {

    

    function hierarchy()
    {
        $output='';
        $user_id = $this->session->userdata('user_id');


        
 
        $this->db->select('*');
        $this->db->from('membertable');
        $this->db->where('member_id',$user_id);
        $this->db->where('user_type','2');
        $query = $this->db->get();
       //echo $this->db->last_query(); exit;
         $result = $query->result();


        $member_name=$result[0]->member_name;
        $member_emailid =$result[0]->member_emailid;
        $member_phoneno =$result[0]->member_phoneno;
        $reference_code =$result[0]->reference_code;   

         $this->db->select('*');
        $this->db->from('membertable');
        $this->db->where('sponsor_id',$reference_code);
        $query1 = $this->db->get();
        $result1 = $query1->result();
       //echo "<pre>";print_r($output);exit;
               $output.='  <ul><a class="yellow_font" data-toggle="modal" onclick="showuserip('.$user_id.');">
           <li data-jstree="{ "opened" : true }">'.$member_name.' ( '.count($result1).' ) </a>
            <ul>
            ';
           

        if(count($result1) > 0)
        {

            for($i=0; $i<count($result1); $i++)
            {
                $member_id=$result1[$i]->member_id;

                $member_name1=$result1[$i]->member_name;
                $member_emailid1 =$result1[$i]->member_emailid;
                $member_phoneno1 =$result1[$i]->member_phoneno;
                $refer_code=$result1[$i]->reference_code;




                $this->db->select('*');
                $this->db->from('membertable');
                $this->db->where('sponsor_id =',$refer_code);
                //$this->db->group_by('root_id');
                $query2 = $this->db->get();
                $result2 = $query2->result();




          
          $output.='<a class="yellow_font" data-toggle="modal" onclick="showuserip('.$member_id.');">
          <li data-jstree="{ "opened" : true }">'.$member_name1.'( '.count($result2).' )
          </a>';



          $output.=$this->usergenealogy($member_id,$refer_code);
          


     $output.='</li>';

            }
        }



                          $output.='</li>                      
                            
                        </ul>
                    </li>
                   
                </ul>';


        //echo "<pre>";print_r($output);exit;
        return $output;

    }
    function usergenealogy($member_id,$refer_code)
      {
        //echo $member_id;echo "<br>";
       //echo "dhh";echo "<br>";
        
        $this->db->select('*');
        $this->db->from('membertable');
        $this->db->where('sponsor_id =',$refer_code);
        //$this->db->group_by('root_id');
        $query = $this->db->get();
        $result = $query->result();
        //echo "<pre>";print_r($result); exit;
        //echo "<br>";


        if(count($result)>0)
        {
            for($i=0;$i<count($result);$i++)
            {

            //$spillover_id=$result[$i]->spillover_id;
            $sponsor_id=$result[$i]->member_id;
            $user_refer_code=$result[$i]->reference_code;

            
            $this->db->select('*');
            $this->db->from('membertable');
            $this->db->where('sponsor_id =',$user_refer_code);
            $query1 = $this->db->get();
            $result1 = $query1->result();
            
          $output.='<ul>
          <a class="yellow_font" data-toggle="modal" onclick="showuserip('.$sponsor_id.');">
          <li data-jstree="{ "opened" : true }">
                                '.$result[$i]->member_name.'( '.count($result1).' )
                                </a>';

            //echo $output;echo "<br>";
            $output.=$this->usergenealogy($sponsor_id,$user_refer_code);
            

              $output.='</li></ul>';              



            }
        }
        



        return $output;

      }

}

?>

      