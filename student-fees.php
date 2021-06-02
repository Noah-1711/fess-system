<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 

    <!-- Title Page-->
    <title>Student-fees</title>
<?php include('./include/meta.php') ?>

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
                              <h2>Students-Fees</h2>
                          </div>
                      </div>
                    <div class="row">
                        <div class="col-md-12">
                        
                        <div class="card mt-2">
                                    <div class="card-header">Fees</div>
                                    <div class="card-body">
                                       
                                      
                                     
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="enroll" class="control-label mb-1">Enrollment No:</label>
                                                        <input id="enroll" name="enroll" type="text" class="form-control">  
                                                        <span id="enrollError"></span>                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="studentname" class="control-label mb-1">Student Name:</label>
                                                        <select name="studentname" id="studentname" class='form-control studentname' >
                                                        <option value="1">select</option>
                                                        <option value="0">Not selected</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="caste" class="control-label mb-1">Caste</label>
                                                        <input id="caste" name="caste" type="text" class="form-control">  
                                                        <span id="casteError"></span>                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="branch" class="control-label mb-1">Branch</label>
                                                        <input id="branch" name="branch" type="text" class="form-control">  
                                                        <span id="branchError"></span>                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="fees" class="control-label mb-1">fees</label>
                                                        <input id="fees" name="fees" type="text" class="form-control">  
                                                        <span id="feesError"></span>                                                       
                                                    </div>
                                                </div>
                                               
                                               
                                              
                                            </div>
                                            <div class="row">
                                            <div class="col-12 col-md-6"> 
                                              <button id="payment-button" class="btn btn-lg btn-info btn-block submitBtn">
                                                  Submit
                                                </button>
                                            </div>

                                             
                                            </div>
                                  
                                    </div>
                                </div>
                            </div>
                    </div>
                      <div class="row">
                          <div class="col-md-12">
                          <div class="card mt-2">
                                    <div class="card-header">
                                        <strong class="card-title">Agents
                                           
                                        </strong>
                                    </div>
                                    <div class="card-body">
                                    <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr><th>#</th>
                                                <th>Name</th>
                                                <th>Mobile</th>                                       
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                         <tbody id='agents-table'>
                                               
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
<div class="modal fade" id="updateAgentModal" tabindex="-1" aria-labelledby="updateAgentModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Agent Info </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 
      <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="ufullname" class="control-label mb-1">Agent's Name:</label>
                <input id="ufullname" name="ufullname" type="text" class="form-control">                                                         
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="ucontact" class="control-label mb-1">Mobile No.:</label>
                <input id="ucontact" name="ucontact" type="text" class="form-control">                                                        
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

</body>
<?php include('./include/scripts.php') ?>

<script src="jsapi/add-agents.js"></script>
</html>
<!-- end document-->
