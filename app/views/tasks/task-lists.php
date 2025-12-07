  
  <?php
$page_title = "User List";  
$page= 'user-lists';
$show_breadcrumb = false;
?>

  
  <div class="row">
      <div class="col-xxl-4">
          <div class="card__wrapper">
              <div class="project__wrapper">
                  <div class="project__top-content">
                      <h5 class="mb-8"><a href="project-details.html">Laravel Education App
                              Development</a>
                      </h5>
                      <div class="d-flex align-items-center g-5 text-success">
                          <i class="fa-solid fa-circle blink"></i><span class="d-block">On
                              Going</span>
                      </div>
                      <div class="fs-14 d-block mb-15">
                          <span>5</span> <span class="text-muted">open tasks,</span>
                          <span>10</span> <span class="text-muted">tasks have been
                              completed</span>
                      </div>
                  </div>
                  <p class="project__description mb-15">Laravel is a popular PHP framework known
                      for its
                      elegant syntax, powerful tools, and developer-friendly environment.</p>
                  <div class="d-flex justify-content-between">
                      <div class="project__deadline mb-20">
                          <span class="project__meta-title">Start:</span>
                          <div class="text-muted">05 January 2024</div>
                      </div>
                      <div class="project__deadline mb-20">
                          <span class="project__meta-title">Deadline:</span>
                          <div class="text-muted">14 April 2024</div>
                      </div>
                  </div>
              </div>
             
              <div class="project__team mb-20">
                  <span class="project__meta-title mb-8">Employee:</span>
                  <div class="avatar">
                      <ul>
                          <li><img class="img-36 border-circle" src="assets/images/avatar/avatar1.png" alt="image"><span>Name</span>
                          </li>
                        
                      </ul>
                  </div>
              </div>
              <div class="project__progress">
                  <div class="d-flex justify-content-between mb-8">
                      <span class="project__meta-title">Project Progress</span>
                      <span class="project__meta-title">60%</span>
                  </div>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" title="Complete">
                      </div>
                  </div>
                  <div class="reamaining-time my-3 d-flex justify-content-between gap-2">
                     <div class="time">
                    <label>Task Remaining Time</label>
                    <span class="count-down bd-badge bg-danger">12:10:20</span>
                    </div>
                   <div class="">
                    <label >Project Status</label>
                    <span class="count-down bd-badge bg-primary">On Going</span>
                    </div> 
                  </div>

              </div>
              <div class="task__btn">
                        <a class="btn btn-outline-theme-border" href="<?= $base_url ?>/show-task">View Task</a>
              </div>
          </div>
      </div>
      <div class="col-xxl-4">
          <div class="card__wrapper">
              <div class="project__wrapper">
                  <div class="project__top-content">
                      <h5 class="mb-8"><a href="project-details.html">Laravel Education App
                              Development</a>
                      </h5>
                      <div class="d-flex align-items-center g-5 text-success">
                          <i class="fa-solid fa-circle blink"></i><span class="d-block">On
                              Going</span>
                      </div>
                      <div class="fs-14 d-block mb-15">
                          <span>5</span> <span class="text-muted">open tasks,</span>
                          <span>10</span> <span class="text-muted">tasks have been
                              completed</span>
                      </div>
                  </div>
                  <p class="project__description mb-15">Laravel is a popular PHP framework known
                      for its
                      elegant syntax, powerful tools, and developer-friendly environment.</p>
                  <div class="d-flex justify-content-between">
                      <div class="project__deadline mb-20">
                          <span class="project__meta-title">Start:</span>
                          <div class="text-muted">05 January 2024</div>
                      </div>
                      <div class="project__deadline mb-20">
                          <span class="project__meta-title">Deadline:</span>
                          <div class="text-muted">14 April 2024</div>
                      </div>
                  </div>
              </div>
             
              <div class="project__team mb-20">
                  <span class="project__meta-title mb-8">Employee:</span>
                  <div class="avatar">
                      <ul>
                          <li><img class="img-36 border-circle" src="assets/images/avatar/avatar1.png" alt="image"><span>Name</span>
                          </li>
                        
                      </ul>
                  </div>
              </div>
              <div class="project__progress">
                  <div class="d-flex justify-content-between mb-8">
                      <span class="project__meta-title">Project Progress</span>
                      <span class="project__meta-title">90%</span>
                  </div>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" title="Complete">
                      </div>
                  </div>
                    <div class="reamaining-time my-3 d-flex justify-content-between gap-2">
                     <div class="time">
                    <label>Task Remaining Time</label>
                    <span class="count-down bd-badge bg-danger">00:00:00</span>
                  </div>
                  <div class="">
                    <label>Project Status</label>
                    <span class="count-down bd-badge bg-danger">Expired</span>
                  </div>
                  </div>
              </div>
               <div class="task__btn">
                        <a class="btn btn-outline-theme-border" href="">View Task</a>
              </div>
          </div>
      </div>
      
  </div>