 <?php echo form_open_multipart('contacts/store',$attributes); ?>
 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                      <div class="col-xl-6">
                              <div class="card">
                                  <div class="card-body">

                                      <h4 class="card-title">There is the list of  your  castomers</h4>
                                      <p class="card-title-desc">The  admin has acess and aouthority  to register and store his customes for later revews and  discounts.</p>
                                          <?php echo form_open_multipart('contacts/store',$attributes); ?>
                                      <form action="post" class="custom-validation">

                                          </div>
                                          <div class="mb-3">
                                              <label class="form-label">Castomers Name</label>
                                              <div>
                                                  <input type="text" id="name"  name="name" class="form-control" placeholder="Enter Castomers Name  "/>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <label class="form-label">Product or service</label>
                                              <div>
                                                  <input type="text"  id="size" name="size"class="form-control"
                                                          placeholder="state  the product or service offared"/>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <label class="form-label">Content</label>
                                              <div>
                                                  <input type="number"  id="phone"  name="phone"  class="form-control"  placeholder="castomers phone number"/>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <label class="form-label">Amount paid</label>
                                              <div>
                                                  <input type="number"  id="amount"  name="amount" class="form-control"  placeholder="customer payment"/>
                                              </div>
                                          </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Date</label>
                                            <div>
                                                <input type="date"  id="date"  name="date" class="form-control"  placeholder="Pick the day today"/>
                                            </div>
                                        </div>



                                          <div class="mb-0">
                                              <div>
                                                  <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                      saving
                                                  </button>
                                                  <a href="<?php echo base_url('index.php/contacts/');?>">"<button type="button" class="btn btn-secondary waves-effect">
                                                    <i class="dripicons-view-list"></i>
                                                      Veiw table
                                                  </button></a>
                                              </div>
                                          </div>
                                      </form>
                                      <!-- end form -->
                                  </div>
                              </div>
                          </div> <!-- end col -->
                      </div> <!-- end row -->

                  </div> <!-- container-fluid -->
              </div>
              <!-- End Page-content -->




          </div>
          <!-- end main content-->

      </div>
      <!-- END layout-wrapper -->
