<?php
$page_title = "Additional Salary";
$page = 'Additional Salary';
$show_breadcrumb = true;


// include "../layouts/master.php";
?>

<div class="col-xxl-12">
    <div class="row">
        <!-- Search Input -->
        <div class="col-xxl-6">
            <div class="card__wrapper">
                <div class="from__input-box">
                    <div class="form__input">
                        <input type="text" class="form-control" id="salarySearch" placeholder="Search Employee Name">
                    </div>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="col-xxl-6">
            <div class="card__wrapper">
                <div class="d-flex align-items-center justify-content-between gap-15">
                    <button class="btn btn-secondary w-100">Search</button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#addAdditionalSalary" class="btn btn-primary w-100">Add Additional Salary</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional Salary List Table -->
<div class="row">
    <div class="col-xxl-12">
        <div class="card__wrapper">
            <div class="card__title-wrap mb-20">
                <h3 class="card__heading-title">Additional Salary List</h3>
            </div>

            <table class="table table-border table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Employee</th>
                        <th>Salary Title</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Project Bonus</td>
                        <td>$300</td>
                        <td>2025-01-15</td>
                        <td><span class="bd-badge bg-success">Approved</span></td>
                        <td class="table_icon-box">
                            <div class="d-flex align-items-center justify-content-center gap-10">
                                <a class="table_icon download">
                                    <i class="fa-regular fa-arrow-down-to-bracket"></i>
                                </a>
                                <a href="?page=edit-additional-salary" class="table__icon edit">
                                    <i class="fa-sharp fa-light fa-pen"></i>
                                </a>
                                <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#salaryDetails">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Sarah Smith</td>
                        <td>Holiday Bonus</td>
                        <td>$150</td>
                        <td>2025-01-10</td>
                        <td><span class="bd-badge bg-warning">Pending</span></td>
                        <td class="table_icon-box">
                            <div class="d-flex align-items-center justify-content-center gap-10">
                                <a class="table_icon download">
                                    <i class="fa-regular fa-arrow-down-to-bracket"></i>
                                </a>
                                <a href="javascript:void(0)" class="table__icon edit">
                                    <i class="fa-sharp fa-light fa-pen"></i>
                                </a>
                                <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#salaryDetails">
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

<div class="modal fade" id="addAdditionalSalary" tabindex="-1" aria-labelledby="addAdditionalSalaryLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="addAdditionalSalaryLabel">Add Additional Salary</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form action="#">

                    <div class="card__wrapper mb-20">

                        <div class="col-12 mb-3">
                            <label for="employee" class="form-label">Select Employee</label>
                            <select id="employee" name="user_id" class="form-select">
                                <option value="">Select Employee</option>
                                <option value="1">John Doe</option>
                                <option value="2">Jane Smith</option>
                            </select>
                        </div>

                        <div class="col-12  mb-3">
                            <label for="additional-salary-name" class="form-label">Additional Salary Name</label>
                            <input type="text" id="additional-salary-name" name="additional_salary" class="form-control" placeholder="Enter salary name">
                        </div>

                        <div class="col-12  mb-3">
                            <label for="reason" class="form-label">Reason</label>
                            <textarea type="text" id="reason" name="reason" class="form-control" placeholder="Reason"></textarea>
                        </div>

                        <div class="col-12  mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" id="date" name="date" class="form-control">
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>