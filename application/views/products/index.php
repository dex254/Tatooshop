<div class="main-content">

               <div class="page-content">
                   <div class="container-fluid">

                       <!-- start page title -->

                       <!-- end page title -->



                                       <h4 class="card-title">updates</h4>
                                       <a href="<?php echo base_url('index.php/products/create/');?>"><button type="button" class="btn btn-outline-secondary waves-effect">update new product</button></a>
                                       <p class="card-title-desc">Here are product updates  on letest goods  prices  on the market currently.
                                       </p>

                                       <div class="table-responsive">
                                           <table class="table mb-0">
                                             <thead>
                                               <tr>
                                             <th>no</th>
                                             <th>Product Name</th>
                                             <th>Buying price</th>
                                             <th>Selling price</th>
                                             <th>Profits</th>
                                             <th>Date</th>

                                             </tr>
                                             </thead>
                                             <tbody>
                                             <?php $i=1; foreach ($products as $contact): ?>
                                               <tr>
                                               <td><?php echo $i; $i++;?></td>

                                               <td><?php echo $contact['product'];?></td>
                                               <td><?php echo $contact['buy'];?></td>
                                               <td><?php echo $contact['sell'];?></td>

                                               <td><?php echo $contact['profit'];?></td>
                                               <td><?php echo $contact['date'];?></td>

                                               </tr>
                                               <?php endforeach ?>
                                               <thead>
                                                 <tr>
                                               <th>no</th>
                                               <th>Product Name</th>
                                               <th>Buying price</th>
                                               <th>Selling price</th>
                                               <th>Profits</th>
                                               <th>Date</th>

                                               </tr>
                                               </thead>


                                               </tbody>
                                           </table>
                                           <nav aria-label="Page navigation example">
                                       <ul class="pagination">
                                           <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                           <li class="page-item"><a class="page-link" href="#">1</a></li>
                                           <li class="page-item"><a class="page-link" href="#">2</a></li>
                                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                                           <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                       </ul>
                                   </nav>


                         </div>
                      <!-- end row -->

                  </div> <!-- container-fluid -->
              </div>

              <!-- End Page-content -->
