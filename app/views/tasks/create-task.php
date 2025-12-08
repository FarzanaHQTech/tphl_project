  <?php
    $page_title = "Create Project";
    $page = 'Project Create';
    $show_breadcrumb = true;
    ?>


  <form action="<?= $GLOBALS['base_url'] ?>/store-task" method="POST">
      <div class="row">
          <div class="col-xxl-12">


              <div class="row gy-10">
                  <div class="col-xl-12">
                      <div class="card__wrapper">
                          <div class="row gy-20">
                              <div class="col-lg-6">
                                  <div class="from__input-box">
                                      <div class="form__input-title">
                                          <label for="title">Task Title<span>*</span></label>
                                      </div>
                                      <div class="form__input">
                                          <input class="form-control" name="title" id="title" type="text">
                                      </div>
                                  </div>
                              </div>

                            
                              <div class="col-lg-6">
                                  <div class="from__input-box">
                                      <div class="form__input-title">
                                          <label for="employee_id" class="form-label">Assigned Employee <span>*</span></label>
                                      </div>
                                      <div class="form__input">
                                          <select id="employee_id" name="employee_id" class="form-select">
                                              <?php foreach ($employees as $employee): ?>
                                                  <option value="<?= $employee['id'] ?>"><?= $employee['full_name'] ?></option>
                                              <?php endforeach; ?>
                                          </select>


                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-6">
                                  <div class="from__input-box">
                                      <div class="form__input-title">
                                          <label>Start Date <span>*</span></label>
                                      </div>
                                      <div class="form__input">
                                          <input class="form-control" id="startingDate" type="text" placeholder="" readonly="readonly" name="start_date">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="from__input-box">
                                      <div class="form__input-title">
                                          <label>Deadline<span>*</span></label>
                                      </div>
                                      <div class="form__input">
                                          <input class="form-control" id="humanFriendlyDates" type="text" placeholder="" readonly="readonly" name="deadline">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="from__input-box">
                                      <div class="form__input-title">
                                          <label for="projectPriority" class="form-label">Priority<span>*</span></label>
                                      </div>
                                      <div class="form__input">
                                          <select id="projectPriority" name="priority" class="form-select">
                                              <option value="low">Low</option>
                                              <option value="medium">Medium</option>
                                              <option value="high" selected>High</option>
                                              <option value="urgent">Urgent</option>
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
                                          <select id="projectStatus" class="form-select" name="status">
                                              <option value="pending">Pending</option>
                                              <option value="in_progress">In Progress</option>
                                              <option value="complete">Complete</option>
                                              <option value="expired">Expired</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-12">
                                  <div class="from__input-box">
                                      <div class="form__input-title">
                                          <label>task Description <span>*</span></label>
                                      </div>
                                      <div class="from__input-box">
                                          <textarea id="tinymce_simple_textarea" name="description"></textarea>
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