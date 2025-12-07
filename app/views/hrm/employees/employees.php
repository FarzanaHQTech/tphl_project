<?php
$page_title = "employees lists ";
$page = 'Employee Lists';
$show_breadcrumb = true;

?>
<div class="row g-20 mb-20 justify-content-between align-items-end">
    <div class="col-xxl-3 col-xl-5 col-lg-4 col-md-4">
        <div class="card__wrapper">
            <div class="search-box">
                <input type="text" class="form-control" id="employeeName" placeholder="Employee Name">
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-5 col-lg-4 col-md-4">
        <div class="card__wrapper">
            <div class="search-box">
                <input type="text" class="form-control" id="employeeId" placeholder="Employee ID">
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-5 col-lg-4 col-md-4">
        <div class="card__wrapper">
            <div class="from__input-box">
                <select class="js-example-basic-single">
                    <option value="">Employee Designation</option>
                    <option value="ITD">Information Technology Department</option>
                  
                </select>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-5 col-lg-4 col-md-4">
        <div class="card__wrapper">
            <div class="d-flex align-items-center justify-content-between gap-15">
                <button type="button" class="btn btn-secondary">Filters</button>
                <a type="button" class="btn btn-primary w-100" href="<?= $GLOBALS['base_url'] ?>/create-employee">
                    Add Employee</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
        <div class="card__wrapper">
            <div class="employee__wrapper text-center">
                <div class="employee__thumb mb-15">
                    <a href="index.php?page=employee-profile"><img src="assets/images/avatar/avatar16.png" alt="image"></a>
                </div>
                <div class="employee__content">
                    <div class="employee__meta mb-15">
                        <h4 class="mb-8"><a href="index.php?page=employee-profile">Naira Muskan</a></h4>
                        <p>Chief Executive Officer</p>
                    </div>
                    <div class="common-social mb-20">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                      
                    </div>
                    <div class="employee__btn">
                        <div class="d-flex align-items-center justify-content-center gap-15">
                            <a class="btn btn-outline-theme-border" href="tel:+15551234567">Call</a>
                            <a class="btn btn-outline-theme-border" href="index.php?page=employee-profile">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
        <div class="card__wrapper">
            <div class="employee__wrapper text-center">
                <div class="employee__thumb mb-15">
                    <a href="index.php?page=employee-profile"><img src="assets/images/avatar/avatar2.png" alt="image"></a>
                </div>
                <div class="employee__content">
                    <div class="employee__meta mb-15">
                        <h4 class="mb-8"><a href="index.php?page=employee-profile">Emily Johnson</a></h4>
                        <p>Chief Innovation Officer</p>
                    </div>
                    <div class="common-social mb-20">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-thin fa-globe"></i></a>
                    </div>
                    <div class="employee__btn">
                        <div class="d-flex align-items-center justify-content-center gap-15">
                            <a class="btn btn-outline-theme-border" href="tel:+15551234567">Call</a>
                            <a class="btn btn-outline-theme-border" href="index.php?page=employee-profile">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
        <div class="card__wrapper">
            <div class="employee__wrapper text-center">
                <div class="employee__thumb mb-15">
                    <a href="index.php?page=employee-profile"><img src="assets/images/avatar/avatar4.png" alt="image"></a>
                </div>
                <div class="employee__content">
                    <div class="employee__meta mb-15">
                        <h4 class="mb-8"><a href="index.php?page=employee-profile">Jessica Miller</a></h4>
                        <p>Product Manager</p>
                    </div>
                    <div class="common-social mb-20">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-thin fa-globe"></i></a>
                    </div>
                    <div class="employee__btn">
                        <div class="d-flex align-items-center justify-content-center gap-15">
                            <a class="btn btn-outline-theme-border" href="tel:+15551234567">Call</a>
                            <a class="btn btn-outline-theme-border" href="index.php?page=employee-profile">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
        <div class="card__wrapper">
            <div class="employee__wrapper text-center">
                <div class="employee__thumb mb-15">
                    <a href="index.php?page=employee-profile"><img src="assets/images/avatar/avatar10.png" alt="image"></a>
                </div>
                <div class="employee__content">
                    <div class="employee__meta mb-15">
                        <h4 class="mb-8"><a href="index.php?page=employee-profile">Jennifer Brown</a></h4>
                        <p>Engineering Project Manager</p>
                    </div>
                    <div class="common-social mb-20">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-thin fa-globe"></i></a>
                    </div>
                    <div class="employee__btn">
                        <div class="d-flex align-items-center justify-content-center gap-15">
                            <a class="btn btn-outline-theme-border" href="tel:+15551234567">Call</a>
                            <a class="btn btn-outline-theme-border" href="index.php?page=employee-profile">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
        <div class="card__wrapper">
            <div class="employee__wrapper text-center">
                <div class="employee__thumb mb-15">
                    <a href="index.php?page=employee-profile"><img src="assets/images/avatar/avatar13.png" alt="image"></a>
                </div>
                <div class="employee__content">
                    <div class="employee__meta mb-15">
                        <h4 class="mb-8"><a href="index.php?page=employee-profile">Sarah Martinez</a></h4>
                        <p>Software Developer</p>
                    </div>
                    <div class="common-social mb-20">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-thin fa-globe"></i></a>
                    </div>
                    <div class="employee__btn">
                        <div class="d-flex align-items-center justify-content-center gap-15">
                            <a class="btn btn-outline-theme-border" href="tel:+15551234567">Call</a>
                            <a class="btn btn-outline-theme-border" href="index.php?page=employee-profile">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
        <div class="card__wrapper">
            <div class="employee__wrapper text-center">
                <div class="employee__thumb mb-15">
                    <a href="index.php?page=employee-profile"><img src="assets/images/avatar/avatar15.png" alt="image"></a>
                </div>
                <div class="employee__content">
                    <div class="employee__meta mb-15">
                        <h4 class="mb-8"><a href="index.php?page=employee-profile">Amanda Taylor</a></h4>
                        <p>Technical Lead</p>
                    </div>
                    <div class="common-social mb-20">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-thin fa-globe"></i></a>
                    </div>
                    <div class="employee__btn">
                        <div class="d-flex align-items-center justify-content-center gap-15">
                            <a class="btn btn-outline-theme-border" href="tel:+15551234567">Call</a>
                            <a class="btn btn-outline-theme-border" href="index.php?page=employee-profile">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
        <div class="card__wrapper">
            <div class="employee__wrapper text-center">
                <div class="employee__thumb mb-15">
                    <a href="index.php?page=employee-profile"><img src="assets/images/avatar/avatar.png" alt="image"></a>
                </div>
                <div class="employee__content">
                    <div class="employee__meta mb-15">
                        <h4 class="mb-8"><a href="index.php?page=employee-profile">Christopher Wilson</a></h4>
                        <p>Chief Architect</p>
                    </div>
                    <div class="common-social mb-20">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-thin fa-globe"></i></a>
                    </div>
                    <div class="employee__btn">
                        <div class="d-flex align-items-center justify-content-center gap-15">
                            <a class="btn btn-outline-theme-border" href="tel:+15551234567">Call</a>
                            <a class="btn btn-outline-theme-border" href="index.php?page=employee-profile">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
        <div class="card__wrapper">
            <div class="employee__wrapper text-center">
                <div class="employee__thumb mb-15">
                    <a href="index.php?page=employee-profile"><img src="assets/images/avatar/avatar12.png" alt="image"></a>
                </div>
                <div class="employee__content">
                    <div class="employee__meta mb-15">
                        <h4 class="mb-8"><a href="index.php?page=employee-profile">Matthew Clark</a></h4>
                        <p>Chief Digital Officer</p>
                    </div>
                    <div class="common-social mb-20">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-thin fa-globe"></i></a>
                    </div>
                    <div class="employee__btn">
                        <div class="d-flex align-items-center justify-content-center gap-15">
                            <a class="btn btn-outline-theme-border" href="tel:+15551234567">Call</a>
                            <a class="btn btn-outline-theme-border" href="index.php?page=employee-profile">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-20 mb-20">
        <button type="button" class="btn btn-primary">Load More</button>
    </div>
</div>


