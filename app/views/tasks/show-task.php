        <?php
        $page_title = "project view";
        $page = 'project view';
        $show_breadcrumb = false;
        ?>
        <div class="row">
            <?php   $deadline = !empty($task['deadline']) ? $task['deadline'] : null ?>
            <div class="col-xxl-8 col-xl-8">
                <div class="card__wrapper">
                    <div class="project__details-top">
                        <!-- Title Section -->
                        <div class="mb-3">
                            <h4 class="fw-bold text-dark mb-2"><?= $task['title'] ?? 'N/A' ?></h4>
                        </div>

                        <!-- Meta Information -->
                        <div class="d-flex flex-wrap justify-content-between">
                            <!-- Create Date -->
                            <div class="d-flex align-items-center">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="text-primary" viewBox="0 0 16 16">
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                    </svg>
                                </div>
                                <div>
                                    <small class="text-muted d-block" style="font-size: 0.75rem;">Create Date</small>
                                    <span class="fw-semibold text-dark"><?= $task['start_date'] ? date('d F, Y', strtotime($task['start_date'])) : 'N/A' ?></span>
                                </div>
                            </div>

                            <!-- Deadline -->
                            <div class="d-flex align-items-center">
                                <div class="bg-danger bg-opacity-10 rounded-circle p-2 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="text-danger" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                    </svg>
                                </div>
                                <div>
                                    <small class="text-muted d-block" style="font-size: 0.75rem;">Deadline</small>
                                    <span class="fw-semibold text-dark"><?= $task['deadline'] ? date('d F, Y', strtotime($task['deadline'])) : 'N/A' ?></span>
                                </div>
                            </div>
                              <div class="time p-2">
                              <label>Task Remaining Time</label>
                              <span class="count-down bd-badge bg-danger fw-semibold"
                                  id="timer-<?= $task['id']; ?>"
                                  data-deadline="<?= $deadline ?>">
                                  Loading...
                              </span>
                          </div>
                        </div>
                    </div>
                </div>


                <div class="card__wrapper">
                    <div class="card__title-wrap mb-25">
                        <h5 class="card__heading-title">Summary</h5>
                    </div>
                    <?= $task['description'] ?>
                    <div class="row gy-3 mb-15">
                        <div class="col-lg-3 col-sm-6">
                            <div>
                                <p class="mb-5 fw-medium">Create Date:</p>
                                <h5 class="fs-15 mb-0"><?= $task['start_date'] ?  date('d F, Y', strtotime($task['start_date'])) : '' ?></h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div>
                                <p class="mb-5 fw-medium">Deadline:</p>
                                <h5 class="fs-15 mb-0"><?= $task['deadline'] ?  date('d F, Y', strtotime($task['deadline'])) : ''  ?></h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div>
                                <p class="mb-5 fw-medium">Priority:</p>
                                <span class="bd-badge bg-success fs-12"><?= $task['priority'] ?></span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div>
                                <p class="mb-5 fw-medium">Status:</p>
                                <span class="bd-badge bg-warning fs-12"><?= $task['status'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-xxl-4 col-xl-4">
                <div class="position-sticky">
                    <div class="card__wrapper">
                        <div class="card__title-wrap mb-25">
                            <h5 class="card__heading-title">Assigned By</h5>
                        </div>
                        <div class="card__body">
                            <ul class="user__list">
                                <li>
                                    <div class="d-flex align-items-center gap-10 mb-10">
                                        <img class="img-50 border-circle" src="<?= getImage('users', $task['assigned_photo']) ?>" alt="user image">
                                        <div class="profile-info">
                                            <h6><?= $task['assigned_by_name'] ?>.</h6>
                                            <p class="mb-0"><?= $task['employee_designation'] ?></p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="card__wrapper">
                        <div class="card__title-wrap mb-25">
                            <h5 class="card__heading-title">Assigned Employee</h5>
                        </div>
                        <div class="card__body">
                            <ul class="user__list">
                                <li>
                                    <div class="d-flex align-items-center gap-10 mb-10">
                                        <img class="img-50 border-circle" src="<?= getImage('employees', $task['emp_photo']) ?>" alt="user image">
                                        <div class="profile-info">
                                            <h6><?= $task['employee_name'] ?>.</h6>
                                            <p class="mb-0"><?= $task['employee_designation'] ?></p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="card__wrapper">
                        <div class="card__title-wrap mb-25">
                            <h5 class="card__heading-title">Work Progress</h5>
                        </div>
                        <div class="card__body">
                            <div class="work-progress">
                                <div class="progress__item">
                                    <p>Project Planning</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $task['progress'] ?>%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><?= $task['progress'] ?>%</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>