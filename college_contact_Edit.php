<?php 
//echo "hello";
include("../../../../connection/dbconnect.php");
$id=$_REQUEST['id'];
 $ssql="SELECT * from suc_college_contacts where college_Contact_id='$id'";
$rslt=$conn->query($ssql);
       
            while($rw=$rslt->fetch_assoc())
            {
              $c_id=$rw["college_id"];
                $c_address=$rw["college_address"];
                $c_website=$rw["college_website"];
               $c_phone_1=$rw["college_phone_1"];
               $c_phone_2=$rw["college_phone_2"];
               $c_phone_3=$rw["college_phone_3"];
               $c_email=$rw["college_email"];
                $c_contact_hours=$rw["college_contact_hours"];
                $c_contact_name=$rw["college_contact_name"];
                $c_contact_status=$rw["college_contact_status"];
                $c_contact_type=$rw["college_contact_type"];
                
            }
        $sql="SELECT college_id,college_name from suc_college where college_id=$c_id;";
      $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
            {
                $c_college_id=$row["college_id"];
                $c_college_name=$row["college_name"];
             //  echo '<option  value="'.$id'">'.$lname.'</option>';
              
        }
?>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
 <script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

 <!-- <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script> -->
 <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
<?php
 session_start ();
   $email=$_SESSION['ademail'];?>
