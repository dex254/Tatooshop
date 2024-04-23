<div class="main-content">

                <div class="page-content">

                               <div class="card">
                                   <div class="card-body">
                                       <h4 class="card-title">The Booking table</h4>
                                       <h2><a href="<?php echo base_url('index.php/chart/create/');?>"><button type="button" class="btn btn-outline-secondary waves-effect">Book Now</button></a></h2>
                                       <p class="card-title-desc">Book a customer above.</p>

                                       <div class="table-responsive">
                                           <table class="table table-bordered border-primary mb-0">

                                               <thead>
                                                 <tr>
                                                     <th>@</th>
                                                     <th>customer Name</th>
                                                     <th>Telephone number</th>
                                                     <th>Product or sarvice</th>
                                                     <th>Date</th>
                                                     <th>Time booked</th>



                                                 </tr>
                                             </thead>
                                             <tbody>
                                             <?php $i=1; foreach ($chart as $contact): ?>
                                             <tr>
                                             <td><?php echo $i; $i++;?></td>
                                             <td><?php echo $contact['name'];?></td>
                                             <td><?php echo $contact['phone'];?></td>
                                             <td><?php echo $contact['size'];?></td>
                                             <td><?php echo $contact['date'];?></td>
                                             <td><?php echo $contact['time'];?></td>

                                             
                                             </tr>
                                             <?php endforeach ?>
                                             </tbody>
                                               </tbody>
                                           </table>
                                       </div>

                                   </div>
                               </div>
                           </div>

                        </div>
                    </div>
