<?php
$page_title = "department Page";
$page = 'Department';
$addPage = true;
$show_breadcrumb = true;

?>
<div class="breadcrumb__btn my-4 text-align-end">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewDepartment">Add Department</button>
</div>

<div class="row">

    <div class="col-xxl-12">
        <div class="card__wrapper">
            <div class="table__wrapper table-responsive">
                <table class="table mb-20 multiple_tables">
                    <thead>
                        <tr class="table__title table__sort">
                            <th class="no-sort sorting"><input type="checkbox" id="selectall"></input>
                            </th>
                            <th>ID</th>
                            <th>Deparment Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table__body">


                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>

                            <td>#1</td>
                            <td>HR</td>
                            <td><span class="bd-badge bg-success">Active</span></td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start gap-10">

                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#leadEdit"><i
                                            class="fa-sharp fa-light fa-pen"></i></button>
                                    <button class="removeBtn table__icon delete"><i
                                            class="fa-regular fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>

                            <td>#2</td>
                            <td>Accounting</td>
                            <td><span class="bd-badge bg-success">Active</span></td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start gap-10">

                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#editDepartment"><i
                                            class="fa-sharp fa-light fa-pen"></i></button>
                                    <button class="removeBtn table__icon delete"><i
                                            class="fa-regular fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- new lead modal start -->
<div id="addNewDepartment" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Lead</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row gy-10">
                        <div class="col-xl-12">
                            <div class="card__wrapper">
                                <div class="row gy-20">
                                    <div class="col-lg-12">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="department">Department Name<span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="department" id="department" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form__input-title">
                                            <label> Status</label>
                                        </div>
                                        <div class="radio d-flex align-items-center gap-20">
                                            <div class="form-check">
                                                <input name="statusRadio" class="form-check-input" type="radio" value="" id="statusRadio4" checked>
                                                <label class="form-check-label" for="statusRadio4">Active</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="statusRadio" class="form-check-input" type="radio" value="" id="statusRadio5" checked="">
                                                <label class="form-check-label" for="statusRadio5">Inactive</label>
                                            </div>
                                        </div>
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
<!-- new lead modal end -->
<!-- edit lead modal start -->
<div id="editDepartment" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Lead</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark-large"></i>
                </button>
            </div>

            <div class="modal-body">
                <form action="#">
                    <div class="row gy-10">
                        <div class="col-xl-12">
                            <div class="card__wrapper">
                                <div class="row gy-20">

                                    <!-- Department Name -->
                                    <div class="col-lg-12">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="edit_department">Department Name <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <!-- Old value load হওয়ার জন্য value="" -->
                                                <input class="form-control" name="edit_department" id="edit_department" type="text" value="Old Department Name">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Status -->
                                    <div class="col-md-6">
                                        <div class="form__input-title">
                                            <label>Status</label>
                                        </div>

                                        <div class="radio d-flex align-items-center gap-20">
                                            <div class="form-check">
                                                <input name="editStatus" class="form-check-input" type="radio" value="active" id="editStatusActive" checked>
                                                <label class="form-check-label" for="editStatusActive">Active</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="editStatus" class="form-check-input" type="radio" value="inactive" id="editStatusInactive">
                                                <label class="form-check-label" for="editStatusInactive">Inactive</label>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- row -->
                            </div>
                        </div>
                    </div>

                    <!-- Update Button -->
                    <div class="submit__btn text-center">
                        <button class="btn btn-primary">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- edit lead modal end -->