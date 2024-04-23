<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                                                    <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i>Tax addion point</h5>
                                                     <?php echo form_open_multipart('tax/store',$attributes); ?>
                                                    <form>
                                                        <div class="row mb-4">
                                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Tax Name</label>
                                                            <div class="col-sm-9">
                                                              <input type="text"  id="name"  name="name"  class="form-control"  placeholder="Enter tax name">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Product</label>
                                                            <div class="col-sm-9">
                                                                <input type="text"  id="product" name="product"  class="form-control"  placeholder="Enter product taxed">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Amount</label>
                                                            <div class="col-sm-9">
                                                              <input type="number"  id="amount"  name="amount" class="form-control"  placeholder="Enteramount in Ksh">
                                                            </div>
                                                        </div><div class="row mb-4">
                                                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Date</label>
                                                            <div class="col-sm-9">
                                                              <input type="date"  id="date"  name="date" class="form-control"  placeholder="Select date  today">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Link</label>
                                                            <div class="col-sm-9">
                                                              <input type="url"  id="link"  name="link" class="form-control"  placeholder="link to more info on tax">
                                                            </div>
                                                        </div>

                                                      
                                                                <div>
                                                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                                                    <a href="<?php echo base_url('index.php/tax/');?>"><button type="button" class="btn btn-info waves-effect waves-light">Back</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                              <!-- end col -->
                                        </div> <!-- end row -->
                                      </div> <!-- end cardbody -->
                             </div> <!-- end card -->
                         </div> <!-- end col -->
                     </div><!-- end row -->
