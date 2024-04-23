
<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                      <div class="row">
                           <div class="col-xl-6">
                               <div class="card">
                                   <div class="card-body">
                                       <h4 class="card-title"> The user after contacting  the admin can book   for aproduct or  service</h4>
                                       <p class="card-title-desc"> castomers booking place</p>
                                       <?php echo form_open_multipart('chart/store',$attributes); ?>
                                   <form class="custom-validation" action="post">




                                           </div>

                                           <div class="mb-3">
                                               <label class="form-label">Castomer Name</label>
                                               <div>
                                                   <input  type="text"  id="name"  name="name"
                                                           class="form-control"
                                                           placeholder="Enter  castomers full name"/>
                                               </div>
                                           </div>
                                           <div class="mb-3">
                                               <label class="form-label">Pnone</label>
                                               <div>
                                                   <input  type="number"  id="phone" name="phone"
                                                           class="form-control"
                                                           placeholder="Enter castomers phone number"/>
                                               </div>
                                           </div>
                                           <div class="mb-3">
                                               <label class="form-label">Product or service</label>
                                               <div>
                                                   <input  type="text"   id="size" name="size"
                                                           class="form-control"
                                                           placeholder="state  the product booked or sarvice needed"/>
                                               </div>
                                           </div>
                                           <div class="mb-3">
                                               <label class="form-label">date</label>
                                               <div>
                                                   <input  type="date"  id="date" name="date"
                                                           class="form-control"
                                                           placeholder="The date for offering goods or  services"/>
                                               </div>
                                           </div>
                                           <div class="mb-3">
                                               <label class="form-label">Time</label>
                                               <div>
                                                   <input  type="time"  id="time" name="time"
                                                           class="form-control"
                                                           placeholder="The  select time booked"/>
                                               </div>
                                           </div>



                                           <div class="mb-0">
                                               <div>

                                                   <a href="<?php echo base_url('index.php/chart/');?>"><button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                       send
                                                   </button></a>
                                                  <a href="<?php echo base_url('index.php/chart/');?>"> <button type="button" class="btn btn-secondary waves-effect">
                                                    <i class="dripicons-view-list"></i>
                                                       view
                                                   </button></a>
                                               </div>
                                           </div>
                                       </form>
                                       <!-- end form -->
                                   </div>
                               </div>
                           </div>
                         </div> <!-- end row -->

     </div> <!-- container-fluid -->
 </div>
 <!-- End Page-content -->




</div>
<!-- end main content-->

</div><!-- en
