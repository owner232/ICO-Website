<?php

class barmodel extends CI_Model
{
 function __construct()
 {
  parent::__construct();    
}

function viewbar(){
   //echo $password=$this->uri->segment(2);exit;

    $this->db->select('site_settingsvalue');
    $this->db->from('site_settings');
    $this->db->where('site_settingskey','shortcode_pwd');
     $query = $this->db->get();
     $result = $query->result();
     $pwd=$result[0]->site_settingsvalue;
     $this->db->select('site_settingsvalue');
     $this->db->from('site_settings');
     $this->db->where('site_settingskey','shortcode_status');
     $query2 = $this->db->get();
     $resultt = $query2->result();
     $sta=$resultt[0]->site_settingsvalue;

 //if(($password==$pwd)&&($sta==1))
//{    

 $output='';
 $this->db->select('*');
 $this->db->from('bonus_settings');
 $this->db->where('bonus_id ','1' );
 $query = $this->db->get();
 $result1 = $query->result();
 //echo $this->db->last_query();
if(count($result1)>0)
{
   $soldbar1=$result1[0]->soldtoken;
  $currency_value1=$result1[0]->bonus_points;
  $limit1=$result1[0]->tokenlimit;
  $sdate1=$result1[0]->starting_date;
}
$this->db->select('*');
 $this->db->from('bonus_settings');
 $this->db->where('bonus_id ','2' );
 $query = $this->db->get();
 $result2 = $query->result();
 //echo $this->db->last_query();
if(count($result1)>0)
{
  $soldbar2=$result2[0]->soldtoken;
  $currency_value2=$result2[0]->bonus_points;
  $limit2=$result2[0]->tokenlimit;
  $sdate2=$result2[0]->starting_date;
}
$this->db->select('*');
 $this->db->from('bonus_settings');
 $this->db->where('bonus_id ','3' );
 $query = $this->db->get();
 $result3 = $query->result();
 //echo $this->db->last_query();
if(count($result3)>0)
{
  $soldbar3=$result3[0]->soldtoken;
  $currency_value3=$result3[0]->bonus_points;
  $limit3=$result3[0]->tokenlimit;
  $sdate3=$result3[0]->starting_date;
}
$this->db->select('*');
 $this->db->from('bonus_settings');
 $this->db->where('bonus_id ','4' );
 $query = $this->db->get();
 $result4 = $query->result();
 //echo $this->db->last_query();
if(count($result4)>0)
{
  $soldbar4=$result4[0]->soldtoken;
  $currency_value4=$result4[0]->bonus_points;
  $limit4=$result4[0]->tokenlimit;
  $sdate4=$result4[0]->starting_date;
}

 $output.="<style>
.progress-bar-success{
display: inline-table;
}

.progress-bar1{
display: inline-table;
}
.progress-bar-info{
display: inline-table;
}
.progress-bar-danger{
display: inline-table;
}


 </style>
 <div class='container'>
  <div class='row'>
       <p>Presale Has Started ".$sdate1." (".$limit1." @ ".$currency_value1.")</p>
      <div class='progress'>
         
            <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=".$soldbar1." aria-valuemin='0' aria-valuemax=".$limit1." style='width: ".$soldbar1.";'>
                <span class='sr-only'>".$soldbar1."</span>
            </div>
            
            <span class='progress-completed'></span>
        </div>
        <p>First Release Starts ".$sdate2." (".$limit2." @ ".$currency_value2.")</p>
        <div class='progress'>
            <div class='progress-bar progress-bar1' role='progressbar' aria-valuenow='90' aria-valuemin='0' aria-valuemax=".$limit2." style='width: ".$soldbar2.";'>
                <span class='sr-only'>".$soldbar2."</span>
            </div>
            
            <span class='progress-completed'></span>
        </div>
        <p>Second Release Starts ".$sdate3." (".$limit3." @ ".$currency_value3.")</p>
        <div class='progress'>
            <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow='20' aria-valuemin='0' aria-valuemax=".$limit3." style='width: ".$soldbar3.";'>
                <span class='sr-only'>".$soldbar3."</span>
            </div>
            
            <span class='progress-completed'></span>
        </div>
        <p>Final Release Starts ".$sdate4." (".$limit4." @ ".$currency_value4.")</p>
        <div class='progress'>
            <div class='progress-bar progress-bar-danger' role='progressbar' aria-valuenow='80' aria-valuemin='0' aria-valuemax=".$limit4." style='width: ".$soldbar4.";'>
                <span class='sr-only'>".$soldbar4."</span>
            </div>
            
            <span class='progress-completed'></span>
        </div>
  </div>
</div>";

echo $output;
}
//}
}
?>