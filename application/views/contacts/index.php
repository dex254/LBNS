<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">


                                       <h4 class="card-title">Businesses</h4>
                                       <h2><a href="<?php echo base_url('index.php/contacts/create/');?>" ><button type="button" class="btn btn-warning waves-effect waves-light">add Business</button></a>
                                       <p class="card-title-desc">Here the varous  businesses are listed together with  there  owners and  feel free to identify  or  know
                                         what sarvice you  need  from them you can add your  business too as well add up  there <code>Business</code>.</p>


                                           <div class="table-responsive">
                                               <table class="table table-primary table-striped mb-0">
                                                 <thead>
                                                     <tr>
                                                         <th>&</th>

                                                         <th>Business Name</th>
                                                         <th>Owner</th>

                                                         <th>Description</th>
                                                         <th>Phone</th>
                                                         <th>Action</th>


                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                   <?php $i=1; foreach ($contacts as $contact): ?>
                                                 <tr>
                                                 <td><?php echo $i; $i++;?></td>
                                                 <td><?php echo $contact['name'];?></td>
                                                 <td><?php echo $contact['owner'];?></td>
                                                 <td><?php echo $contact['dess'];?></td>
                                                 <td><?php echo $contact['phone'];?></td>
                                                 <td>
                                                 <a href="<?php echo base_url('index.php/users/view/'.$contact['id']);?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button></a>
                                                 </td>
                                                 </tr>
                                                 <?php endforeach ?>


                                                 </tbody>

                                               </table>



                                                               </div>
                                                           </div>
                                                       </div>
