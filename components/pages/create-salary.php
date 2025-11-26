<?php
$page_title = "Create Salaey ";
$page = 'Add salary ';
$show_breadcrumb = true;

?>

<form action="#">
    <div class="row">
        <div class="col-xxl-12">
            <div class="card__wrapper">
                <div class="row gy-20">

                    <!-- Employee Select -->
                    <div class="col-md-6 col-6">
                        <label class="form-label">Employee Name</label>
                        <select class="form-select">
                            <option value="">Select Employee</option>
                            <option value="1">Shahin</option>
                            <option value="2">Rahim</option>
                            <option value="3">Karim</option>
                        </select>
                    </div>

                    <!-- Department Select -->
                    <div class="col-md-6 col-6">
                        <label class="form-label">Department</label>
                        <select class="form-select">
                            <option value="">Select Department</option>
                            <option>HR</option>
                            <option>Accounts</option>
                            <option>IT</option>
                        </select>
                    </div>

                    <!-- Designation Select -->
                    <div class="col-md-6 col-6">
                        <label class="form-label">Designation</label>
                        <select class="form-select">
                            <option value="">Select Designation</option>
                            <option>Manager</option>
                            <option>Executive</option>
                            <option>Officer</option>
                        </select>
                    </div>

                    <!-- Holidays Select -->
                    <div class="col-md-6 col-6">
                        <label class="form-label">Holidays</label>
                        <select class="form-select">
                            <option value="">Select Holiday</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>

                    <!-- Leaves Select -->
                    <div class="col-md-6 col-6">
                        <label class="form-label">Leaves</label>
                        <select class="form-select">
                            <option value="">Select Leave</option>
                            <option>Medical</option>
                            <option>Casual</option>
                            <option>Parental</option>
                        </select>
                    </div>

                    <!-- Weekend Select -->
                    <div class="col-md-6 col-6">
                        <label class="form-label">Weekend</label>
                        <select class="form-select">
                            <option value="">Select Weekend</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                    </div>

                    <!-- Numeric Fields -->
                    <div class="col-md-4">
                        <label class="form-label">Salary</label>
                        <input type="number" class="form-control" placeholder="Salary">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Payable Salary</label>
                        <input type="number" class="form-control" placeholder="Payable Salary">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Additional Salary</label>
                        <input type="number" class="form-control" placeholder="Additional Salary">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Presents</label>
                        <input type="number" class="form-control" placeholder="Present Days">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Absents</label>
                        <input type="number" class="form-control" placeholder="Absent Days">
                    </div>

                </div>

                <div class="submit__btn text-center my-3">
                    <button class="btn btn-primary">Add Saary</button>
                </div>
            </div>
        </div>
    </div>
</form>