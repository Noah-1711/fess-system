<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 

    <!-- Title Page-->
    <title>Payment</title>
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
                              <h2>Payment</h2>
                          </div>
                      </div>
                       <div class="row">
                          <div class="col-md-12">
                        
                             <div class="card mt-2">
                                      <div class="card-header">Payment</div>
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
                                                        <label for="totfees" class="control-label mb-1">Total Fees:</label>
                                                        <input id="totfees" name="totfees" type="text" class="form-control">  
                                                        <span id="totfeesError"></span>                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="paidfees" class="control-label mb-1">Paid Fees:</label>
                                                        <input id="paidfees" name="paidfees" type="text" class="form-control">  
                                                        <span id="paidfeesError"></span>                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="remarks" class="control-label mb-1">Remarks</label>
                                                        <textarea id="remarks" name="remarks" type="text" class="form-control"></textarea>
                                                        <span id="remarksError"></span>                                                       
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
                                        <strong class="card-title">Payment
                                        </strong>
                                    </div>
                                       <div class="card-body">
                                          <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3" id="tblservice">
                                              <thead>
                                                 <tr><th>#</th>
                                                   <th>Date</th>
                                                    <th>Enrollenment no:</th>
                                                    <th>Name</th>
                                                    <th>Paid Amount</th>
                                                    <th>Ation</th>
                                                    
                                                  </tr>
                                             </thead>
                                            <tbody id='services-table'>
                                               
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
<div class="modal fade" id="updateServiceModal" tabindex="-1" aria-labelledby="updateUserModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update services Info </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 
      <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="uservicename" class="control-label mb-1">services Name:</label>
                                                        <input id="uservicename" name="uservicename" type="text" class="form-control">                                                         
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="udescription" class="control-label mb-1">Description:</label>
                                                        <input id="udescription" name="udescription" type="text" class="form-control">                                                        
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

</html>
<!-- end document-->
