<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">



                                                              <h4 class="card-title"> Sarvices updates and value table</h4>
                                                              <p class="card-title-desc">This services are offered at  the ace shops and this is the most minimum value of  each a specific periods
                                                             <code>Tatoos &piacing & etc</code>.
                                                              </p>
                                                              <h2><a href="<?php echo base_url('index.php/bank/create/');?>"><button type="button" class="btn btn-outline-primary waves-effect waves-light">Update services Value</button></a></h2>


                                                                  <table class="table table-dark mb-0">
                                                                    <thead>
                                                                      <tr>
                                                                  <th>#</th>
                                                                  <th>Sarvice Name</th>
                                                                  <th>Sarvice Value</th>
                                                                  <th>Date of Update</th>



                                                                  </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                    <?php $i=1; foreach ($banks as $contact): ?>
                                  <tr>
                                    <td><?php echo $i; $i++;?></td>
                                    <td><?php echo $contact['name'];?></td>
                                    <td><?php echo $contact['amount'];?></td>
                                    <td><?php echo $contact['date'];?></td>

                                  </tr>
                                <?php endforeach ?>
                                                                    </tbody>


                                                                  </table>




                                              </div>
                                            </div>
          <!-- end main content-->

      </div>
