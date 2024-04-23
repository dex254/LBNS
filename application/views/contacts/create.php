 <?php echo form_open_multipart('contacts/store',$attributes); ?>
 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                      <div class="col-xl-6">
                              <div class="card">
                                  <div class="card-body">

                                      <h4 class="card-title">Business owners</h4>
                                      <p class="card-title-desc">Here as members of  LBNS team of business men or   weman  you  have the Opportunity  to
                                        say something about  your area of  work and fell free to interact with other  members of  your team .</p>
                                          <?php echo form_open_multipart('contacts/store',$attributes); ?>
                                      <form action="post" class="custom-validation">

                                          </div>
                                          <div class="mb-3">
                                              <label class="form-label">Business Name</label>
                                              <div>
                                                  <input type="text" id="name"  name="name" class="form-control" placeholder="Enter  name of business"/>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <label class="form-label">Owner</label>
                                              <div>
                                                  <input type="text"  id="owner" name="owner"class="form-control"
                                                          placeholder="The  owner of business"/>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <label class="form-label">Description</label>
                                              <div>
                                                  <input type="text"  id="dess"  name="dess"  class="form-control"  placeholder="Describe your business"/>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <label class="form-label">Phone</label>
                                              <div>
                                                  <input type="number"  id="phone"  name="phone" class="form-control"  placeholder="Your contacts"/>
                                              </div>
                                          </div>



                                          <div class="mb-0">
                                              <div>
                                                  <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                      saving
                                                  </button>
                                                  <a href="<?php echo base_url('index.php/contacts/');?>">"<button type="button" class="btn btn-secondary waves-effect">
                                                      back
                                                  </button></a>
                                              </div>
                                          </div>
                                      </form>
                                      <!-- end form -->
                                  </div>
                              </div>
                          </div> <!-- end col -->
                      </div> <!-- end row -->

                  </div> <!-- container-fluid -->
              </div>
              <!-- End Page-content -->




          </div>
          <!-- end main content-->

      </div>
      <!-- END layout-wrapper -->
