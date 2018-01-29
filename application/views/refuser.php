
<?php include 'header.php' ?>
<div class="breadcrumb_content">
                    <div class="breadcrumb_text"><h3>Referral Users</h3>
                    </div>
                </div>
    <div class="right_col bg_fff" role="main">
    <div class="row top_tiles">
      <table id="example" class="display" cellspacing="0" width="100%">
      <?php
   if ($this->session->flashdata('message')) { ?>
   <div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?php  echo $this->session->flashdata('message'); ?>
</div>

<?php } ?>
<?php
if ($this->session->flashdata('error-message')) { ?>
<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?php  echo $this->session->flashdata('error-message'); ?>
</div>

<?php } ?> 
     <br>
        <thead>
            <tr>
                <th>s.no</th>
                <th>Name</th>
                <th>Emailid</th>
                <th>Users Status</th>
                <th>Date of join</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>s.no</th>
                <th>Name</th>
                <th>Emailid</th>
                <th>Users Status</th>
                <th>Date Of Join</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
           $j=0;
           foreach ($referalusers as $key => $value) {
            $id=$value->member_id;
            $fullname= $value->member_name;
            $email= $value->member_emailid;
            $doj= $value->created_on;
            $statuscheck= $value->member_status;
            if($statuscheck=="")
            {
                $status="0";
            }
            else
            {
                $status=$statuscheck;
            }
           if( $statuscheck==1)
             {


              $status='<span class="label label-success">Active</span>';

            }
            else
            {


              $status='<span class="label label-danger">Suspend</span>';

            }


            $k=$j+1;

            $j=$k;
            
            ?>
            <tr>
                <td><?php echo $j; ?></td>
                <td><?php echo $fullname; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $status; ?></td>
                <td><?php echo $doj; ?></td>
               
            </tr>
            <?php
            }
        ?>
        </tbody>
    </table>
      </div>
</div>
    
<?php include 'footer.php' ?>