<?php
$page_title = "User List";  
$page= 'user-lists';
$show_breadcrumb = false;
?>

<div class="row g-20 mb-20 justify-content-between align-items-end">
    <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-4">
        <div class="card__wrapper">
            <div class="search-box">
                <input type="text" class="form-control" id="employeeName" placeholder="User Name">
            </div>
        </div>
    </div>

    <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-4">
        <div class="card__wrapper">
            <div class="from__input-box">
                <select class="js-example-basic-single">
                    <option value="admin">Admin</option>
                    <option value="employee">Employee</option>
                    <option value="customer">Customer</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-4">
        <div class="card__wrapper">
            <div class="d-flex align-items-center justify-content-between gap-15">
                <button type="button" class="btn btn-secondary">Filters</button>
                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                    data-bs-target="#addNewEmployee">
                    Add Users</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
        <div class="card__wrapper">
            <div class="employee__wrapper text-center">
                <div class="employee__thumb mb-15">
                    <a href="?page=user-profile"><img src="assets/images/avatar/avatar16.png"
                            alt="image"></a>
                </div>
                <div class="employee__content">
                    <div class="employee__meta mb-15">
                        <h4 class="mb-8"><a href="?page=user-profile">Naira Muskan</a></h4>
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
                            <a class="btn btn-outline-theme-border"
                                href="?page=user-profile">View</a>
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
                    <a href="?page=user-profile"><img src="assets/images/avatar/avatar2.png"
                            alt="image"></a>
                </div>
                <div class="employee__content">
                    <div class="employee__meta mb-15">
                        <h4 class="mb-8"><a href="?page=user-profile">Emily Johnson</a></h4>
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
                            <a class="btn btn-outline-theme-border"
                                href="?page=user-profile">View</a>
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



<div class="modal fade" id="addLocation" tabindex="-1" aria-labelledby="addLocationLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addLocationLabel">Edit Customer</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
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
                                                        <label for="name">Location Title<span>*</span></label>
                                                    </div>
                                                    <div class="form__input">
                                                        <input class="form-control" name="name" id="name" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit__btn text-center mb-20">
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>