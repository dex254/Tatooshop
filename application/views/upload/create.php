<!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4>Form File Upload</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Lexa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Form File Upload</li>
                                    </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="state-information d-none d-sm-block">
                                <div class="state-graph">
                                    <div id="header-chart-1"></div>
                                    <div class="info">Balance $ 2,317</div>
                                </div>
                                <div class="state-graph">
                                    <div id="header-chart-2"></div>
                                    <div class="info">Item Sold 1230</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Dropzone</h4>
                                    <p class="card-title-desc">DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.
                                    </p>

                                    <div>
                                      <?php echo form_open_multipart('upload/store',$attributes); ?>

                                        <form action="images/upload_files"  method="post" class="dropzone" enctype="multipart/form-data">
                                          <div class="mb-3">
                                              <label class="form-label">image name</label>
                                              <div>
                                                  <input type="text" id="name"  name="name" class="form-control" placeholder="Enter Castomers Name  "/>
                                              </div>
                                          </div>

                                          </div>
                                            <div class="fallback">
                                                <input name="image" id="image" type="file" multiple="multiple">
                                            </div>



                                        </form>
                                    </div>

                                    <div class="text-center mt-4">
                                        <button type="submit"  class="btn btn-primary waves-effect waves-light">Send Files
                                        </button>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->



        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
