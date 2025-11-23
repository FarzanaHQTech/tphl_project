<?php
    $page_title = "Create Customer";
    $page = 'Add Customer';
    $show_breadcrumb = true;
    $content='
 

           
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12">

                        <div class="card__title-wrap mb-20">
                            <h5 class="card__heading-title">Add New Customer</h5>
                        </div>

                        <form action="#" method="POST">
                            <div class="card__wrapper mb-20">
                                <div class="row g-20 align-items-center justify-content-center">

                                    <!-- First Name -->
                                    <div class="col-lg-6 mb-3">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="firstname">First Name <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="firstname" id="firstname" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Last Name -->
                                    <div class="col-lg-6 mb-3">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="lastname">Last Name</label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="lastname" id="lastname" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Contact Number -->
                                    <div class="col-lg-6 mb-3">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="contactNumber">Contact Number <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="contactNumber" id="contactNumber" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-lg-6 mb-3">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="email">Email <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="email" id="email" type="email">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Username -->
                                    <div class="col-lg-6 mb-3">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="userName">User Name <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="userName" id="userName" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Client ID -->
                                    <div class="col-lg-6 mb-3">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="clientId2">Client ID <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="clientId2" id="clientId2" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-lg-12 mb-3">
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
    
    
';
include "../layouts/master.php";
?>