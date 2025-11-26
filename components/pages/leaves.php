<?php
$page_title = "Leaves Page";
$page = 'Leaves';
$addPage = true;
$show_breadcrumb = true;

?>

<div class="breadcrumb__btn my-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addLeave">Add Leave</button>
</div>
<div class="row">
    <div class="col-xxl-12">
        <div class="card__wrapper">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="table__wrapper table-responsive">
                        <table class="table mb-20 hover multiple_tables">
                            <thead>
                                <tr class="table__title">
                                    <th>S/L</th>
                                    <th>Leave Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody class="table__body">
                                <tr>
                                    <td>#1</td>
                                    <td>Medical Leave</td>
                                    <td><span class="bd-badge bg-success">Active</span></td>

                                    <td>
                                        <div class="d-flex align-items-center gap-10">

                                            <!-- Edit Button -->
                                            <button
                                                type="button"
                                                class="table__icon edit"
                                                data-bs-toggle="modal"
                                                data-bs-target="#daesignationsEdit">
                                                <i class="fa-sharp fa-light fa-pen"></i>
                                            </button>

                                            <!-- Delete Button -->
                                            <button
                                                type="button"
                                                class="table__icon delete removeBtn">
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
    </div>
</div>



<!-- New Designation Modal Start -->
<div class="modal fade" id="addLeave" tabindex="-1" aria-labelledby="addLeaveLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addLeaveLabel">Add New Leave</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <div class="employee__info">
                    <form action="#">
                        <div class="card__wrapper mb-20">
                            <div class="row g-20 gy-20 align-items-center justify-content-center">
                                <div class="col-lg-12">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="Leave">Leave <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="leave" id="leave" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label> Status <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <select class="form-control">
                                                <option value="1">Active</option>
                                                <option value="0">In-Active</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit__btn text-center">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- New Designation Modal End -->

<!-- Designations Edit Modal Start -->
<div class="modal fade" id="daesignationsEdit" tabindex="-1" aria-labelledby="daesignationsEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="daesignationsEditLabel">Designation Edit</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <div class="employee__info">
                    <form action="#">
                        <div class="card__wrapper mb-20">
                            <div class="row g-20 gy-20 align-items-center justify-content-center">
                                <div class="col-lg-12">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="designation2">Designation <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="designation2" id="designation2" value="Business Intelligence Analyst" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label>Employee Designation <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <select class="form-control">
                                                <option value="BID" selected>Business Intelligence Department
                                                </option>
                                                <option value="ITD">Information Technology Department</option>
                                                <option value="TD">Technology Department</option>
                                                <option value="SD">Security Department</option>
                                                <option value="NPD">Network Operations Department</option>
                                                <option value="SAD">Systems Administration Department</option>
                                                <option value="DMD">Database Management Department</option>
                                                <option value="SDD">Software Development Department</option>
                                                <option value="WDD">Web Development Department</option>
                                                <option value="PMO">Project Management Office</option>
                                                <option value="ITSP">IT Support Department</option>
                                                <option value="CD">Consulting Department</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit__btn text-center">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Designations Edit Modal End -->