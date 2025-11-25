<?php
    $page_title = "customer List";
    $page = "customer ";
    $show_breadcrumb = true;

    $content ='
     <div class="row">
                    <div class="col-xxl-12">
                        <div class="row">
                            <div class="col-xxl-3">
                                <div class="card__wrapper">
                                    <div class="from__input-box">
                                        <div class="form__input">
                                            <input type="text" class="form-control" id="customerName" placeholder="Customer Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3">
                                <div class="card__wrapper">
                                    <div class="from__input-box">
                                        <div class="form__input">
                                            <input type="text" class="form-control" id="customerCompanyName" placeholder="Company Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3">
                                <div class="card__wrapper">
                                    <div class="from__input-box">
                                        <div class="form__input">
                                            <input type="text" class="form-control" id="customerId" placeholder="Customer ID">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3">
                                <div class="card__wrapper">
                                    <div class="d-flex align-items-center justify-content-between gap-15">
                                        <button class="btn btn-secondary w-100">Search</button>
                                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addNewCustomer">Add Customers</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div class="row">
                         
                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                                <div class="card__wrapper">
                                    <div class="client__wrapper text-center">
                                        <div class="client__thumb mb-15">
                                            <a href="customer-details.php"><img src="../../assets/images/avatar/avatar13.png" alt="image"></a>
                                        </div>
                                        <div class="client__content">
                                            <div class="client__meta">
                                                <h4 class="mb-8"><a href="customer-details.php">Sarah Martinez</a></h4>
                                                <span>DataMinds Tech</span>
                                                <p>Software Developer</p>
                                            </div>
                                            <div class="common-social mb-20">
                                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                <a href="#"><i class="fa-thin fa-globe"></i></a>
                                            </div>
                                            <div class="client__btn">
                                                <div class="d-flex align-items-center justify-content-center gap-15">
                                                    <a class="btn btn-outline-theme-border" href="tel:+15551234567">Call</a>
                                                    <button type="button" class="btn btn-outline-theme-border" data-bs-toggle="modal" data-bs-target="#editCustomer">Edit</button>
                                                    <a class="btn btn-outline-theme-border" href="customer-details.php">View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                                <div class="card__wrapper">
                                    <div class="client__wrapper text-center">
                                        <div class="client__thumb mb-15">
                                            <a href="customer-details.php"><img src="../../assets/images/avatar/avatar15.png" alt="image"></a>
                                        </div>
                                        <div class="client__content">
                                            <div class="client__meta">
                                                <h4 class="mb-8"><a href="customer-details.php">Amanda Taylor</a></h4>
                                                <span>CyberTech Solutions</span>
                                                <p>Technical Lead</p>
                                            </div>
                                            <div class="common-social mb-20">
                                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                <a href="#"><i class="fa-thin fa-globe"></i></a>
                                            </div>
                                            <div class="client__btn">
                                                <div class="d-flex align-items-center justify-content-center gap-15">
                                                    <a class="btn btn-outline-theme-border" href="tel:+15551234567">Call</a>
                                                    <button type="button" class="btn btn-outline-theme-border" data-bs-toggle="modal" data-bs-target="#editCustomer">Edit</button>
                                                    <a class="btn btn-outline-theme-border" href="customer-details.php">View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                                <div class="card__wrapper">
                                    <div class="client__wrapper text-center">
                                        <div class="client__thumb mb-15">
                                            <a href="customer-details.php"><img src="../../assets/images/avatar/avatar.png" alt="image"></a>
                                        </div>
                                        <div class="client__content">
                                            <div class="client__meta">
                                                <h4 class="mb-8"><a href="customer-details.php">Christopher Wilson</a>
                                                </h4>
                                                <span>AgileTech Solutions</span>
                                                <p>Chief Architect</p>
                                            </div>
                                            <div class="common-social mb-20">
                                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                <a href="#"><i class="fa-thin fa-globe"></i></a>
                                            </div>
                                            <div class="client__btn">
                                                <div class="d-flex align-items-center justify-content-center gap-15">
                                                    <a class="btn btn-outline-theme-border" href="tel:+15551234567">Call</a>
                                                    <button type="button" class="btn btn-outline-theme-border" data-bs-toggle="modal" data-bs-target="#editCustomer">Edit</button>
                                                    <a class="btn btn-outline-theme-border" href="customer-details.php">View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                                <div class="card__wrapper">
                                    <div class="client__wrapper text-center">
                                        <div class="client__thumb mb-15">
                                            <a href="customer-details.php"><img src="../../assets/images/avatar/avatar12.png" alt="image"></a>
                                        </div>
                                        <div class="client__content">
                                            <div class="client__meta">
                                                <h4 class="mb-8"><a href="customer-details.php">Matthew Clark</a></h4>
                                                <span>InnoTech Solutions</span>
                                                <p>Chief Digital Officer</p>
                                            </div>
                                            <div class="common-social mb-20">
                                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                <a href="#"><i class="fa-thin fa-globe"></i></a>
                                            </div>
                                            <div class="client__btn">
                                                <div class="d-flex align-items-center justify-content-center gap-15">
                                                    <a class="btn btn-outline-theme-border" href="tel:+15551234567">Call</a>
                                                    <button type="button" class="btn btn-outline-theme-border" data-bs-toggle="modal" data-bs-target="#editCustomer">Edit</button>
                                                    <a class="btn btn-outline-theme-border" href="customer-details.php">View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-20 justify-content-center">
                    <div class="col-xl-2">
                        <div class="text-center">
                            <button type="button" class="btn btn-primary">Load More</button>
                        </div>
                    </div>
                </div>
                
 <!-- add new client profile modal -->
    <div class="modal fade" id="addNewCustomer" tabindex="-1" aria-labelledby="addNewCustomerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewCustomerLabel">Add New Customer</h5>
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
                                            <label for="contactNumber">Contact Number <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="contactNumber" id="contactNumber" type="text">
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
                                            <label for="clientId2">Client ID <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="clientId2" id="clientId2" type="text">
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

    // <!-- edit client profile modal -->
    <div class="modal fade" id="editCustomer" tabindex="-1" aria-labelledby="editCustomerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCustomerLabel">Edit  Customer</h5>
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
                                            <label for="firstName2">First Name <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="firstName2" id="firstName2" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="lastName2">Last Name</label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="lastName2" id="lastName2" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="contactNumber2">Contact Number <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="contactNumber2" id="contactNumber2" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="email2">Email <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="email2" id="email2" type="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="userName2">User Name <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="userName2" id="userName2" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="clientId3">Client ID <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="clientId3" id="clientId3" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="address2">Address <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <textarea class="form-control" name="address2" id="address2"></textarea>
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

    ';
include '../layouts/master.php'

?>