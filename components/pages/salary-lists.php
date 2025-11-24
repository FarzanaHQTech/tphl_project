<?php
$page_title = "Salary Page";
$page = 'Salary List';
$show_breadcrumb = true;

$content = '
<div class="row">
    <div class="col-xxl-12">
        <div class="card__wrapper">

            <a href="./create-salary.php" class="btn btn-primary ">Add Salary</a>
        </div>
    </div>
</div>
<div class="row">
                         
    <div class="col-xxl-12">
        <div class="card__wrapper">
            <div class="card__title-wrap mb-20">
                <h3 class="card__heading-title">Salary Details</h3>
            </div>

            <div class="card__table table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr class="table__title">
                            <th>ID</th>
                            <th>Employee</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Weekend</th>
                            <th>Holiday</th>
                            <th>Leave</th>
                            <th>Salary</th>
                            <th>Payable Salary</th>
                            <th>Additional Salary</th>
                            <th>Present</th>
                            <th>Absent</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody class="table__body">
                        <tr>
                            <td>#1</td>
                            <td>Shahin</td>
                            <td>IT</td>
                            <td>Manager</td>
                            <td>Friday</td>
                            <td>2</td>
                            <td>Medical</td>
                            <td>30000</td>
                            <td>28000</td>
                            <td>2000</td>
                            <td>26</td>
                            <td>2</td>

                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-center gap-10">
                                    <a href="#" class="table__icon edit">
                                        <i class="fa-sharp fa-light fa-pen"></i>
                                    </a>
                                    <button class="table__icon delete">
                                        <i class="fa-regular fa-trash"></i>
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

';
include "../layouts/master.php";
?>
