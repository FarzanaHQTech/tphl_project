  <?php
    $page_title = "User List";
    $page = 'user-lists';
    $show_breadcrumb = false;
    ?>


  <div class="row">
      <?php foreach ($tasks as $task): ?>
          <div class="col-xxl-4">

              <div class="card__wrapper">
                  <div class="project__wrapper">
                      <div class="project__top-content">
                          <h5 class="mb-8"><a href="project-details.html"><?= $task['title'] ?></a>
                          </h5>
                          <div class="d-flex align-items-center g-5 text-success">
                              <i class="fa-solid fa-circle blink"></i><span class="d-block"><?= $task['status'] ?></span>
                          </div>
                          <div class="fs-14 d-block mb-15">
                              <span>5</span> <span class="text-muted">open tasks,</span>
                              <span>10</span> <span class="text-muted">tasks have been
                                  completed</span>
                          </div>
                      </div>
                      <p class="project__description mb-15"><?= $task['description'] ?></p>
                      <div class="d-flex justify-content-between">
                          <div class="project__deadline mb-20">
                              <span class="project__meta-title">Start:</span>
                              <div class="text-muted"><?= $task['start_date'] ? date('d F, Y', strtotime($task['start_date'])) : '' ?>
                              </div>
                          </div>
                          <div class="project__deadline mb-20">
                              <span class="project__meta-title">Deadline:</span>
                              <div class="text-muted"><?= $task['deadline'] ? date('d F, Y', strtotime($task['deadline'])) : '' ?>
</div>
                          </div>
                      </div>
                  </div>

                  <div class="project__team mb-20">
                      <span class="project__meta-title mb-8">Employee:</span>
                      <div class="avatar">
                          <ul>
                              <li><img class="img-36 border-circle" src="<?= getImage('employees', $task['photo']) ?>" alt="image"><span><?= $task['employee_name'] ?></span>
                              </li>

                          </ul>
                      </div>
                  </div>
                  <div class="project__progress">
                      <div class="d-flex justify-content-between mb-8">
                          <span class="project__meta-title">Task Progress</span>

                          <span class="project__meta-title">%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: <?= $task['progress'] ?>%" aria-valuenow=" <?= $task['progress'] ?>" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip"
                              title="<?= $task['status'] ?>">

                          </div>
                      </div>
                      <div class="reamaining-time my-3 d-flex justify-content-between gap-2">
                          <div class="time">
                              <label>Task Remaining Time</label>
                              <span class="count-down bd-badge bg-danger">12:10:20</span>
                          </div>
                          <div class="">
                              <label>Project Status</label>
                              <span class="count-down bd-badge bg-primary ">On Going</span>
                          </div>
                      </div>

                  </div>
                  <div class="task__btn">
                      <a class="btn btn-outline-theme-border" href="<?= $base_url ?>/show-task">View Task</a>
                  </div>
              </div>
          </div>
      <?php endforeach ?>


  </div>