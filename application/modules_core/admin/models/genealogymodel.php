<?php

Class genealogymodel extends CI_Model {

    

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
        $reference_code=$result[0]->reference_code;   

         $this->db->select('*');
        $this->db->from('membertable');
        $this->db->where('sponsor_id',$reference_code);
        $query1 = $this->db->get();
        $result1 = $query1->result();
        $output.=' 
            new primitives.orgdiagram.ItemConfig({
          id: '.$sess_id.',
          parent: null,
          title: "'.$member_name.'",
          image: "'.base_url().'assets/images/hierarchy.png",
          phone: "'.$member_phoneno.'",
          email: "'.$member_emailid.'",
          templateName: "contactTemplate",
          href: "'.base_url().'",
          itemTitleColor: primitives.common.Colors.Black}),
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

             $output.=' 
              new primitives.orgdiagram.ItemConfig({
              id: '.$member_id.',
              parent:'.$sess_id.',
              title: "'.$member_name1.'",
              image: "'.base_url().'assets/images/hierarchy.png",
              phone: "'.$member_phoneno1.'",
              email: "'.$member_emailid1.'",
              templateName: "contactTemplate",
              href: "'.base_url().'",
              itemTitleColor: primitives.common.Colors.Green
            }),
              ';

          $output.=$this->usergenealogy($member_id,$refer_code);
          
            }
        }
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
            $this->db->where('member_id =',$sponsor_id);
            $query1 = $this->db->get();
            $result1 = $query1->result();
            
            $output.=' 
                new primitives.orgdiagram.ItemConfig({
              id: '.$sponsor_id.',
              parent: '.$member_id.',
              title: "'.$result[$i]->member_name.'",
              image: "'.base_url().'assets/images/hierarchy.png",
              phone: "'.$result[$i]->member_phoneno.'",
              email: "'.$result[$i]->member_emailid.'",
              templateName: "contactTemplate",
              href: "'.base_url().'",
              itemTitleColor: primitives.common.Colors.Red
            }),
                  ';
           //echo $output;echo "<br>";
            $output.=$this->usergenealogy($sponsor_id,$user_refer_code);
            
            }
        }
        

         //echo $output;exit;

        return $output;

      }

}

?>

     