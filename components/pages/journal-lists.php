<?php
$page_title = "Journal Page";
$page = 'Journal Management';
$show_breadcrumb = true;

?>
<div class="col-xxl-12">
    <div class="row">
        <div class="col-xxl-6">
            <div class="card__wrapper">
                <div class="from__input-box">
                    <div class="form__input">
                        <input type="text" class="form-control" id="accountsName" placeholder="Accounts Item Name">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-6">
            <div class="card__wrapper">
                <div class="d-flex align-items-center justify-content-between gap-15">
                    <button class="btn btn-secondary w-100">Search</button>
                    <a href="#" class="btn btn-primary w-100">Add Accounts</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xxl-12">
        <div class="card__wrapper">
            <div class="card__title-wrap mb-20">
                <h3 class="card__heading-title">Jounal List</h3>
            </div>
            <table class="table table-border table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Amount</th>
                        <th>Description</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2025-01-20</td>
                        <td>Cash</td>
                        <td><span class="badge bg-success">Debit</span></td>
                        <td>$500</td>
                        <td>Office supplies</td>
                        <td class="table_icon-box">
                            <div class="d-flex align-items-center justify-content-center gap-10">
                                <a class="table_icon download ">
                                    <i class="fa-regular fa-arrow-down-to-bracket"></i>
                                </a>
                                <a href="index.php?page=edit-requisition.php" class="table__icon edit">
                                    <i class="fa-sharp fa-light fa-pen"></i>
                                </a>
                                <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#leadDetails"><i
                                        class="fa-regular fa-eye"></i></button>
                            </div>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>