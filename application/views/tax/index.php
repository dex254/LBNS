<div class="main-content">

                <div class="page-content">

                               <div class="card">
                                   <div class="card-body">
                                       <h4 class="card-title">Table of tax  information</h4>
                                       <h2><a href="<?php echo base_url('index.php/tax/create/');?>"><button type="button" class="btn btn-outline-secondary waves-effect">update new product</button></a></h2>
                                       <p class="card-title-desc">Taxes <code>.Tax table data</code> current taxes of comodities.</p>

                                       <div class="table-responsive">
                                           <table class="table table-bordered border-primary mb-0">

                                               <thead>
                                                 <tr>
                                                     <th>@</th>
                                                     <th>Tax Name</th>
                                                     <th>Product</th>
                                                     <th>Amount</th>
                                                     <th>Date</th>
                                                     <th>url more on tax</th>

                                                     <th>Action</th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                             <?php $i=1; foreach ($tax as $contact): ?>
                                             <tr>
                                             <td><?php echo $i; $i++;?></td>
                                             <td><?php echo $contact['name'];?></td>
                                             <td><?php echo $contact['product'];?></td>
                                             <td><?php echo $contact['amount'];?></td>
                                             <td><?php echo $contact['date'];?></td>
                                             <td><?php echo $contact['link'];?></td>
                                             <td>
                                             <a href="<?php echo base_url('index.php/tax/view/'.$contact['id']);?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button></a>
                                             </td>
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
