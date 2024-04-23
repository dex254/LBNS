<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
    <div class="col-xl-6">

                <h4 class="card-title">Request here</h4>
                <p class="card-title-desc">You are a businesses man or  woman and would  wish to have on your satll
                  input the products you want by filling up this table and be sure  you will get the products  you need.</p>
                    <?php echo form_open_multipart('bank/store',$attributes); ?>
                <form class="custom-validation" action="post">
                                      <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" id="name"  name="name" class="form-control"  placeholder="Type  your neme"/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product</label>
                        <div>
                            <input type="text" id="product" name="product" class="form-control"
                                    placeholder="product name"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contact</label>
                            <div>
                                <input type="number" id="phone" name="phone" class="form-control"
                                        placeholder="your phone number"/>
                            </div>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <div>
                            <input type="email"  id="email" name="email" class="form-control"
                                    parsley-type="email" placeholder="Enter your email"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantity</label>
                        <div>
                            <input type="text" id="size" name="size" class="form-control"
                                    placeholder="enter  the quantity"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <div>
                            <input data-parsley-type="digits" type="date"
                                   id="date" name="date"  class="form-control"
                                    placeholder="Enter date today"/>
                        </div>
                    </div>

                    </div>

                    </div>

                    </div>
                    <div class="mb-0">
                        <div>

                            <button type="reset" class="btn btn-secondary waves-effect">
                                councel
                            </button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Request
                            </button>
                            <a href="<?php echo base_url('index.php/bank/');?>"> <button type="button" class="btn btn-outline-dark waves-effect waves-light">back to table</button></a>
                        </div>
                    </div>
                </form>
                <!-- end form -->

    </div> <!-- end col -->
  </div> <!-- end row -->

                 </div> <!-- container-fluid -->
             </div>
             <!-- End Page-content -->
