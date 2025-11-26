<?php
$page_title = "leave Page";
$page = 'Employee Leave';
$addPage = true;
$show_breadcrumb = true;

?>
<div class="breadcrumb__btn my-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewLeave">Add Leave</button>
</div>


<div class="row">
    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <div class="card__wrapper">
            <div class="d-flex align-items-center gap-sm">
                <div class="card__icon">
                    <span><i class="fa-light fa-ban"></i></span>
                </div>
                <div class="card__title-wrap">
                    <h6 class="card__sub-title mb-10">Total Leave</h6>
                    <div class="d-flex flex-wrap align-items-end gap-10">
                        <h3 class="card__title">15</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <div class="card__wrapper">
            <div class="d-flex align-items-center gap-sm">
                <div class="card__icon">
                    <span><i class="fa-light fa-badge-check"></i></span>
                </div>
                <div class="card__title-wrap">
                    <h6 class="card__sub-title mb-10">Approve</h6>
                    <div class="d-flex flex-wrap align-items-end gap-10">
                        <h3 class="card__title">12</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <div class="card__wrapper">
            <div class="d-flex align-items-center gap-sm">
                <div class="card__icon">
                    <span><i class="fa-sharp fa-regular fa-user"></i></span>
                </div>
                <div class="card__title-wrap">
                    <h6 class="card__sub-title mb-10">Rejected </h6>
                    <div class="d-flex flex-wrap align-items-end gap-10">
                        <h3 class="card__title">2</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <div class="card__wrapper">
            <div class="d-flex align-items-center gap-sm">
                <div class="card__icon">
                    <span><i class="fa-sharp fa-regular fa-house-person-leave"></i></span>
                </div>
                <div class="card__title-wrap">
                    <h6 class="card__sub-title mb-10">Pending</h6>
                    <div class="d-flex flex-wrap align-items-end gap-10">
                        <h3 class="card__title">5</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-12">
        <div class="card__wrapper">
            <div class="table__wrapper table-responsive">
                <table class="table mb-20" id="dataTableDefualt">
                    <thead>
                        <tr class="table__title">
                            <th>Leave Type</th>
                            <th>Leave Duration</th>
                            <th>Days</th>
                            <th>Reason</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table__body">
                        <tr>
                            <td class="table__leave-type">Medical Leave</td>
                            <td class="table__leave-duration">19 April 2024 - 24 April 2024</td>
                            <td class="table__leave-">6</td>
                            <td class="table__leave-rason">Medical Leave</td>
                            <td><span class="bd-badge bg-warning">Pending</span>
                            </td>
                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-start gap-10">
                                    <a href="#" class="table__icon edit">
                                        <i class="fa-sharp fa-light fa-pen"></i>
                                    </a>
                                    <button class="removeBtn table__icon delete"><i
                                            class="fa-regular fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table__leave-type">Personal Leave</td>
                            <td class="table__leave-duration">15 April 2024 - 16 April 2024</td>
                            <td class="table__leave-">1</td>
                            <td class="table__leave-rason">Personal Leave</td>
                            <td><span class="bd-badge bg-success">Approved</span></td>
                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-start gap-10">
                                    <a href="#" class="table__icon edit">
                                        <i class="fa-sharp fa-light fa-pen"></i>
                                    </a>
                                    <button class="removeBtn table__icon delete"><i
                                            class="fa-regular fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table__leave-type">Sick Leave</td>
                            <td class="table__leave-duration">10 March 2024 - 12 March 2024</td>
                            <td class="table__leave-">3</td>
                            <td class="table__leave-rason">Medical Condition</td>
                            <td><span class="bd-badge bg-warning">Pending</span></td>
                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-start gap-10">
                                    <a href="#" class="table__icon edit">
                                        <i class="fa-sharp fa-light fa-pen"></i>
                                    </a>
                                    <button class="removeBtn table__icon delete"><i
                                            class="fa-regular fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table__leave-type">Vacation Leave</td>
                            <td class="table__leave-duration">01 May 2024 - 07 May 2024</td>
                            <td class="table__leave-">7</td>
                            <td class="table__leave-rason">Family Trip</td>
                            <td><span class="bd-badge bg-success">Approved</span></td>
                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-start gap-10">
                                    <a href="#" class="table__icon edit">
                                        <i class="fa-sharp fa-light fa-pen"></i>
                                    </a>
                                    <button class="removeBtn table__icon delete"><i
                                            class="fa-regular fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table__leave-type">Maternity Leave</td>
                            <td class="table__leave-duration">15 June 2024 - 15 August 2024</td>
                            <td class="table__leave-">60</td>
                            <td class="table__leave-rason">Maternity</td>
                            <td><span class="bd-badge bg-success">Approved</span></td>
                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-start gap-10">
                                    <a href="#" class="table__icon edit">
                                        <i class="fa-sharp fa-light fa-pen"></i>
                                    </a>
                                    <button class="removeBtn table__icon delete"><i
                                            class="fa-regular fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table__leave-type">Paternity Leave</td>
                            <td class="table__leave-duration">05 July 2024 - 20 July 2024</td>
                            <td class="table__leave-">15</td>
                            <td class="table__leave-rason">Paternity</td>
                            <td><span class="bd-badge bg-warning">Pending</span></td>
                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-start gap-10">
                                    <a href="#" class="table__icon edit">
                                        <i class="fa-sharp fa-light fa-pen"></i>
                                    </a>
                                    <button class="removeBtn table__icon delete"><i
                                            class="fa-regular fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table__leave-type">Bereavement Leave</td>
                            <td class="table__leave-duration">01 September 2024 - 03 September 2024</td>
                            <td class="table__leave-">3</td>
                            <td class="table__leave-rason">Family Loss</td>
                            <td><span class="bd-badge bg-success">Approved</span></td>
                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-start gap-10">
                                    <a href="#" class="table__icon edit">
                                        <i class="fa-sharp fa-light fa-pen"></i>
                                    </a>
                                    <button class="removeBtn table__icon delete"><i
                                            class="fa-regular fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table__leave-type">Study Leave</td>
                            <td class="table__leave-duration">10 October 2024 - 30 October 2024</td>
                            <td class="table__leave-">21</td>
                            <td class="table__leave-rason">Exams</td>
                            <td><span class="bd-badge bg-warning">Pending</span></td>
                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-start gap-10">
                                    <a href="#" class="table__icon edit">
                                        <i class="fa-sharp fa-light fa-pen"></i>
                                    </a>
                                    <button class="removeBtn table__icon delete"><i
                                            class="fa-regular fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table__leave-type">Compassionate Leave</td>
                            <td class="table__leave-duration">01 November 2024 - 05 November 2024</td>
                            <td class="table__leave-">5</td>
                            <td class="table__leave-rason">Family Illness</td>
                            <td><span class="bd-badge bg-success">Approved</span></td>
                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-start gap-10">
                                    <a href="#" class="table__icon edit">
                                        <i class="fa-sharp fa-light fa-pen"></i>
                                    </a>
                                    <button class="removeBtn table__icon delete"><i
                                            class="fa-regular fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table__leave-type">Jury Duty</td>
                            <td class="table__leave-duration">12 December 2024 - 16 December 2024</td>
                            <td class="table__leave-">5</td>
                            <td class="table__leave-rason">Jury Duty</td>
                            <td><span class="bd-badge bg-warning">Pending</span></td>
                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-start gap-10">
                                    <a href="#" class="table__icon edit">
                                        <i class="fa-sharp fa-light fa-pen"></i>
                                    </a>
                                    <button class="removeBtn table__icon delete"><i
                                            class="fa-regular fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table__leave-type">Unpaid Leave</td>
                            <td class="table__leave-duration">01 January 2025 - 05 January 2025</td>
                            <td class="table__leave-">5</td>
                            <td class="table__leave-rason">Personal Reasons</td>
                            <td><span class="bd-badge bg-warning">Pending</span></td>
                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-start gap-10">
                                    <a href="#" class="table__icon edit">
                                        <i class="fa-sharp fa-light fa-pen"></i>
                                    </a>
                                    <button class="removeBtn table__icon delete"><i
                                            class="fa-regular fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table__leave-type">Parental Leave</td>
                            <td class="table__leave-duration">20 February 2024 - 20 March 2024</td>
                            <td class="table__leave-">30</td>
                            <td class="table__leave-rason">New Child</td>
                            <td><span class="bd-badge bg-success">Approved</span></td>
                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-start gap-10">
                                    <a href="#" class="table__icon edit">
                                        <i class="fa-sharp fa-light fa-pen"></i>
                                    </a>
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

<!-- new Leave modal start -->
<div id="addNewLeave" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Leave Request</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row gy-20">
                        <div class="col-xl-12">
                            <div class="card__wrapper mb-20">
                                <div class="row gy-20">
                                    <div class="col-md-12">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="largeSelect" class="form-label">Leave
                                                    Type<span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <select id="largeSelect" class="form-select">
                                                    <option value="0">Select Leave Type</option>
                                                    <option value="1">Medical Leave</option>
                                                    <option value="2">Personal Leave</option>
                                                    <option value="3">Vacation Leave</option>
                                                    <option value="4">Monthly Leave</option>
                                                    <option value="5">Yearly Leave</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label class="form-check-label" for="dateDuration">Leave
                                                    Duration</label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" id="dateDuration" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="numberDays">Number of days <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="numberDays" id="numberDays" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label>Reason <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <textarea class="form-control" name="name" required></textarea>
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
<!-- new Leave modal end -->