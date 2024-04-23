<div class="main-content">

                <div class="page-content">

                               <div class="card">
                                   <div class="card-body">
                                       <h4 class="card-title">Sarvice timing  table</h4>
                                       <h2><a href="<?php echo base_url('index.php/time/create/');?>"><button type="button" class="btn btn-outline-secondary waves-effect">Sarve Now</button></a></h2>
                                       <p class="card-title-desc">Sarve one  a customer above.</p>

                                       <div class="table-responsive">
                                           <table class="table table-bordered border-primary mb-0">

                                               <thead>
                                                 <tr>
                                                     <th>@</th>
                                                     <th>customer Name</th>
                                                     <th>Period Taken</th>
                                                     <th>Finished time</th>
                                                     <th>Date</th>
                                                     <th>Amount</th>



                                                 </tr>
                                             </thead>
                                             <tbody>
                                             <?php $i=1; foreach ($time as $contact): ?>
                                             <tr>
                                             <td><?php echo $i; $i++;?></td>
                                             <td><?php echo $contact['name'];?></td>
                                             <td><?php echo $contact['noun'];?></td>
                                             <td><?php echo $contact['outft'];?></td>
                                             <td><?php echo $contact['date'];?></td>
                                             <td><?php echo $contact['amount'];?></td>


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
