<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
    <div class="col-xl-6">

                <h4 class="card-title">Procuts information</h4>
                <p class="card-title-desc">The products you just bought.</p>
                    <?php echo form_open_multipart('products/store',$attributes); ?>
                <form class="custom-validation" action="post">
                                      <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" id="product"  name="product" class="form-control"  placeholder="Enter product name"/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Buying price</label>
                        <div>
                            <input type="number" id="buy" name="buy" class="form-control"
                                    placeholder="Enter buying value in Ksh"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Selling price</label>
                            <div>
                                <input type="number" id="sell" name="sell" class="form-control"
                                        placeholder="Enter selling price"/>
                            </div>

                    </div>



                    <div class="mb-3">
                        <label class="form-label">Profits</label>
                        <div>
                            <input type="number" id="profit" name="profit" class="form-control"
                                    placeholder="Enter ther profit you made"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <div>
                            <input data-parsley-type="digits" type="date"
                                   id="date" name="date"  class="form-control"
                                    placeholder="Enter date today"/>
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
                                upload
                            </button>
                            <a href="<?php echo base_url('index.php/products/');?>"> <button type="button" class="btn btn-outline-dark waves-effect waves-light"><i class="dripicons-view-list"></i>go to table</button></a>
                        </div>
                    </div>
                </form>
                <!-- end form -->

    </div> <!-- end col -->
  </div> <!-- end row -->

                 </div> <!-- container-fluid -->
             </div>
             <!-- End Page-content -->
