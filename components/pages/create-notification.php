<?php
$page_title = "Create notification ";
$page = 'Add Notification ';
$show_breadcrumb = true;

?>
<form action="#">
    <div class="row">

        <div class="col-xxl-12">
            <div class="row gy-10">
                <div class="col-xl-12">
                    <div class="card__wrapper">
                        <div class="row gy-20">

                            <div class="col-6 col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="paymentMethod">Payment Method <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <select class="form-control" name="paymentMethod" id="paymentMethod">
                                            <option value="project1">project1</option>
                                            <option value="project2">project2</option>
                                            <option value="project2">project3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 col-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="title">Title<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="title" id="title" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="message">Message<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <textarea class="form-control" name="message" id="message" type="text"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="paymentMethod">Entity Type<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <select class="form-control" name="paymentMethod" id="paymentMethod">
                                            <option value="Project">Project</option>
                                            <option value="user">user</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="submit__btn text-center mb-20">
                                <button class="btn btn-primary">Add Notification</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</form>