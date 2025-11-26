<?php
$page_title = "department Page";
$page = 'Department';
$addPage = true;
$show_breadcrumb = true;

?>

<div class="breadcrumb__btn my-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDesignation">Add Designation</button>
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
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table__body">
                                <tr>
                                    <td class="table__designation">Chief Information Officer</td>
                                    <td class="table__department">Information Technology Department</td>
                                    <td class="table__icon-box">
                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                            <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#daesignationsEdit"><i
                                                    class="fa-sharp fa-light fa-pen"></i></button>
                                            <button class="removeBtn table__icon delete"><i
                                                    class="fa-regular fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__designation">Chief Technology Officer</td>
                                    <td class="table__department">Technology Department</td>
                                    <td class="table__icon-box">
                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                            <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#daesignationsEdit"><i
                                                    class="fa-sharp fa-light fa-pen"></i></button>
                                            <button class="removeBtn table__icon delete"><i
                                                    class="fa-regular fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__designation">Information Security Analyst</td>
                                    <td class="table__department">Security Department</td>
                                    <td class="table__icon-box">
                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                            <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#daesignationsEdit"><i
                                                    class="fa-sharp fa-light fa-pen"></i></button>
                                            <button class="removeBtn table__icon delete"><i
                                                    class="fa-regular fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__designation">Network Administrator/td>
                                    <td class="table__department">Network Operations Department</td>
                                    <td class="table__icon-box">
                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                            <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#daesignationsEdit"><i
                                                    class="fa-sharp fa-light fa-pen"></i></button>
                                            <button class="removeBtn table__icon delete"><i
                                                    class="fa-regular fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__designation">Systems Administrator</td>
                                    <td class="table__department">Systems Administration Department</td>
                                    <td class="table__icon-box">
                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                            <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#daesignationsEdit"><i
                                                    class="fa-sharp fa-light fa-pen"></i></button>
                                            <button class="removeBtn table__icon delete"><i
                                                    class="fa-regular fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__designation">Database Administrator</td>
                                    <td class="table__department">Database Management Department</td>
                                    <td class="table__icon-box">
                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                            <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#daesignationsEdit"><i
                                                    class="fa-sharp fa-light fa-pen"></i></button>
                                            <button class="removeBtn table__icon delete"><i
                                                    class="fa-regular fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__designation">Software Engineer</td>
                                    <td class="table__department">Software Development Department</td>
                                    <td class="table__icon-box">
                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                            <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#daesignationsEdit"><i
                                                    class="fa-sharp fa-light fa-pen"></i></button>
                                            <button class="removeBtn table__icon delete"><i
                                                    class="fa-regular fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__designation">Web Developer</td>
                                    <td class="table__department">Web Development Department</td>
                                    <td class="table__icon-box">
                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                            <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#daesignationsEdit"><i
                                                    class="fa-sharp fa-light fa-pen"></i></button>
                                            <button class="removeBtn table__icon delete"><i
                                                    class="fa-regular fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__designation">IT Project Manager</td>
                                    <td class="table__department">Project Management Office</td>
                                    <td class="table__icon-box">
                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                            <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#daesignationsEdit"><i
                                                    class="fa-sharp fa-light fa-pen"></i></button>
                                            <button class="removeBtn table__icon delete"><i
                                                    class="fa-regular fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__designation">IT Support Specialist</td>
                                    <td class="table__department">IT Support Department</td>
                                    <td class="table__icon-box">
                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                            <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#daesignationsEdit"><i
                                                    class="fa-sharp fa-light fa-pen"></i></button>
                                            <button class="removeBtn table__icon delete"><i
                                                    class="fa-regular fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__designation">IT Consultant</td>
                                    <td class="table__department">Consulting Department</td>
                                    <td class="table__icon-box">
                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                            <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#daesignationsEdit"><i
                                                    class="fa-sharp fa-light fa-pen"></i></button>
                                            <button class="removeBtn table__icon delete"><i
                                                    class="fa-regular fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__designation">IT Auditor</td>
                                    <td class="table__department">Audit Department</td>
                                    <td class="table__icon-box">
                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                            <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#daesignationsEdit"><i
                                                    class="fa-sharp fa-light fa-pen"></i></button>
                                            <button class="removeBtn table__icon delete"><i
                                                    class="fa-regular fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__designation">Business Intelligence Analyst</td>
                                    <td class="table__department">Business Intelligence Department</td>
                                    <td class="table__icon-box">
                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                            <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#daesignationsEdit"><i
                                                    class="fa-sharp fa-light fa-pen"></i></button>
                                            <button class="removeBtn table__icon delete"><i
                                                    class="fa-regular fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__designation">Cloud Solutions Architect</td>
                                    <td class="table__department">Cloud Services Department</td>
                                    <td class="table__icon-box">
                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                            <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#daesignationsEdit"><i
                                                    class="fa-sharp fa-light fa-pen"></i></button>
                                            <button class="removeBtn table__icon delete"><i
                                                    class="fa-regular fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__designation">Data Scientist</td>
                                    <td class="table__department">Analytics Department</td>
                                    <td class="table__icon-box">
                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                            <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#daesignationsEdit"><i
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
    </div>
</div>



<!-- New Designation Modal Start -->
<div class="modal fade" id="addDesignation" tabindex="-1" aria-labelledby="addDesignationLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDesignationLabel">Add New Designation</h5>
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
                                            <label for="designation">Designation <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="designation" id="designation" type="text">
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