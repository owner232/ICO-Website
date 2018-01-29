<?php
        /*echo "<pre>"; 
        print_r($userdetail); exit;*/

        $member_id = end($this->uri->segment_array()); 
        //$user_id = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('membertable');
        $this->db->where('referal_id',$member_id);
        $this->db->where('user_type','2');
        $query = $this->db->get();
        $result = $query->result();
        
        //print_r($result); exit;
        $directref = count($result); 
        $member_status = $userdetail[0]->member_status;

        $totaldepositamount = $this->paymentdetailsmodel->usertotaldeposits($member_id);
        if($member_status==1)
        {
            $Status = 'Active';
        }
        else
        {
            $Status = 'Inactive';
        }

        ?>
<div class="cnt">
        <p style="">User</p>
  <img src="https://bitconnect.co/assets/images/profile_pic1.png" class="user-avatar " style="max-width: 134px; border-radius: 100%; max-height: 134px; display: inline;">
        <p ></p>
      </div>
        <table class="table table-striped table-hover text-black">
                <tbody>
                <tr>
                <td> Total Direct Referral </td>
                 <td>( <i class="fa fa-user"></i><?php echo $directref; ?> )</td>
                </tr>
        <tr><td width="10%">Username : </td><td width="20%"><?php echo $userdetail[0]->member_name; ?></td></tr>

         <tr><td width="10%">Email : </td><td width="20%"><?php echo $userdetail[0]->member_emailid; ?></td></tr>

          <tr><td width="10%">Registration Date : </td><td width="20%"><?php echo $userdetail[0]->created_on; ?></td></tr>

           <tr><td width="10%">Member Status : </td><td width="20%"><?php echo $Status; ?></td></tr>

        <tr><td width="10%">Amount Deposited : </td><td width="20%"><?php echo $totaldepositamount; ?></td></tr>
        
                </tbody>
        </table>


