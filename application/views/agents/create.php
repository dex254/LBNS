
 <div class="main-content">

                 <div class="page-content">
                     <div class="container-fluid">
                       <div class="row">
                                                  <div class="col-xl-6">

                                                              <h4 class="card-title">prices flactuation table</h4>
                                                              <p class="card-title-desc">Give the update on goods prices with this current ecconomy applicable to all business members.</p>
                                                               <?php echo form_open_multipart('agents/store',$attributes); ?>
                                                              <form class="needs-validation" novalidate action="post">
                                                                  <div class="row">
                                                                      <div class="col-md-6">
                                                                          <div class="mb-3">
                                                                              <label class="form-label" for="validationCustom01">Product Name</label>
                                                                              <input type="text"  id="product" name="product"  class="form-control"  placeholder="enter product name" >
                                                                              <div class="valid-feedback">
                                                                                  Looks good!
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                  <label class="form-label" for="validationCustom01">Quantity</label>
                                                                                  <input type="text"  id="size" name="size"  class="form-control"  placeholder="enter product name" >
                                                                                  <div class="valid-feedback">
                                                                                      Looks good!
                                                                                  </div>
                                                                          </div>
                                                                          <div class="mb-3">
                                                                              <label class="form-label" for="validationCustom01">Amount</label>
                                                                              <input type="number"  id="number" name="number" class="form-control"  placeholder="market value" >
                                                                              <div class="valid-feedback">
                                                                                  Looks good!
                                                                              </div>
                                                                          </div>

                                                                          </div>
                                                                          <div class="mb-3">
                                                                              <label class="form-label" for="validationCustom01">Date</label>
                                                                              <input type="date" id="date" name="date" class="form-control"  placeholder="Date of update" >
                                                                              <div class="valid-feedback">
                                                                                  Looks good!
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                  <label class="form-label" for="validationCustom01">Location</label>
                                                                                  <input type="text"  id="place" name="place"  class="form-control"  placeholder="place of update" >
                                                                                  <div class="valid-feedback">
                                                                                      Looks good!
                                                                                  </div>
                                                                          </div>



                                                                      </div>
                                                                      <!-- end col -->

                                                                      <!-- end col -->
                                                                  </div>
                                                                  <!-- end row -->


                                                                      <!-- end col -->


                                                                      <!-- end col -->
                                                                  </div>
                                                                  <!-- end row -->
                                                                  <a><button type="submit" class="btn btn-outline-primary waves-effect waves-light">update price</button></a>
                                                                  <a href="<?php echo base_url('index.php/agents/');?>"><button type="button" class="btn btn-outline-danger waves-effect waves-light">Go Back</button></a>



                                                              </form>
                                                              <!-- end form -->

                                                      <!-- end card -->
                                                  </div> <!-- end col -->
                                                  <!-- end col -->
                       </div> <!-- end row -->

                   </div> <!-- container-fluid -->
               </div>
               <!-- End Page-content -->
