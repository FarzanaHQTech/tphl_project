<?php
$page_title = "Attendance Create";
$page = "Add Attendance";
$show_breadcrumb = true;

?>

<form action="#" method="POST">
    <div class="row">

        <div class="col-xxl-12">
            <div class="row gy-10">

                <div class="col-xl-12">
                    <div class="card__wrapper">

                        <div class="row gy-20">

                            <!-- Employee -->
                            <div class="col-lg-6 col-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="employee">Employee <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <select class="form-control" name="employee" id="employee">
                                            <option value="">Select Employee</option>
                                            <option value="1">Shahin</option>
                                            <option value="2">Rahim</option>
                                            <option value="3">Karim</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Punch -->
                            <div class="col-lg-6 col-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="punch">Punch Type <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <select class="form-control" name="punch" id="punch">
                                            <option value="">Select Type</option>
                                            <option value="in">Punch In</option>
                                            <option value="out">Punch Out</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Date -->
                            <div class="col-lg-6 col-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="date">Date <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="date" id="date" type="date">
                                    </div>
                                </div>
                            </div>

                            <!-- Punched At -->
                            <div class="col-lg-6 col-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="punched_at">Punched At <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="punched_at" id="punched_at" type="time">
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="submit__btn text-center mb-20">
                                <button class="btn btn-primary">Add Attendance</button>
                            </div>

                        </div> <!-- row end -->

                    </div>
                </div>
            </div>
        </div>

    </div>
</form>

