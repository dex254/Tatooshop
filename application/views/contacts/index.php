<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">


                                       <h4 class="card-title">Castomers Satifaction list</h4>
                                       <h2><a href="<?php echo base_url('index.php/contacts/create/');?>" ><button type="button" class="btn btn-warning waves-effect waves-light">Add castomers</button></a>
                                       <p class="card-title-desc"> For the smooth running of the businesses  the customes  must be registared into  the system and  there info   will be stored automatically</p>


                                           <div class="table-responsive">
                                               <table class="table table-primary table-striped mb-0">
                                                 <thead>
                                                     <tr>
                                                         <th>&</th>

                                                         <th>Customer Name</th>
                                                         <th>Products or sarvices</th>

                                                         <th>Cintact info</th>
                                                         <th>Amount Paid</th>
                                                         <th>Date</th>
                                                         <th>Action</th>


                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                   <?php $i=1; foreach ($contacts as $contact): ?>
                                                 <tr>
                                                 <td><?php echo $i; $i++;?></td>
                                                 <td><?php echo $contact['name'];?></td>
                                                 <td><?php echo $contact['size'];?></td>
                                                 <td><?php echo $contact['phone'];?></td>
                                                 <td><?php echo $contact['amount'];?></td>
                                                 <td><?php echo $contact['date'];?></td>
                                                 <td>
                                                 <a href="<?php echo base_url('index.php/contact/view/'.$contact['id']);?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button></a>
                                                 </td>
                                                 </tr>
                                                 <?php endforeach ?>


                                                 </tbody>

                                               </table>



                                                               </div>
                                                           </div>
                                                       </div>
