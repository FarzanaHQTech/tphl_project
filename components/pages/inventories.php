<?php
$page_title = "Inventories Page";
$page = 'Inventories';
$show_breadcrumb = true;

?>

<div class="col-xxl-12">

    <div class="row">
        <div class="col-xxl-12">
            <div class="card__wrapper">
                <div class="card__title-wrap mb-20">
                    <h3 class="card__heading-title">Inventories</h3>
                </div>
                <div class="card__table table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Item Name</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total Value</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table__body">

                            <tr>
                                <td class="table_cat">1</td>
                                <td class="table_cat">Camera A</td>
                                <td class="table_cat">Electronics</td>
                                <td class="table_cat">05</td>
                                <td class="table_cat">$120</td>
                                <td class="table_cat"> $600</td>
                                <td class="table_cat"><span class="bd-badge bg-primary">Available</span></td>
                                <td class="table__icon-box">
                                    <div class="d-flex align-items-center justify-content-center gap-10">

                                        <a href="#" class="table__icon edit">
                                            <i class="fa-sharp fa-light fa-pen"></i>
                                        </a>

                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="table_cat">2</td>
                                <td class="table_cat">Tripod Stand</td>
                                <td class="table_cat">Accessories</td>
                                <td class="table_cat">10</td>
                                <td class="table_cat">$40</td>
                                <td class="table_cat">$400</td>
                                <td class="table_cat"><span class="bd-badge bg-danger">Low Stock</span></td>
                                <td class="table__icon-box">
                                    <div class="d-flex align-items-center justify-content-center gap-10">

                                        <a href="index.php?page=edit-requisition.php" class="table__icon edit">
                                            <i class="fa-sharp fa-light fa-pen"></i>
                                        </a>

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