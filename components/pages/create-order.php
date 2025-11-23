<?php
$page_title = "Create Order ";
$page = 'Add Order';
$show_breadcrumb = true;
$content = '

    
<form action="#">
    <div class="row">
        <div class="col-xxl-12">
            <div class="row gy-10">
                <div class="col-xl-12">
                    <div class="card__wrapper">
                        <div class="row gy-20">

                        <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="user">User <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <select class="form-control" name="role" id="role">
                                            <option value="user1">User-1</option>
                                            <option value="user2">User-2</option>
                                            <option value="user3">user-3</option>
                                            <option value="user4">user-4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>    


                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="project">Project <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <select class="form-control" name="role" id="role">
                                            <option value="project1">Project-1</option>
                                            <option value="project2">Project-2</option>
                                            <option value="project3">Project-3</option>
                                            <option value="project4">Project-4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="product">product <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <select class="form-control" name="role" id="role">
                                            <option value="product1">product-1</option>
                                            <option value="product2">product-2</option>
                                            <option value="product3">product-3</option>
                                            <option value="product4">product-4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                             <div class="col-6 col-xl-6 col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="amount">Amount <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input  class="form-control" name="amount" id="amount" type="number">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label> Description
                                            <span>*</span></label>
                                    </div>
                                    <div class="from__input-box">
                                        <textarea id="tinymce_simple_textarea"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Payment Date <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" id="requiredDate" type="text" placeholder="Required Date">
                                    </div>
                                </div>
                            </div>



                              <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="payment">Payment Date <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <select class="form-control" name="role" id="role">
                                            <option value="cash">Cash</option>
                                            <option value="credit card">Creadit Card</option>
                                            <option value="paypal">Paypal</option>
                                           
                                        </select>
                                    </div>
                                </div>
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
    
';
include "../layouts/master.php";
?>

