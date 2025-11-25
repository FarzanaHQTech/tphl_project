<?php
$page_title = "Journal Page";
$page = 'Journal Management';
$show_breadcrumb = true;

$content = '
<div class="col-xxl-12">
    <div class="row">
        <div class="col-xxl-6">
            <div class="card__wrapper">
                <div class="from__input-box">
                    <div class="form__input">
                        <input type="text" class="form-control" id="ledgerName" placeholder="Search Ledger Name">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-6">
            <div class="card__wrapper">
                <div class="d-flex align-items-center justify-content-between gap-15">
                    <button class="btn btn-secondary w-100">Search</button>
                    <a href="create-ledger.php" class="btn btn-primary w-100">Add Ledger</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ledger List Table -->
<div class="row">
    <div class="col-xxl-12">
        <div class="card__wrapper">
            <div class="card__title-wrap mb-20">
                <h3 class="card__heading-title">Ledger List</h3>
            </div>

            <table class="table table-border table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ledger Name</th>
                        <th>Type</th>
                        <th>Opening Balance</th>
                        <th>Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Cash Account</td>
                        <td><span class="bd-badge bg-secondary">Asset</span></td>
                        <td>$5,000</td>
                        <td><span class="bd-badge bg-success">Active</span></td>
                        <td class="table_icon-box">
                            <div class="d-flex align-items-center justify-content-center gap-10">
                                <a class="table_icon download">
                                    <i class="fa-regular fa-arrow-down-to-bracket"></i>
                                </a>
                                <a href="edit-ledger.php" class="table__icon edit">
                                    <i class="fa-sharp fa-light fa-pen"></i>
                                </a>
                                <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#ledgerDetails">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Sales Account</td>
                        <td><span class="bd-badge bg-warning">Income</span></td>
                        <td>$0</td>
                        <td><span class="bd-badge bg-success">Active</span></td>
                        <td class="table_icon-box">
                            <div class="d-flex align-items-center justify-content-center gap-10">
                                <a class="table_icon download">
                                    <i class="fa-regular fa-arrow-down-to-bracket"></i>
                                </a>
                                <a href="edit-ledger.php" class="table__icon edit">
                                    <i class="fa-sharp fa-light fa-pen"></i>
                                </a>
                                <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#ledgerDetails">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>


';

include "../layouts/master.php";
?>