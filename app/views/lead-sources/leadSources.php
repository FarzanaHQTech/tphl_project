<?php
$page = 'Leads Source';
$addPage = true;
$show_breadcrumb = true;

?>
<div class="breadcrumb__btn my-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewLeadSource">Add Lead</button>
</div>

<div class="row">



    <div class="col-xxl-12">
        <div class="card__wrapper">
            <div class="table__wrapper table-responsive">
                <table class="table mb-20 multiple_tables">
                    <thead>
                        <tr class="table__title table__sort">

                            </th>
                            <th>Lead Source Name</th>

                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table__body">
                        <tr>
                            <td>Michael Johnson</td>
                            <td><span class="bd-badge bg-danger">Inactive</span></td>

                            <td>
                                <div class="d-flex align-items-center justify-content-start gap-10">
                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#leadDetails"><i
                                            class="fa-regular fa-eye"></i></button>
                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#leadEdit"><i
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
<div id="addNewLeadSource" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Lead Source</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form action="<?= $GLOBALS['base_url'] ?>/store-leadSource" method="POST">
                    <div class="row gy-10">
                        <div class="col-xl-12">
                            <div class="card__wrapper">
                                <div class="row gy-20">
                                    <div class="col-lg-12">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="name">Lead Source Name<span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="name" id="name" type="text" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form__input-title">
                                            <label>Status</label>
                                        </div>
                                        <div class="radio d-flex align-items-center gap-20">
                                            <div class="form-check">
                                                <input name="is_active" class="form-check-input" type="radio" value="1" id="statusActive" checked>
                                                <label class="form-check-label" for="statusActive">Active</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="is_active" class="form-check-input" type="radio" value="0" id="statusInactive">
                                                <label class="form-check-label" for="statusInactive">Inactive</label>
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

<!-- new lead details modal start -->
<div id="leadDetails" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lead Details</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <div class="row gy-10">
                    <div class="col-xl-12">
                        <div class="card__wrapper">
                            <div class="row gy-20">
                                <div class="col-lg-12">
                                    <div class="label__content-wrapper">
                                        <span class="label__subtitle">Lead Name</span>
                                        <h6 class="label__title">Michael Johnson</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="label__content-wrapper">
                                        <span class="label__subtitle">Lead Type</span>
                                        <h6 class="label__title">Personal</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="label__content-wrapper">
                                        <span class="label__subtitle">Company Name</span>
                                        <h6 class="label__title"><img class="img-36 border-circle mr-10" src="assets/images/user/1.png" alt="image">SwiftTech Solutions</h6>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="label__content-wrapper">
                                        <span class="label__subtitle">Value</span>
                                        <h6 class="label__title">$5000.00</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="label__content-wrapper">
                                        <span class="label__subtitle">Currency</span>
                                        <h6 class="label__title">$USD</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="label__content-wrapper">
                                        <span class="label__subtitle">Mobile Number</span>
                                        <h6 class="label__title">+1 (555) 123-4567</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="label__content-wrapper">
                                        <span class="label__subtitle">Phone Number</span>
                                        <h6 class="label__title">+123-4567</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="label__content-wrapper">
                                        <span class="label__subtitle">Email Address</span>
                                        <h6 class="label__title">manez@example.com</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="label__content-wrapper">
                                        <span class="label__subtitle">Source Type</span>
                                        <h6 class="label__title">Linkedin</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="label__content-wrapper">
                                        <span class="label__subtitle">Owner Name</span>
                                        <h6 class="label__title"><img class="img-36 border-circle" src="assets/images/avatar/avatar1.png" alt="image"> Ethan
                                            Mitchell
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="label__content-wrapper">
                                        <span class="label__subtitle">Tag</span>
                                        <div class="d-flex align-items-center gap-10"><span
                                                class="tag-badge">Clearance</span><span class="tag-badge">Year
                                                End</span></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="label__content-wrapper">
                                        <span class="label__subtitle">Lead Description</span>
                                        <p>As a Sales Representative at Manez, you will play a key role in driving
                                            revenue growth and expanding our customer base. You will be responsible
                                            for identifying and prospecting new leads, nurturing relationships with
                                            existing clients, and closing sales opportunities. Your primary duties
                                            will include.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="label__content-wrapper">
                                        <span class="label__subtitle">Lead Visibility</span>
                                        <h6 class="label__title">Public</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="label__content-wrapper">
                                        <span class="label__subtitle">Lead Status</span>
                                        <h6 class="label__title">Active</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- new lead details modal end -->

