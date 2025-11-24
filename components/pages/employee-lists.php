<?php
$page_title = "employees lists ";
$page = 'Employee Lists';
$show_breadcrumb = true;
$content = '

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
                                    <option value="TD">Technology Department</option>
                                    <option value="SD">Security Department</option>
                                    <option value="NPD">Network Operations Department</option>
                                    <option value="SAD">Systems Administration Department</option>
                                    <option value="DMD">Database Management Department</option>
                                    <option value="SDD">Software Development Department</option>
                                    <option value="WDD">Web Development Department</option>
                                    <option value="PMO">Project Management Office</option>
                                    <option value="ITSP">IT Support Department</option>
                                    <option value="CD">Consulting Department</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-5 col-lg-4 col-md-4">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center justify-content-between gap-15">
                                <button type="button" class="btn btn-secondary">Filters</button>
                                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addNewEmployee">
                                    Add Employee</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                        <div class="card__wrapper">
                            <div class="employee__wrapper text-center">
                                <div class="employee__thumb mb-15">
                                    <a href="employee-profile.php"><img src="../../assets/images/avatar/avatar16.png" alt="image"></a>
                                </div>
                                <div class="employee__content">
                                    <div class="employee__meta mb-15">
                                        <h4 class="mb-8"><a href="employee-profile.php">Naira Muskan</a></h4>
                                        <p>Chief Executive Officer</p>
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
                                            <a class="btn btn-outline-theme-border" href="employee-profile.php">View</a>
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
                                    <a href="employee-profile.php"><img src="../../assets/images/avatar/avatar2.png" alt="image"></a>
                                </div>
                                <div class="employee__content">
                                    <div class="employee__meta mb-15">
                                        <h4 class="mb-8"><a href="employee-profile.php">Emily Johnson</a></h4>
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
                                            <a class="btn btn-outline-theme-border" href="employee-profile.php">View</a>
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
                                    <a href="employee-profile.php"><img src="../../assets/images/avatar/avatar4.png" alt="image"></a>
                                </div>
                                <div class="employee__content">
                                    <div class="employee__meta mb-15">
                                        <h4 class="mb-8"><a href="employee-profile.php">Jessica Miller</a></h4>
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
                                            <a class="btn btn-outline-theme-border" href="employee-profile.php">View</a>
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
                                    <a href="employee-profile.php"><img src="../../assets/images/avatar/avatar10.png" alt="image"></a>
                                </div>
                                <div class="employee__content">
                                    <div class="employee__meta mb-15">
                                        <h4 class="mb-8"><a href="employee-profile.php">Jennifer Brown</a></h4>
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
                                            <a class="btn btn-outline-theme-border" href="employee-profile.php">View</a>
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
                                    <a href="employee-profile.php"><img src="../../assets/images/avatar/avatar13.png" alt="image"></a>
                                </div>
                                <div class="employee__content">
                                    <div class="employee__meta mb-15">
                                        <h4 class="mb-8"><a href="employee-profile.php">Sarah Martinez</a></h4>
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
                                            <a class="btn btn-outline-theme-border" href="employee-profile.php">View</a>
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
                                    <a href="employee-profile.php"><img src="../../assets/images/avatar/avatar15.png" alt="image"></a>
                                </div>
                                <div class="employee__content">
                                    <div class="employee__meta mb-15">
                                        <h4 class="mb-8"><a href="employee-profile.php">Amanda Taylor</a></h4>
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
                                            <a class="btn btn-outline-theme-border" href="employee-profile.php">View</a>
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
                                    <a href="employee-profile.php"><img src="../../assets/images/avatar/avatar.png" alt="image"></a>
                                </div>
                                <div class="employee__content">
                                    <div class="employee__meta mb-15">
                                        <h4 class="mb-8"><a href="employee-profile.php">Christopher Wilson</a></h4>
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
                                            <a class="btn btn-outline-theme-border" href="employee-profile.php">View</a>
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
                                    <a href="employee-profile.php"><img src="../../assets/images/avatar/avatar12.png" alt="image"></a>
                                </div>
                                <div class="employee__content">
                                    <div class="employee__meta mb-15">
                                        <h4 class="mb-8"><a href="employee-profile.php">Matthew Clark</a></h4>
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
                                            <a class="btn btn-outline-theme-border" href="employee-profile.php">View</a>
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



                    <!-- New Employee Modal -->
    <div class="modal fade" id="addNewEmployee" tabindex="-1" aria-labelledby="addNewEmployeeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewEmployeeLabel">Add New Employee</h5>
                    <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                  class="fa-solid fa-xmark-large"></i></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="card__wrapper mb-20">
                            <div class="row g-20 gy-20 align-items-center justify-content-center">
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="firstname">First Name <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="firstname" id="firstname" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="lastname">Last Name</label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="lastname" id="lastname" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="contactnumber">Contact Number <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="contactnumber" id="contactnumber" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="email">Email <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="email" id="email" type="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="userName">User Name <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="userName" id="userName" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="employeeId2">Employee ID <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="employeeId2" id="employeeId2" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="address">Address <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <textarea class="form-control" name="address" id="address"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label>Employee Designation <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <select class="form-control">
                                                <option value="ITD">Information Technology Department</option>
                                                <option value="TD">Technology Department</option>
                                                <option value="SD">Security Department</option>
                                                <option value="NPD">Network Operations Department</option>
                                                <option value="SAD">Systems Administration Department</option>
                                                <option value="DMD">Database Management Department</option>
                                                <option value="SDD">Software Development Department</option>
                                                <option value="WDD">Web Development Department</option>
                                                <option value="PMO">Project Management Office</option>
                                                <option value="ITSP">IT Support Department</option>
                                                <option value="CD">Consulting Department</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label class="form-check-label">Joining Date <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" id="joiningDate" type="text" readonly="readonly">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="accountholadeername">Account Holder Name <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="accountholadeername" id="accountholadeername" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="accountnumber">Account Number <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="accountnumber" id="accountnumber" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="bankname">Bank Name <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="bankname" id="bankname" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="branchname">Branch Name <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="branchname" id="branchname" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="sellerphoto">Employee Photo (100px*100px)</label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" id="sellerphoto" type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit__btn text-center">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- New Employee Modal-->
    
';
include "../layouts/master.php";
?>
