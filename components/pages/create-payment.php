<?php
$page_title = "Create payment ";
$page = 'Add payment';
$show_breadcrumb = true;

?>
<form action="#">
    <div class="row">
        <div class="col-xxl-12">
            <div class="card__wrapper">
                <div class="row gy-20">


                    <!-- product -->
                    <div class="col-6 col-lg-6">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="product">product <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <select class="form-control" name="product" id="product">
                                    <option value="product1">product-1</option>
                                    <option value="product2">product-2</option>
                                    <option value="product3">product-3</option>
                                    <option value="product4">product-4</option>
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

                    <!-- Payment by -->
                    <div class="col-6 col-lg-6">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="paymentBy">payment By <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <select class="form-control" name="product" id="product">
                                    <option value="user1">user-1</option>
                                    <option value="user2">user-2</option>
                                    <option value="user3">user-3</option>
                                    <option value="user4">user-4</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Transaction ID -->
                    <div class="col-6 col-lg-6">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="transactionID">Transaction ID <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <input class="form-control" name="transactionID" id="transactionID" type="number">
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
                    <!-- Payment Method -->
                    <div class="col-6 col-lg-6">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="paymentType">Payment Type <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <select class="form-control" name="paymentType" id="paymentType">
                                    <option value="BookingMoney">Booking Money</option>
                                    <option value="landRegistrasion">Land Registration</option>
                                    <option value="serviceCharge">service Charge</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Entity Type -->
                    <div class="col-6 col-lg-6">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="entityType">Entity Type <span>*</span></label>
                            </div>
                            <div class="form__input">
                                <select class="form-control" name="entityType" id="entityType">
                                    <option value="BookingMoney">Product</option>


                                </select>
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
        <button class="btn btn-primary">Add Payment</button>
    </div>
</form>