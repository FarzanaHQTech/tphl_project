<?php
$page_title = "Create Order ";
$page = 'Add Order';
$show_breadcrumb = true;

?>
<form action="#">
    <div class="row">
        <div class="col-xxl-12">
            <div class="card__wrapper">
                <div class="row gy-20">

                    <!-- User -->
                    <div class="col-6 col-lg-6">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="user">User <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <select class="form-control" name="user" id="user">
                                    <option value="user1">User-1</option>
                                    <option value="user2">User-2</option>
                                    <option value="user3">User-3</option>
                                    <option value="user4">User-4</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Project -->
                    <div class="col-6 col-lg-6">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="project">Project <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <select class="form-control" name="project" id="project">
                                    <option value="project1">Project-1</option>
                                    <option value="project2">Project-2</option>
                                    <option value="project3">Project-3</option>
                                    <option value="project4">Project-4</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="col-6 col-lg-6">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="product">Product <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <select class="form-control" name="product" id="product">
                                    <option value="product1">Product-1</option>
                                    <option value="product2">Product-2</option>
                                    <option value="product3">Product-3</option>
                                    <option value="product4">Product-4</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Amount -->
                    <div class="col-6 col-lg-6">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="amount">Amount <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <input class="form-control" name="amount" id="amount" type="number">
                            </div>
                        </div>
                    </div>

                    <!-- Description (Full width) -->
                    <div class="col-12">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label>Description <span>*</span></label>
                            </div>
                            <textarea id="tinymce_simple_textarea"></textarea>
                        </div>
                    </div>

                    <!-- Payment Date -->
                    <div class="col-6 col-lg-6">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="issueDate">Payment Date <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <input class="form-control" id="issueDate" type="text" placeholder="Required Date">
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="col-6 col-lg-6">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="paymentMethod">Payment Method <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <select class="form-control" name="paymentMethod" id="paymentMethod">
                                    <option value="cash">Cash</option>
                                    <option value="creditcard">Credit Card</option>
                                    <option value="paypal">PayPal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Transaction id -->
                    <div class="col-12 col-lg-12 ">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="paymentMethod">Transaction ID<span>*</span></label>
                            </div>
                        </div>

                        <div class="form_input">
                            <input class="form-control" name="transactionId" id="transactionId">
                        </div>


                    </div>
                </div>

                <!-- pdf upload -->
                <div class="col-xxl-12  col-12">
                    <div class="from__input-box">
                        <div class="form__input-title">
                            <label>PDF Image<span>*</span></label>
                        </div>
                    </div>

                    <div class="dropzone dz-clickable" id="myNewDropzone">
                        <div class="dz-default dz-message"><i class="fa-thin fa-cloud-arrow-up"></i>
                            <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo
                                dropzone. Selected files are
                                not actually uploaded.)</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>




    <div class="submit__btn text-center mb-20">
        <button class="btn btn-primary">Add Requisition</button>
    </div>
</form>