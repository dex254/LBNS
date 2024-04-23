<div class="main-content">

               <div class="page-content">
                   <div class="container-fluid">

                       <!-- start page title -->

                       <!-- end page title -->



                                       <h4 class="card-title">updates</h4>
                                       <a href="<?php echo base_url('index.php/agents/create/');?>"><button type="button" class="btn btn-outline-secondary waves-effect">update new product</button></a>
                                       <p class="card-title-desc">Here are product updates  on letest goods  prices  on the market currently.
                                       </p>

                                       <div class="table-responsive">
                                           <table class="table mb-0">
                                             <thead>
                                               <tr>
                                             <th>no</th>
                                             <th>Product Name</th>
                                             <th>Quantity</th>
                                             <th>Amount</th>
                                             <th>location</th>
                                             <th>Date</th>
                                             <th>Action</th>

                                             </tr>
                                             </thead>
                                             <tbody>
                                             <?php $i=1; foreach ($agents as $contact): ?>
                                               <tr>
                                               <td><?php echo $i; $i++;?></td>

                                               <td><?php echo $contact['product'];?></td>
                                               <td><?php echo $contact['size'];?></td>
                                               <td><?php echo $contact['number'];?></td>

                                               <td><?php echo $contact['place'];?></td>
                                               <td><?php echo $contact['date'];?></td>
                                               <td>
                                               <a href="<?php echo base_url('index.php/agents/view/'.$contact['id']);?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button></a>
                                               </td>
                                               </tr>
                                               <?php endforeach ?>

                                             <thead>
                                               <tr>
                                             <th>no</th>
                                             <th>Product Name</th>
                                             <th>Quantity</th>
                                             <th>Amount</th>
                                             <th>Date</th>
                                             <th>location</th>
                                             <th>Action</th>

                                             </tr>
                                             </thead>

                                               </tbody>
                                           </table>


                         </div>
                      <!-- end row -->

                  </div> <!-- container-fluid -->
              </div>
              <footer class="footer">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-sm-12">
                              © <script>document.write(new Date().getFullYear())</script> LBNS <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Dennis.</span>
                          </div>
                      </div>
                  </div>
              </footer>
              <!-- End Page-content -->
