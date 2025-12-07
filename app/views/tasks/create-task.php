  <?php
$page_title = "Create Project";  
$page= 'Project Create';
$show_breadcrumb = true;
?>

  
  <form action="#">
      <div class="row">
          <div class="col-xxl-12">
              <div class="row gy-10">
                  <div class="col-xl-12">
                      <div class="card__wrapper">
                          <div class="row gy-20">
                              <div class="col-lg-12">
                                  <div class="from__input-box">
                                      <div class="form__input-title">
                                          <label for="projectName2">Project Name<span>*</span></label>
                                      </div>
                                      <div class="form__input">
                                          <input class="form-control" name="projectName2" id="projectName2" type="text">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xxl-12">
                                  <div class="from__input-box">
                                      <div class="form__input-title">
                                          <label for="projectThumbnail">Project Thumbnail<span>*</span></label>
                                      </div>
                                      <div class="form__input">
                                          <input class="form-control" name="name" id="projectThumbnail" type="File">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="from__input-box">
                                      <div class="form__input-title">
                                          <label>Start Date <span>*</span></label>
                                      </div>
                                      <div class="form__input">
                                          <input class="form-control" id="purchaseDate" type="text" placeholder="" readonly="readonly">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="from__input-box">
                                      <div class="form__input-title">
                                          <label>Deadline<span>*</span></label>
                                      </div>
                                      <div class="form__input">
                                          <input class="form-control" id="humanFriendlyDates" type="text" placeholder="" readonly="readonly">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="from__input-box">
                                      <div class="form__input-title">
                                          <label for="projectPriority" class="form-label">Priority<span>*</span></label>
                                      </div>
                                      <div class="form__input">
                                          <select id="projectPriority" class="form-select">
                                              <option value="1">Low</option>
                                              <option value="2" selected>High</option>
                                              <option value="3">Medium</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="from__input-box">
                                      <div class="form__input-title">
                                          <label for="projectStatus" class="form-label">Status
                                              <span>*</span></label>
                                      </div>
                                      <div class="form__input">
                                          <select id="projectStatus" class="form-select">
                                              <option value="1">Complete</option>
                                              <option value="2">On Going</option>
                                              <option value="3">Pending</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xxl-12">
                                  <div class="from__input-box">
                                      <div class="form__input-title">
                                          <label>Attached files</label>
                                      </div>
                                  </div>
                                  <div class="dropzone dz-clickable dz-started" id="myDropzone">
                                      <div class="dz-default dz-message"><i class="fa-thin fa-cloud-arrow-up"></i>
                                          <h6>Drop files here or click to upload.</h6><span
                                              class="note needsclick">(This is just a demo dropzone. Selected files are
                                              not actually uploaded.)</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="from__input-box">
                                      <div class="form__input-title">
                                          <label>Project Description <span>*</span></label>
                                      </div>
                                      <div class="from__input-box">
                                          <textarea id="tinymce_simple_textarea"></textarea>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="submit__btn text-center mb-20">
              <button class="btn btn-primary">Submit</button>
          </div>
      </div>
  </form>