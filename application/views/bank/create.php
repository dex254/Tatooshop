<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
    <div class="col-xl-6">

                <h4 class="card-title">Sarvice  offered</h4>
                <p class="card-title-desc">The services offared at at the ace shops.</p>
                    <?php echo form_open_multipart('bank/store',$attributes); ?>
                <form class="custom-validation" action="post">
                                      <div class="mb-3">
                        <label class="form-label">Sarvice Name</label>
                        <input type="text" id="name"  name="name" class="form-control"  placeholder="Enter Sarvice Name"/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Sarvice Value</label>
                        <div>
                            <input type="number" id="amount" name="amount" class="form-control"
                                    placeholder="Enter sarvice value value in Ksh"/>
                        </div>





                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <div>
                            <input  type="date"
                                   id="date" name="date"  class="dess"
                                    placeholder="pick the date of the update"/>
                        </div>
                    </div>


                    </div>

                    </div>

                    </div>
                    <div class="mb-0">
                        <div>

                            <button type="reset" class="btn btn-secondary waves-effect">
                                councel
                            </button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Update
                            </button>
                            <a href="<?php echo base_url('index.php/bank/');?>"> <button type="button" class="btn btn-outline-dark waves-effect waves-light"><i class="dripicons-view-list"></i>go to table</button></a>
                        </div>
                    </div>
                </form>
                <!-- end form -->

    </div> <!-- end col -->
  </div> <!-- end row -->

                 </div> <!-- container-fluid -->
             </div>
             <!-- End Page-content -->
