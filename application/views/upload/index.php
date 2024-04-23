<!-- ============================================================== -->
          <div class="main-content">

              <div class="page-content">
                  <div class="container-fluid">
                    <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                      <h2><a href="<?php echo base_url('index.php/upload/create/');?>" ><button type="button" class="btn btn-warning waves-effect waves-light">Add castomers</button></a>

                                        <h4 class="card-title">Responsive images</h4>
                                        <p class="card-title-desc">Images in Bootstrap are made responsive with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width: 100%;</code> and <code class="highlighter-rouge">height: auto;</code> are applied to the image so that it scales with the parent element.</p>

                                        <div>
                                          <table class="table table-primary table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>&</th>

                                                    <th>image name</th>
                                                    <th>image</th>




                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php $i=1; foreach ($upload as $contact): ?>
                                            <tr>
                                            <td><?php echo $i; $i++;?></td>
                                            <td><?php echo $contact['name'];?></td>
                                            <td><img src="<?php echo base_url('image/'.$contact['image']);?>" height="50px" width="50px"alt=""></td>



                                            </tr>
                                            <?php endforeach ?>


                                            </tbody>

                                          </table>


                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                      </div><!-- end row -->

           </div> <!-- container-fluid -->
       </div>
       <!-- End P