<?php include_once '../../includes/header.php';?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. Contains the navbar and content of the page -->
    <?php include_once '../../includes/left_sidebar1.php';?>
    <!-- left column -->
    <aside class="right-side">  
      <section class="content-header">              
        <h4>Edit College Contact
          <span class="label label-danger" id="validateError"></span> 
          <a href="<?php echo BASE_URL;?>login/dashboard.php" class="btn btn-warning btn-sm pull-right"><i class="fa fa-reply"></i> Back</a>
        </h4>         
      </section>
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <form id="frmSubmi" class="well" aaction="https://www.searchurcollege.com/exam/admin/search/college/colAction.php" method="POST">
              <div class="box-body">
                <div class="row">
                  <div class="col-xs-12">
                  
                        
                                            <div class="form-group col-xs-4">
                          <label for="catName">College Name </label>
                          <select class="form-control" id="college_id" name="college_id" required>
                            <option>Select College</option>
                                                     <?php 
                                                    include("../../../../connection/dbconnect.php");
                                                    $sql="SELECT college_id,college_name from suc_college";
                                  $result=$conn->query($sql);
                                      while($row=$result->fetch_assoc())
                                        {
                                            $college_id=$row["college_id"];
                                           $college_name=$row["college_name"];
                                         //  echo '<option  value="'.$id'">'.$lname.'</option>';
                                          if($college_id==$c_college_id)
                                            echo ' <option selected value="'.$college_id.'">'.$college_name.'</option> ';
                                          else
                                            echo ' <option  value="'.$college_id.'">'.$college_name.'</option> ';
                                        }
                                                     ?>               
                          </select>
                        </div>
    
                        
                                          <div class="form-group col-xs-4">
                                <label for="catName">College Website</label>
                                <input type="text" placeholder="College Website" class="form-control" name="college_website" id="college_website" value="<?php echo $c_website; ?>" required />
                              </div>
                                        <div class="form-group col-xs-4">
                                <label for="catName">College Email</label>
                                <input type="text" placeholder="College Email" class="form-control" name="college_email" id="college_email" value="<?php echo $c_email; ?>" required />
                              </div>
                                        <div class="form-group col-xs-4">
                          <label for="catName">College Contact Type</label>
                          <select class="form-control" id="college_contact_type" name="college_contact_type" required>
                            <option>Select Contact Type</option>
                            <?php
                            if($c_contact_type=="Contact Type 1")
                            {
                              echo '<option selected value="Contact Type 1">Contact Type 1</option>
                                    <option value="Contact Type 2">Contact Type 2</option>';
                            }
                            else if($c_contact_type=="Contact Type 2")
                            {
                              echo '<option  value="Contact Type 1">Contact Type 1</option>
                                    <option selected value="Contact Type 2">Contact Type 2</option>';
                            }
                            else
                            {
                              echo '<option value="Contact Type 1">Contact Type 1</option>
                                    <option value="Contact Type 2">Contact Type 2</option>';
                            }

                             ?>
                                                </select>
                        </div>
                              <input type="hidden" name="created_dt" value="<?php echo  $date = date('Y-m-d H:i:s');  ?>">
                                        
                                        <div class="form-group col-xs-4">
                                <label for="catName">College Contact 1</label>
                                <input type="text" placeholder="College Contact 1" class="form-control" name="college_phone_1" id="college_phone_1" value="<?php echo $c_phone_1; ?>" required />
                              </div>
                                        <div class="form-group col-xs-4">
                                <label for="catName">College Contact 2</label>
                                <input type="text" placeholder="College Contact 2" class="form-control" name="college_phone_2" id="college_phone_2" value="<?php echo $c_phone_2; ?>"  />
                              </div>
                                        <div class="form-group col-xs-4">
                                <label for="catName">College Contact 3</label>
                                <input type="text" placeholder="College Contact 3" class="form-control" name="college_phone_3" id="college_phone_3" value="<?php echo $c_phone_3; ?>"  />
                              </div>
                                            
                                        
                                        <div class="form-group col-xs-12">
                      <label for="cat_Description">College Address</label>
                      <textarea class="form-control summernote" id="college_address" name="college_address"><?php echo $c_address; ?></textarea>
                    </div>
                                        <div class="form-group col-xs-4">
                                <label for="catName">Contact Person Name</label>
                                <input type="text" placeholder="College Contact 2" class="form-control" name="college_contact_name" id="college_contact_name" value="<?php echo $c_contact_name; ?>"  />
                              </div>
                                        <div class="form-group col-xs-4">
                                <label for="catName">Contact Hours</label>
                                <input type="text" placeholder="College Contact 3" class="form-control" name="college_contact_hours" id="college_contact_hours" value="<?php echo $c_contact_hours; ?>"  />
                              </div>  
                    <div class="col-md-4 inputGroupContainer">
                                            <label class="col-md-8 text-left">Status</label>
                                            <div class="col-md-2">
                                               <?php
                                                    if($c_contact_status==1)
                                                        echo '<div class="input-group" style="margin-left: -120px;"><input checked data-toggle="toggle" data-onstyle="warning" id="college_contact_status" name="college_contact_status" type="checkbox" value="1"></div>';
                                                    else
                                                        echo '<div class="input-group" style="margin-left: -120px;"><input  data-toggle="toggle" data-onstyle="warning" id="college_contact_status" name="college_contact_status" type="checkbox" value="1"></div>';
                                                ?>
                                          
                                        </div>
                                        </div>
                                     
                                      
                  </div>
                 </div>
              </div>
              <div class="box-footer clearfix"> 
                <div class="col-xs-12"> 
                  <div class="col-xs-12 pull-right">
                    <button type="submit" nname="btnCategory" iid="btnCategory" class="btn btn-primary  pull-right">Submit</button>
                  </div>
                </div>
              </div>
            </form>
            <div id ="success"style="display: none; height: 40px; margin-top:-40px; "><center><h4 align="center" style="bbackground: green; width: 30%; color: green;">Record Updated</h4></center></div>  
          </div>
          
        </div>
      </section>
    </aside>

    
  </div>
  
  <!-- <div style="background: red ; height: 30px;"></div> -->
<?php //include_once '../includes/footer.php';?>
<script>
  $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat: 'yy/mm/dd'
    });
  } );
  </script>
  <script>
  //CKEDITOR.replace( 'college_address' );
    
  </script>

<!--   <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script> -->
<script>
    $(document).ready(function(){
      $("#frmSubmi").submit(function(e){
       e.preventDefault();
      for (instance in CKEDITOR.instances)
      {
        CKEDITOR.instances[instance].updateElement();
      }
      $.ajax({
        url:"college_contact_Update.php?table_name=suc_college_contacts&Contact_id=<?php echo $id; ?>",
        method:"POST",
        data: $('#frmSubmi').serialize(),
        success:function(data)
        {
         // alert(data);
          if(data==1){
            $('#success').fadeIn().delay(1000).fadeOut();
            setTimeout("location.href = '../college-dashboard-view.php'",2000);

            
        }
        }
      });
      
      
    });
  });
</script>