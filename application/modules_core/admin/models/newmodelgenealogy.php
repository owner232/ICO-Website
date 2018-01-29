<?php

Class newmodelgenealogy extends CI_Model {

    

    function hierarchy()
    {
        $output='';
        $sess_id = $this->session->userdata('admin_id');


        
 
        $this->db->select('*');
        $this->db->from('membertable');
        $this->db->where('member_id',$sess_id);
        $this->db->where('user_type','1');
        $query = $this->db->get();
       //echo $this->db->last_query(); exit;
         $result = $query->result();


        $member_name=$result[0]->member_name;
        $member_emailid =$result[0]->member_emailid;
        $member_phoneno =$result[0]->member_phoneno;
        $reference_code =$result[0]->reference_code; 
        $member_id =$result[0]->member_id;  

         $this->db->select('*');
        $this->db->from('membertable');
        $this->db->where('sponsor_id',$reference_code);
        $query1 = $this->db->get();
        $result1 = $query1->result();
      
           $output.='  <ul> 
            <li> <a data-target="#myModal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="javascript:showuserip(
              '.$member_id.');">'.$member_name.' ( '.count($result1).' )
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
                $member_id1 =$result1[$i]->member_id;  



                
                $this->db->select('*');
                $this->db->from('membertable');
                $this->db->where('sponsor_id =',$refer_code);
                //$this->db->group_by('root_id');
                $query2 = $this->db->get();
                $result2 = $query2->result();


        


            $output.='<li data-jstree="{ "opened" : true }"><a data-target="#myModal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="javascript:showuserip('.$member_id.');">'.$member_name.'( '.count($result2).' )';

         



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
            
          $output.='<ul><li data-jstree="{ "opened" : true }">
                                '.$result[$i]->member_name.'( '.count($result1).' )';
  
           //echo $output;echo "<br>";
            $output.=$this->usergenealogy($sponsor_id,$user_refer_code);
            

                $output.='</li></ul>';              



            }
        }
        

         //echo $output;exit;

        return $output;

      }

}

?>

     