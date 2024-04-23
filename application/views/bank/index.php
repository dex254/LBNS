<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">



                                                              <h4 class="card-title">product inquery table</h4>
                                                              <p class="card-title-desc">We relly need these products in our businesses
                                                             <code>good</code>.
                                                              </p>
                                                              <h2><a href="<?php echo base_url('index.php/bank/create/');?>"><button type="button" class="btn btn-outline-primary waves-effect waves-light">add an item</button></a></h2>


                                                                  <table class="table table-dark mb-0">
                                                                    <thead>
                                                                      <tr>
                                                                  <th>#</th>
                                                                  <th>Name</th>
                                                                  <th>Product</th>
                                                                  <th>Contact</th>
                                                                  <th>Email</th>
                                                                  <th>Quantity</th>
                                                                  <th>Date</th>
                                                                  <th>stetas</th>
                                                                  </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                  <?php $i=1; foreach ($banks as $contact): ?>
                                                                  <tr>
                                                                  <td><?php echo $i; $i++;?></td>
                                                                  <td><?php echo $contact['name'];?></td>
                                                                  <td><?php echo $contact['product'];?></td>
                                                                  <td><?php echo $contact['phone'];?></td>
                                                                  <td><?php echo $contact['email'];?></td>
                                                                  <td><?php echo $contact['size'];?></td>
                                                                  <td><?php echo $contact['date'];?></td>
                                                                  <td>
                                                                  <a href="<?php echo base_url('index.php/banks/view/'.$contact['id']);?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button></a>
                                                                  </td>
                                                                  </tr>
                                                                  <?php endforeach ?>
                                                                    </tbody>


                                                                  </table>




                                              </div>
                                            </div>
          <!-- end main content-->

      </div>
