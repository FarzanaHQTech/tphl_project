<?php
$page_title = "Auction Page";
$page = 'Auction Management';
$show_breadcrumb = true;

?>
<form action="#">
    <div class="row">
        <div class="col-xxl-12">
            <div class="row gy-10">
                <div class="col-xl-12">
                    <div class="card__wrapper">
                        <div class="row gy-20">

                            <!-- Auction Title -->
                            <div class="col-lg-6 col-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="auction_title">Auction Title <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="auction_title" id="auction_title" type="text">
                                    </div>
                                </div>
                            </div>

                            <!-- Auction Category -->
                            <div class="col-lg-6 col-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="auction_category">Category <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <select class="form-control" id="auction_category" name="auction_category">
                                            <option value="electronics">Electronics</option>
                                            <option value="vehicles">Vehicles</option>
                                            <option value="real_estate">Real Estate</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Starting Price -->
                            <div class="col-lg-6 col-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="starting_price">Starting Price <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="starting_price" id="starting_price" type="number">
                                    </div>
                                </div>
                            </div>

                            <!-- End Date -->
                            <div class="col-lg-6 col-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="end_date">End Date <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="end_date" id="end_date" type="date">
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="submit__btn text-center mb-20">
                                <button class="btn btn-primary">Create Auction</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Inventory / Auction Items Table -->
                <div class="col-xl-12 mt-20">
                    <div class="card__wrapper p-20">
                        <h4 class="mb-20">Auction Inventory</h4>

                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Item Name</th>
                                    <th>Category</th>
                                    <th>Starting Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>101</td>
                                    <td>iPhone 14 Pro</td>
                                    <td>Electronics</td>
                                    <td>$200</td>
                                    <td><span class="bd-badge bg-success">Active</span></td>
                                      <td class="table_icon-box">
                                        <div class="d-flex align-items-center justify-content-center gap-10">
                                            <a class="table_icon download ">
                                                <i class="fa-regular fa-arrow-down-to-bracket"></i>
                                            </a>
                                             <a href="index.php?page=edit-requisition" class="table__icon edit">
                                                <i class="fa-sharp fa-light fa-pen"></i>
                                            </a>
                                                <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#leadDetails"><i
                                                            class="fa-regular fa-eye"></i></button>
                                            </button>
                                        </div>
                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td>102</td>
                                    <td>Honda Civic 2017</td>
                                    <td>Vehicles</td>
                                    <td>$2500</td>
                                    <td><span class="bd-badge bg-warning">Pending</span></td>
                                     <td class="table_icon-box">
                                        <div class="d-flex align-items-center justify-content-center gap-10">
                                            <a class="table_icon download ">
                                                <i class="fa-regular fa-arrow-down-to-bracket"></i>
                                            </a>
                                             <a href="index.php?page=edit-requisition" class="table__icon edit">
                                                <i class="fa-sharp fa-light fa-pen"></i>
                                            </a>
                                             <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#leadDetails"><i
                                                            class="fa-regular fa-eye"></i></button>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
