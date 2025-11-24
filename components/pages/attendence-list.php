<?php
$page_title = "Attendence Page";
$page = 'Attendence';
$show_breadcrumb = true;
$content = '

                
             <div class="col-xxl-12">
                        <div class="row">
                            <div class="col-xxl-6">
                                <div class="card__wrapper">
                                       
                                          <a href="./create-attencence.php" class="btn btn-primary " >Add Attencence</a>
                                    </div>
                                </div>
                            </div>
             </div>             

        <div class="row">
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-regular fa-gear"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Total Employee</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">850</h3>
                                        <span class="card__desc style_two"><span class="price-increase"><i
                                                    class="fa-light fa-arrow-up"></i> +5.15%</span> Than Last
                                        Month</span>
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
                                    <h6 class="card__sub-title mb-10">Total Present</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">150</h3>
                                        <span class="card__desc style_two"><span class="price-decrease"><i
                                                    class="fa-light fa-arrow-down"></i> +5.5%</span> Than Last
                                        Month</span>
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
                                    <h6 class="card__sub-title mb-10">Total Half Day</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">3130</h3>
                                        <span class="card__desc style_two"><span class="price-increase"><i
                                                    class="fa-light fa-arrow-up"></i> +10%</span> Than Last
                                        Year</span>
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
                                    <h6 class="card__sub-title mb-10">On Leave Employee</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">55</h3>
                                        <span class="card__desc style_two"><span class="price-increase"><i
                                                    class="fa-light fa-arrow-up"></i> +2.15%</span> Than Last
                                        Month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div class="card__wrapper">
                            <div class="row g-20 gy-20 mb-20 justify-content-between align-items-end">
                                <div class="col-md-12">
                                    <div class="d-flex align-items-center">
                                        <h6 class="">Note:</h6>
                                        <div class="attendant__info-wrapper">
                                            <div class="attendant__info-icon">
                                                <i class="fa fa-star text-theme"></i>
                                                <span class="attachment__info-arrow"><i
                                                        class="fa fa-arrow-right text-lightest"></i></span>
                                                <h6 class="text-dark small">Holiday</h6>
                                            </div>
                                            <div class="attendant__info-icon">
                                                <i class="fa fa-calendar-week text-secondary"></i>
                                                <span class="attachment__info-arrow"><i
                                                        class="fa fa-arrow-right text-lightest"></i></span>
                                                <h6 class="text-dark small">Day Off</h6>
                                            </div>
                                            <div class="attendant__info-icon">
                                                <i class="fa fa-check text-success"></i>
                                                <span class="attachment__info-arrow"><i
                                                        class="fa fa-arrow-right text-lightest"></i></span>
                                                <h6 class="text-dark small">Present</h6>
                                            </div>
                                            <div class="attendant__info-icon">
                                                <i class="fa fa-star-half-alt text-info"></i>
                                                <span class="attachment__info-arrow"><i
                                                        class="fa fa-arrow-right text-lightest"></i></span>
                                                <h6 class="text-dark small">Half Day</h6>
                                            </div>
                                            <div class="attendant__info-icon">
                                                <i class="fa fa-exclamation-circle text-warning"></i>
                                                <span class="attachment__info-arrow"><i
                                                        class="fa fa-arrow-right text-lightest"></i></span>
                                                <h6 class="text-dark small">Late</h6>
                                            </div>
                                            <div class="attendant__info-icon">
                                                <i class="fa fa-times text-danger"></i>
                                                <span class="attachment__info-arrow"><i
                                                        class="fa fa-arrow-right text-lightest"></i></span>
                                                <h6 class="text-dark small">Absent</h6>
                                            </div>
                                            <div class="attendant__info-icon">
                                                <i class="fa fa-plane-departure text-link"></i>
                                                <span class="attachment__info-arrow"><i
                                                        class="fa fa-arrow-right text-lightest"></i></span>
                                                <h6 class="text-dark small">On Leave</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="attendants-table table-responsive">
                                        <table class="table mb-20 multiple_tables">
                                            <thead>
                                                <tr>
                                                    <th>Employee</th>
                                                    <th>1</th>
                                                    <th>2</th>
                                                    <th>3</th>
                                                    <th>4</th>
                                                    <th>5</th>
                                                    <th>6</th>
                                                    <th>7</th>
                                                    <th>8</th>
                                                    <th>9</th>
                                                    <th>10</th>
                                                    <th>11</th>
                                                    <th>12</th>
                                                    <th>13</th>
                                                    <th>14</th>
                                                    <th>15</th>
                                                    <th>16</th>
                                                    <th>17</th>
                                                    <th>18</th>
                                                    <th>19</th>
                                                    <th>20</th>
                                                    <th>22</th>
                                                    <th>23</th>
                                                    <th>24</th>
                                                    <th>25</th>
                                                    <th>26</th>
                                                    <th>27</th>
                                                    <th>28</th>
                                                    <th>29</th>
                                                    <th>30</th>
                                                    <th>31</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__body">
                                                <tr>
                                                    <td>
                                                        <span class="table-avatar">
                                                            <a class="employee__avatar mr-5"
                                                                href="employee-profile.html"><img
                                                                    class="img-48 border-circle"
                                                                    src="../../assets/images/avatar/avatar1.png"
                                                                    alt="User Image"></a>
                                                            <a href="employee-profile.html">Emily Johnson</a>
                                                        </span>
                                                    </td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><i class="fa fa-exclamation-circle text-warning"></i></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><i class="fa fa-close text-danger"></i> </td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><i class="fa fa-star-half-alt text-info"></i> </td>
                                                    <td><i class="fa fa-calendar-week text-secondary"></i> </td>
                                                    <td><i class="fa fa-star text-theme"></i> </td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><i class="fa fa-plane-departure text-link"></i> </td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                    <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="table-avatar">
                                                            <a class="employee__avatar mr-5"
                                                                href="employee-profile.html"><img
                                                                    class="img-48 border-circle"
                                                                    src="../../assets/images/avatar/avatar3.png"
                                                                    alt="User Image"></a>
                                                            <a href="employee-profile.html">Alexander Smith</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i
                                                                class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td><i class="fa fa-star text-theme"></i> </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td><i class="fa fa-calendar-week text-secondary"></i> </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td><i class="fa fa-exclamation-circle text-warning"></i> </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td><i class="fa fa-close text-danger"></i> </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td><i class="fa fa-plane-departure text-link"></i> </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                        </a>
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
';
include "../layouts/master.php";
?>

