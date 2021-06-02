<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 

    <!-- Title Page-->
    <title>Manage Students </title>
<link href='./css/bootstrap-datepicker.standalone.min.css' rel='stylesheet'/>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<?php include('./include/meta.php') ?>
<style>
    .completed-row td
    {
        background-color: #2ecc71 !important; 
        color: #fff !important;
    }
    .pending-row td
    {
        background-color: #e67e22 !important; 
        color: #fff !important;
    }
    .rejected-row td
    {
        background-color: #e74c3c !important; 
        color: #fff !important;
    }
   
@-webkit-keyframes blinker {
  from {background-color: transparent }
  to {background-color:#EA2027; color:#fff}
}
.blink td{
    background-color:grey !important;
    color:#fff !important;
	/* text-decoration: blink;
	-webkit-animation-name: blinker;
	-webkit-animation-duration: 1s;
	-webkit-animation-iteration-count:infinite;
	-webkit-animation-timing-function:ease-in-out;
	-webkit-animation-direction: alternate; */
}
</style>
</head>

<body class="animsition">
    <div class="page-wrapper">
     <?php include('./include/menu.php') ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
           <?php include('./include/header.php') ?>

            <!-- MAIN CONTENT--> 
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row">
                          <div class="col-md-12">
                              <h2>Manage Students</h2>
                          </div>
                      </div>
                    <div class="row">
                        <div class="col-md-12">
                    
                            <div class="card mt-2">
                                    <div class="card-header">Add Student</div>
                                    <div class="card-body">
                                       
                                      
                                     
                                            <div class="row">
                                           
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="enroll" class="control-label mb-1">Enrollment no:</label>
                                                        <input id="enroll" name="enroll" type="text" class="form-control">  
                                                        <span id="enrollError"></span>                                                         
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="fullname" class="control-label mb-1">Full Name:</label>
                                                        <input id="fullname" name="fullname" type="text" class="form-control">  
                                                        <span id="fullnameError"></span>                                                         
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="contact" class="control-label mb-1">Mobile No.:</label>
                                                        <input id="contact" name="contact" type="text" class="form-control">
                                                        <span id="contactError"></span>                                                          
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email" class="control-label mb-1">Email ID:</label>
                                                        <input id="email" name="email" type="text" class="form-control">   
                                                        <span id="emailError"></span>                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="address" class="control-label mb-1">Address:</label>
                                                        <textarea id="address" name="address" class="form-control"></textarea>  
                                                        <span id="addressError"></span>                                                     
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="print_taken" class="control-label mb-1">Branch:</label>
                                                        <select name="print_taken" id="print_taken" class='form-control print_taken' >
                                                        <option value="1">select</option>
                                                        <option value="0">Not selected</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="caste" class="control-label mb-1">Caste:</label>
                                                        <input id="caste" name="caste" type="text" class="form-control">
                                                        <span id="casteerror"></span>                                                      
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="remamount" class="control-label mb-1">Remaining Amount:</label>
                                                        <input id="remamount" name="remamount" type="text" class="form-control" readonly>
                                                        <span id="remainingError"></span>                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="paymentmode" class="control-label mb-1">Payment Mode:</label>
                                                        <input id="paymentmode" name="paymentmode" type="text" class="form-control">                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="subdate" class="control-label mb-1">Last date to submit :</label>
                                                        <input id="subdate" name="subdate" type="text" class="form-control datepicker">
                                                        <span id="lastdateError"></span>                                                        
                                                    </div>
                                                </div>  -->
                                              
                                            </div>
                                           
                                            <div class="row">
                                            <div class="col-md-4"> 
                                              <button class="btn btn-lg btn-info btn-block submitBtn">
                                                  Add Student
                                                </button>
                                            </div>

                                             
                                            </div>


                                             
                                            
                                  
                                    </div>
                                </div>
                          </div>
                      </div>
                    </div>
                      <div class="row">
                          <div class="col-md-12">
                          <div style="height:50px; width:50px" class='blink'>
                        </div>
                          <div class="card mt-2">
                                    <div class="card-header">
                                        <strong class="card-title">Students
                                           
                                        </strong>
                                    </div>
                                    <div class="card-body">
                                    <!-- <input type="text" placeholder="Search in table..." id="searchField"> -->
                                    <div class="table-responsive m-b-40 table-sortable" id="table-sortable">

                                    <table class="table table-borderless table-data3" id="tblstudent">
                                        <thead>
                                            <tr><th>#</th>
                                            <th>Enrollment No </th>
                                              <th>Student Name</th>
                                                <th>Contact</th>
                                                <th>Email</th>  
                                                <th>Address</th>                                            
                                                <th>Branch</th>
                                                <th>Caste</th>
                                                <th>Action</th>



                                            </tr>
                                        </thead>
                                         <tbody id='students-table'>
                                               
                                         </tbody>
                                    </table>
                                </div>
                          </div>
                                    </div>
                                </div>
                        
                      </div>
                      
                      <!-- Footer starts -->
                      <?php include('./include/footer.php') ?>
                        <!-- Footer Ends --> 
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

<!-- Modal -->
<div class="modal fade" id="updateClientModal" tabindex="-1" aria-labelledby="updateClientModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Client Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
      <div class="row">
      <div class="col-md-6">
                                                <div class="form-group">
                                                            <label for="agentname" class="control-label mb-1">Select Agent:</label>
                                                        <select id="uagentname" name="agentname" class="form-control agentname">
                                                            
                                                        </select>                                                          
                                                            <span id="agentnameError"></span>                                                         
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                            <label for="servicename" class="control-label mb-1">Select Service:</label>
                                                        <select id="uservicename" name="uservicename[]" multiple="multiple" class="form-control servicename">
                                                            
                                                        </select>                                                          
                                                            <span id="agentnameError"></span>                                                         
                                                </div>
                                            </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="ufullname" class="control-label mb-1">Full Name:</label>
                                                        <input id="ufullname" name="ufullname" type="text" class="form-control">                                                         
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="ufirmname" class="control-label mb-1">Firm Name:</label>
                                                        <input id="ufirmname" name="ufirmname" type="text" class="form-control">                                                         
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="ucontact" class="control-label mb-1">Mobile No.:</label>
                                                        <input id="ucontact" name="ucontact" type="text" class="form-control">                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="uemail" class="control-label mb-1">Email ID:</label>
                                                        <input id="uemail" name="uemail" type="text" class="form-control">                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="uaddress" class="control-label mb-1">Address:</label>
                                                        <textarea id="uaddress" name="uaddress" class="form-control"></textarea>                                                     
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="utaskdesc" class="control-label mb-1">Task Description / Remarks:</label>
                                                        <textarea id="utaskdesc" name="utaskdesc"  class="form-control"></textarea>  
                                                        <!-- <input type="checkbox" name="uisWhatsapp" id="uisWhatsapp"> Sent by whatsapp &nbsp; <input type="checkbox" name="uisPrint" id="uisPrint"> Print taken                                                     -->
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="sent_by_whatsapp" class="control-label mb-1">Sent by whatsapp</label>
                                                        <select name="sent_by_whatsapp" id="sent_by_whatsapp" class='form-control sent_by_whatsapp' >
                                                                            <option value="1">Sent</option>
                                                                            <option value="0">Not Sent</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="print_taken" class="control-label mb-1">Print:</label>
                                                        <select name="print_taken" id="print_taken" class='form-control print_taken' >
                                                        <option value="1">Taken</option>
                                                        <option value="0">Not Taken</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="upaymentmode" class="control-label mb-1">Payment Mode:</label>
                                                        <input id="upaymentmode" name="upaymentmode" type="text" class="form-control">                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="uassigned_user" class="control-label mb-1">Assign User:</label>
                                                        <select name="uassigned_user" id="uassigned_user" class='form-control assigned_user' >

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="current_status" class="control-label mb-1">Status:</label>
                                                        <select name="current_status" id="current_status" class='form-control' >
                                                                <option value="0"> Select Status </option>
                                                                <option value="pending">Pending</option>
                                                                <option value="completed">Completed</option>
                                                                <option value="Rejected">Rejected</option>
                                                        </select>
                                                </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="utotamount" class="control-label mb-1">Total Amount:</label>
                                                        <input id="utotamount" name="utotamount" type="text" class="form-control">                                                   
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="udepamount" class="control-label mb-1">Total Deposited Amount: </label>
                                                        <input id="udepamount" name="udepamount" type="text" class="form-control">                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="uremamount" class="control-label mb-1">Remaining Amount:</label>
                                                        <input id="uremamount" name="remamount" type="text" class="form-control" readonly>                                                      
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="usubdate" class="control-label mb-1">Last date to submit :</label>
                                                        <input id="usubdate" name="usubdate" type="text" class="form-control datepicker">   
                                                        <input id="hiddenip" name="hiddenip" type="hidden" class="form-control datepicker">                                                      

                                                </div>
                                                </div>
                                              
                                            </div>
                                          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary updateBtn">Update</button>
  
      </div>
    </div>
  </div>
</div>
<!-- / update modal end-->

<!-- Sms Confirm Msg -->
<div class="modal fade" id="smsconf" tabindex="-1" role="dialog" aria-labelledby="smsconf" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="smsconfLabel">Confirm Action</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
         <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Document Notification</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Payment Notification</a>
  </li>
   
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
   <div class="row mt-4">
        <div class="col-md-12">
        <p> Send document notification to <span id='receivers_name'></span> </p>
    <hr>
        <div class="card">
        <div class="card-body">
            <p>
                <span class="text-info">Message Preview :</br> </span> Dear Client, Your Document submission is due on <span class="font-weight-bold" id='doi'></span>. Please Submit your <input type="text" class="form-control" id='docs'> <input type="hidden" id="recno"> immediately before the due date. Ignore if already submitted. -J.B Associates.
            </p>
        </div>
        </div>
        <button type="button" class="btn btn-primary float-right" id='sendsms' >Send</button>
        </div>
      </div>
      </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    
    <div class="row mt-4">
        <div class="col-md-12">
            <p class=""> Send payment notification to <span id='receivers_name_payment'></span> </p>
            <hr>
            <div class="card">
            <div class="card-body">
            <p> <strong> Services: </strong><span id='servdetails'> </span></p>
            <p> <strong>Total:</strong> <span id='total_amount_notify'></span>. <br> <strong> Deposited:</strong> <span id='total_deposited_amount_prev'></span> <br>
            <strong> Remaining:</strong> <span id='remaining_prev'></span> &nbsp;
            </p>
            <div class="row">
                <div class="col-md-6">   <div class="form-group">
                Enter Amount:
                <input type="number" class='form-control' id="depositing_now">
                <span class='amount-error text-danger'></span>

            </div></div>
                <div class="col-md-6">  
                 <div class="form-group">
                Payment Mode:
                <input type="text" class='form-control' id="paymentmodeamt" value='NA'>
                <span class='pm-error text-danger'></span>

            </div></div>
            </div>
         
            </div>
           
            </div>
            <button type="button" class="btn btn-primary float-right" id='sendsmsamt' >Send</button>
           
        </div>
    </div>

  
  </div>
        </div>
      </div>
     
   
</div>
     

      </div>
      
    </div>
  </div>
</div>
<!-- / Sms confirm msg -->
</body>
<?php include('./include/scripts.php') ?>
<script src='./js/bootstrap-datepicker.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</html>
<!-- end document-->
<!-- http://219.90.67.240/vendorsms/pushsms.aspx?user=Aditya%20Bhalerao&password=aditya1646&msisdn=9422461646&sid=ABCXYZ&msg=Hello&fl=0&gwid=2 -->