<!-- lead update modal start -->
<div id="leadEdit" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lead Update</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body form__edit-view">
                <form action="#">
                    <div class="row gy-10">
                        <div class="col-xl-12">
                            <div class="card__wrapper">
                                <div class="row gy-20">
                                    <div class="col-lg-12">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="leadName2">Lead Name<span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="leadName" id="leadName2" type="text" value="Michael Johnson">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="leadType2" class="form-label">Lead Type
                                                    <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <select id="leadType2" class="form-select">
                                                    <option>Personal</option>
                                                    <option value="1">Personal</option>
                                                    <option value="2">Organization</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="companyName2" class="form-label">Company Name
                                                    <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <select id="companyName2" class="form-select">
                                                    <option>SwiftTech Solutions</option>
                                                    <option value="1">SwiftTech Solutions</option>
                                                    <option value="2">BlueWave Group</option>
                                                    <option value="3">Summit Inc.</option>
                                                    <option value="4">Nexus Corporation</option>
                                                    <option value="5">Stellar Ltd.</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="value2">Value <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="value" id="value2" type="text" value="$50000.00">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="currency2" class="form-label">Currency
                                                    <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <select id="currency2" class="form-select">
                                                    <option>$ USD</option>
                                                    <option value="1">$ USD</option>
                                                    <option value="2">€ EURO</option>
                                                    <option value="3">₽ RUBLE </option>
                                                    <option value="4">£ POUND</option>
                                                    <option value="5">₿ BTC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="phoneNumber2">Mobile Number <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="phoneNumber2" id="phoneNumber2" type="text" value="+1 (555) 123-4567">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="phoneNumber4">Phone Number</label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="phoneNumber4" id="phoneNumber4" type="text" value="+123-4567">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="emailAddress2">Email Address <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="emailAddress2" id="emailAddress2" type="text" value="manez@example.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="sourceType2">Source Type <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="sourceType2" id="sourceType2" type="text" value="Linkedin">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="ownerName2">Owner Name <span>*</span></label>
                                            </div>
                                            <div class="from__input-box">
                                                <select id="ownerName2" class="multiple-img">
                                                    <option data-image="assets/images/avatar/avatar1.png" selected>
                                                        Ethan Mitchell</option>
                                                    <option data-image="assets/images/avatar/avatar2.png">
                                                        Madison
                                                        Turner</option>
                                                    <option data-image="assets/images/avatar/avatar3.png">
                                                        Mason
                                                        Rodriguez</option>
                                                    <option data-image="assets/images/avatar/avatar4.png">
                                                        Lily
                                                        Campbell</option>
                                                    <option data-image="assets/images/avatar/avatar5.png">
                                                        Carter
                                                        White</option>
                                                    <option data-image="assets/images/avatar/avatar6.png">
                                                        Olivia
                                                        Bennett</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tagify__wrapper">
                                            <div class="form__input-title">
                                                <label for="TagifyBasic" class="form-label">Tag</label>
                                            </div>
                                            <div class="form__input">
                                                <input id="TagifyBasic" class="form-control form__tags" name="TagifyBasic" value="Clearance, Year End," />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label>Lead Description <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <textarea class="form-control" name="name" required>As a Sales Representative at Manez, you will play a key role in driving revenue growth and expanding our customer base. You will be responsible for identifying and prospecting new leads, nurturing relationships  with existing clients, and closing sales opportunities. Your primary duties will include.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form__input-title">
                                            <label>Lead Visibility</label>
                                        </div>
                                        <div class="radio d-flex align-items-center gap-20">
                                            <div class="form-check">
                                                <input name="visibilityRadio" class="form-check-input" type="radio" value="" id="visibilityRadio4" checked>
                                                <label class="form-check-label" for="visibilityRadio4">Public</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="visibilityRadio" class="form-check-input" type="radio" value="" id="visibilityRadio5">
                                                <label class="form-check-label" for="visibilityRadio5">Private</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="visibilityRadio" class="form-check-input" type="radio" value="" id="visibilityRadio6">
                                                <label class="form-check-label" for="visibilityRadio6">Select
                                                    People</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form__input-title">
                                            <label>Lead Status</label>
                                        </div>
                                        <div class="radio d-flex align-items-center gap-20">
                                            <div class="form-check">
                                                <input name="statusRadio" class="form-check-input" type="radio" value="" id="statusRadio1" checked>
                                                <label class="form-check-label" for="statusRadio1">Active</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="statusRadio" class="form-check-input" type="radio" value="" id="statusRadio2">
                                                <label class="form-check-label" for="statusRadio2">Inactive</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="statusRadio" class="form-check-input" type="radio" value="" id="statusRadio3">
                                                <label class="form-check-label" for="statusRadio3">Pending</label>
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