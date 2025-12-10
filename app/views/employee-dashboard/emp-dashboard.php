        <?php
        $page_title = "Employee Dashboard ";
        ?>

<div class="notification-dropdown">
    <ul>
        <?php if (!empty($notifications)): ?>
            <?php foreach($notifications as $note): ?>
                <li>
                    <strong><?= htmlspecialchars($note['message'] ?? '') ?></strong>
                    <br>
                    <small>Assigned by: <?= htmlspecialchars($note['assigned_by_name']) ?></small>
                    <small><?= $note['created_at'] ?></small>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No new notifications</li>
        <?php endif; ?>
    </ul>
</div>


        <!-- App side area start -->
        <div class="app__slide-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="employee-alert-box">
                        <div class="col-xl-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="icon-thumbs-up"></i>
                                <p>Your leave request for <strong><b>“24th April 2024”,</b></strong> has been approved. Enjoy
                                    your day off!</p>
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" title=""></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="employee-alert-box">
                        <div class="col-xl-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="icon-thumbs-down"></i>
                                <p>Your loan request <strong><b>hasn't been approved</b></strong> Please reach out to HR for
                                    further assistance.</p>
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" title=""></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-20">


                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card__wrapper">
                        <div class="d-flex align-items-center gap-sm">
                            <div class="card__icon">
                                <span><i class="fa-sharp fa-regular fa-gear"></i></span>
                            </div>
                            <div class="card__title-wrap">
                                <h6 class="card__sub-title mb-10">Task Assigned</h6>
                                <div class="d-flex flex-wrap align-items-end gap-10">
                                    <h4 class="card__title">313</h4>
                                    <span class="card__desc style_two"><span class="price-increase"><i
                                                class="fa-light fa-arrow-up"></i> +5.15%</span> Than Last Month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card__wrapper">
                        <div class="d-flex align-items-center gap-sm">
                            <div class="card__icon">
                                <span><i class="fa-light fa-badge-check"></i></span>
                            </div>
                            <div class="card__title-wrap">
                                <h6 class="card__sub-title mb-10">Available Leaves</h6>
                                <div class="d-flex flex-wrap align-items-end gap-10">
                                    <h3 class="card__title">150</h3>
                                    <span class="card__desc style_two"><span class="price-decrease"><i
                                                class="fa-light fa-arrow-down"></i> +5.5%</span> Than Last Month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-12 col-lg-12">
                    <div class="card__thumb employee-bg d-flex align-items-center mb-20" data-background="assets/images/bg/personal.png">
                        <div class="card__thumb-content">
                            <span class="card__thumb-subtitle">Welcome Back</span>
                            <h1 class="card__thumb-title mb-20">Thomas<span class="text-warning"> Edison</span></h1>
                            <div class="card__thumb-btn">
                                <a class="btn btn-white rounded-pill" href="#">Explore Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="card__wrapper">
                        <div class="card__title-wrap d-flex align-items-center justify-content-between mb-20">
                            <h5 class="card__heading-title">Mark Attendance</h5>
                            <div class="card__dropdown">
                                <div class="dropdown">
                                    <button>
                                        <i class="fa-regular fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-list">
                                        <a class="dropdown__item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown__item" href="javascript:void(0)">More Action</a>
                                        <a class="dropdown__item" href="javascript:void(0)">Another Action</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted">Office Time: 09:00AM to 06:00PM</p>
                        <div class="d-flex align-items-center gap-15">
                            <div class="">
                                <form action="#">
                                    <button type="submit" value="0" name="in" id="clock_in" class="btn btn-primary">Clock
                                        In</button>
                                </form>
                            </div>
                            <div class="">
                                <button type="submit" id="clock_out" class="btn btn-danger">Clock Out</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card__wrapper mb-20">
                        <div class="card__title-wrap d-flex align-items-center justify-content-between mb-20">
                            <h5 class="card__heading-title">Attendance & Leaves</h5>
                            <div class="card__dropdown">
                                <div class="from__input-box">
                                    <select class="js-example-basic-single">
                                        <option value="opt1">2024</option>
                                        <option value="opt2">2024</option>
                                        <option value="opt3">2022</option>
                                        <option value="opt4">2021</option>
                                        <option value="opt5">2020</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="attendance__list">
                            <div class="row g-20">
                                <div class="col-md-4 col-6">
                                    <div class="attendance__details mb-10">
                                        <h4 class="text-primary">10</h4>
                                        <p>Total Leaves</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="attendance__details mb-10">
                                        <h4 class="text-secondary">6.5</h4>
                                        <p>Leaves Taken</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="attendance__details mb-10">
                                        <h4 class="text-success">06</h4>
                                        <p>Leaves Absent</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="attendance__details mb-10">
                                        <h4 class="text-link">1</h4>
                                        <p>Pending Approval</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="attendance__details mb-10">
                                        <h4 class="text-info">315</h4>
                                        <p>Working Days</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="attendance__details mb-10">
                                        <h4 class="text-danger">3</h4>
                                        <p>Loss of Pay</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="attendance-btn">
                            <a class="btn btn-primary" href="leaves-employee.html">
                                Apply Leave</a>
                        </div>
                    </div>

                </div>


                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-12">
                    <div class="card__wrapper">
                        <div class="card__title-wrap d-flex align-items-center justify-content-between mb-20">
                            <h5 class="card__heading-title">Recent Activity</h5>
                            <div class="card__dropdown">
                                <div class="dropdown">
                                    <button>
                                        <i class="fa-regular fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-list">
                                        <a class="dropdown__item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown__item" href="javascript:void(0)">More Action</a>
                                        <a class="dropdown__item" href="javascript:void(0)">Another Action</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="scroll-h-5 card__scroll">
                            <div class="card__inner">
                                <ul class="timeline">
                                    <li class="timeline__item d-flex gap-10">
                                        <div class="timeline__icon"><span><i class="fa-light fa-box"></i></span></div>
                                        <div class="timeline__content w-100">
                                            <div class="d-flex flex-wrap gap-10 align-items-center justify-content-between">
                                                <h5 class="small">Purchased from MediaTek</h5>
                                                <span class="bd-badge bg-success">04 Mins Ago</span>
                                            </div>
                                            <p>Successfully integrated new HRM features into the system</p>
                                            <div class="timeline__thumb">
                                                <img src="assets/images/product/item1.png" alt="image">
                                                <img src="assets/images/product/item2.png" alt="image">
                                                <img src="assets/images/product/item3.png" alt="image">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline__item d-flex gap-10">
                                        <div class="timeline__icon"><span><i class="fa-light fa-box"></i></span></div>
                                        <div class="timeline__content w-100">
                                            <div class="d-flex flex-wrap gap-10 align-items-center justify-content-between">
                                                <h5 class="small">CRM Notification</h5>
                                                <span class="bd-badge bg-success">10 Mins Ago</span>
                                            </div>
                                            <p><span class="text-danger text-decoration-underline">3 days left</span> to update
                                                customer profiles with the new CRM tools</p>
                                        </div>
                                    </li>
                                    <li class="timeline__item d-flex gap-10">
                                        <div class="timeline__icon"><span><i class="fa-light fa-box"></i></span></div>
                                        <div class="timeline__content w-100">
                                            <div class="d-flex flex-wrap gap-10 align-items-center justify-content-between">
                                                <h5 class="small">Purchased from MediaTek</h5>
                                                <span class="bd-badge bg-success">30 Mins Ago</span>
                                            </div>
                                            <p>Team collaboration improved with new HRM tools</p>
                                            <div class="avatar">
                                                <ul>
                                                    <li class="d-inline-block"><img class="img-48 border-circle" src="assets/images/avatar/avatar1.png" alt="image"></li>
                                                    <li class="d-inline-block"><img class="img-48 border-circle" src="assets/images/avatar/avatar2.png" alt="image"></li>
                                                    <li class="d-inline-block"><img class="img-48 border-circle" src="assets/images/avatar/avatar3.png" alt="image"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline__item d-flex gap-10">
                                        <div class="timeline__icon"><span><i class="fa-light fa-box"></i></span></div>
                                        <div class="timeline__content w-100">
                                            <div class="d-flex flex-wrap gap-10 align-items-center justify-content-between">
                                                <h5 class="small">CRM Update</h5>
                                                <span class="bd-badge bg-success">45 Mins Ago</span>
                                            </div>
                                            <p class="mb-10"><span class="text-danger text-decoration-underline">2 days
                                                    left</span> to complete CRM training sessions</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        <!-- App side area end -->