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
				<h4>Add Course Fee
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
                                    <input id="created_by" name="created_by"  value="<?php echo $email; ?>" type="hidden">
										<div class="form-group col-xs-6">
											<label for="catName">Course Name</label>
											<select class="form-control" id="college_course_id" name="college_course_id" required>
												<option>Select Course</option>
                                                 <?php 
                                                include("../../../../connection/dbconnect.php");
                                                $sql="SELECT college_course_id,college_course_name from suc_college_courses";
            									$result=$conn->query($sql);
                   								while($row=$result->fetch_assoc())
            						            {
            						                $college_course_id=$row["college_course_id"];
            						               $college_course_name=$row["college_course_name"];
            						             //  echo '<option  value="'.$id'">'.$lname.'</option>';
            						              echo ' <option  value="'.$college_course_id.'">'.$college_course_name.'</option> ';
            						            }
                                                 ?>								
											</select>
										</div>
                                        <div class="form-group col-xs-6">
											<label for="catName">Course Fee</label>
											<input type="text" placeholder="Course Name" class="form-control" name="cc_total_fee" id="cc_total_fee" value="" required />
										</div>
                                        
                                        <div class="form-group col-xs-6">
                                          <label for="catName">Fees Currency</label>
                                          <select class="form-control" id="cc_fee_currency" name="cc_fee_currency" required>
                                            <option>Select Currecy</option>
                                            <option value="INR">Indian Rupees (INR)</option>                                     
                                          </select>
                                        </div>
                                        
                                        <div class="form-group col-xs-6">
                                          <label for="catName">Fees Slab Amount</label>
                                          <input type="text" placeholder="Course Slab Amount" class="form-control" name="cc_fee_slab_amount" id="cc_fee_slab_amount" value="" required />
                                          <!-- <select class="form-control" id="cc_fee_slab_amount" name="cc_fee_slab_amount" required>
                                            <option>Select Slab Amount</option>
                                            <option>15000</option>
                                            <option>25000</option>
                                            <option>30000</option>                                     
                                          </select> -->
                                        </div>
                                        
                                        <div class="form-group col-xs-12">
											<label for="cat_Description">Fees Slab Description</label>
											<textarea class="form-control summernote" placeholder="Slab Description" id="cc_fee_slab_desc" name="cc_fee_slab_desc"></textarea>
										</div>
                                        
                    					 <div class="form-group col-xs-12"> 
											<label for="cat_Description">Fees Notes</label>
											<textarea class="form-control summernote" placeholder="Fees Notes" id="cc_fee_notes" name="cc_fee_notes"></textarea>
										</div>
                                        <div class="col-md-12 ">
                            
                                        <div class="col-md-4 inputGroupContainer">
                                          <label class="col-md-8 text-left">Status</label>
                                           <div class="col-md-2">
                                              <div class="input-group" style="margin-left: -120px;"><input checked data-toggle="toggle" data-onstyle="warning" id="cc_fee_status" name="cc_fee_status" type="checkbox" value="1"></div>
                                        </div>
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
            <div id ="success"style="display: none; height: 40px; margin-top:-40px; "><center><h4 align="center" style="bbackground: green; width: 100%;font-size: 20px; color: green;">--New RECORD INSERTED--</h4></center></div>
					</div>	
				</div>
			</section>
		</aside>

    
	</div>
  
	<!-- <div style="background: red ; height: 30px;"></div> -->

<script>
  $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat: 'yy/mm/dd'
    });
  } );
  </script>
  <script>
	//CKEDITOR.replace( 'cc_fee_slab_desc' );
    //CKEDITOR.replace( 'cc_fee_notes' );
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
        url:"../insert_Action.php?table_name=suc_college_course_fee_structure",
        method:"POST",
        data: $('#frmSubmi').serialize(),
        success:function(data)
        {
          //alert(data);
          if(data==1){
            $('#success').show();
            setTimeout("location.href = 'course-fee.php'",2000);
        }
        
        }
      });
      
      
    });
  });
</script>