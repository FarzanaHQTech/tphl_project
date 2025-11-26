<?php
$page_title = "Create User";
$page = 'Add User';
$show_breadcrumb = true;

?>


<div class="row">
    <div class="col-xxl-12 col-xl-12 col-lg-12">

        <div class="card__title-wrap mb-20">
            <h5 class="card__heading-title">Add New User</h5>
        </div>

        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="card__wrapper mb-20">
                <div class="row g-20 align-items-center justify-content-center">

                    <!-- Full Name -->
                    <div class="col-lg-6 mb-3">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="fullName">Full Name <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <input class="form-control" name="fullName" id="fullName" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Contact Number -->
                    <div class="col-lg-6 mb-3">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="contactnumber">Contact Number <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <input class="form-control" name="contactnumber" id="contactnumber"
                                    type="text">
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

                    <div class="col-lg-6 mb-3">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="designation">Designation <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <input class="form-control" name="designation" id="designation"
                                    type="text">
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


                    <!-- NID -->
                    <div class="col-lg-6 mb-3">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="nid">NID Number <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <input class="form-control" name="nid" id="nid" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Role -->
                    <div class="col-lg-6 mb-3">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="role">Role <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <select class="form-control" name="role" id="role">
                                    <option value="admin">Admin</option>
                                    <option value="employee">Employee</option>
                                    <option value="customer">Customer</option>
                                    <option value="vendor">Vendor</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="col-lg-6 mb-3">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="password">Password <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <input class="form-control" name="password" id="password"
                                    type="password">
                            </div>
                        </div>
                    </div>

                    <!-- Photo -->
                    <div class="col-lg-6 mb-3">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="userphoto">User Photo (100px × 100px)</label>
                            </div>
                            <div class="form__input">
                                <input class="form-control" name="userphoto" id="userphoto" type="file">
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