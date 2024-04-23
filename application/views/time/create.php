<div class="main-content">

               <div class="page-content">

                                               <div class="mt-5 mt-lg-4">
                                                   <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i>You can set times for your   customers here</h5>
                                                   <?php echo form_open_multipart('time/store',$attributes); ?>

                                                   <form>
                                                       <div class="row mb-4">
                                                           <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Customer  name</label>
                                                           <div class="col-sm-9">
                                                             <input type="text"  id="name"  name="name" class="form-control"  placeholder="Enter your first name">
                                                           </div>
                                                       </div>
                                                       <div class="row mb-4">
                                                           <label for="horizontal-email-input" class="col-sm-3 col-form-label">Period</label>
                                                           <div class="col-sm-9">
                                                               <input type="text" id="noun"   name="noun" class="form-control"   placeholder="enter time taken for  the service ">
                                                           </div>
                                                       </div>
                                                       <div class="row mb-4">
                                                           <label for="horizontal-password-input" class="col-sm-3 col-form-label">Finished time</label>
                                                           <div class="col-sm-9">
                                                             <input type="time" id="outft"  name="outft"  class="form-control"  placeholder="pich current time">
                                                           </div>
                                                       </div>
                                                       <div class="row mb-4">
                                                           <label for="horizontal-password-input" class="col-sm-3 col-form-label">Date</label>
                                                           <div class="col-sm-9">
                                                             <input type="date" id="date"  name="date"  class="form-control"  placeholder="pick pick date of offering sevice">
                                                           </div>
                                                       </div>
                                                       <div class="row mb-4">
                                                           <label for="horizontal-password-input" class="col-sm-3 col-form-label">Amount</label>
                                                           <div class="col-sm-9">
                                                             <input type="number" id="amount"  name="amount"  class="form-control"  placeholder="Enter the amount  paid before exit">
                                                           </div>
                                                       </div>
                                                       <div class="mb-0">
                                                           <div>
                                                               <button type="submit" class="btn btn-primary w-md">Submit</button>
                                                               <a href="<?php echo base_url('index.php/time/index/');?>"><button type="button" class="btn btn-outline-secondary waves-effect"><i class="dripicons-view-list"></i>Go back</button></a>

                                                           </div>
                                                       </div>


                                                           </div>
                                                       </div>
                                                   </form>
                                               </div>
                                           </div> <!-- end col -->
                                       </div> <!-- end row -->

                                     </div> <!-- end card -->

                                                <!-- End Page-content -->
