<?php
$page_title = "leads Page";
$page = 'Leads';
$addPage = 'Add Leads';
$addPage = true;
$show_breadcrumb = true;

?>
<div class="breadcrumb__btn my-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewLead">Add Lead</button>
</div>

<div class="row">
    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <div class="card__wrapper">
            <div class="d-flex align-items-center gap-sm">
                <div class="card__icon">
                    <span><i class="fa-light fa-ban"></i></span>
                </div>
                <div class="card__title-wrap">
                    <h6 class="card__sub-title mb-10">Total Lead</h6>
                    <div class="d-flex flex-wrap align-items-end gap-10">
                        <h4 class="card__title">1500</h4>
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
                    <h6 class="card__sub-title mb-10">Total Company</h6>
                    <div class="d-flex flex-wrap align-items-end gap-10">
                        <h4 class="card__title">950</h4>
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
                    <h6 class="card__sub-title mb-10">Approved </h6>
                    <div class="d-flex flex-wrap align-items-end gap-10">
                        <h4 class="card__title">3130</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xxl-12">
        <div class="card__wrapper">
            <div class="table__wrapper table-responsive">
                <table class="table mb-20 multiple_tables">
                    <thead>
                        <tr class="table__title table__sort">
                            <th class="no-sort sorting"><input type="checkbox" id="selectall"></input>
                            </th>
                            <th>Created Date</th>
                            <th>Lead Name</th>
                            <th>Company Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Owner</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table__body">
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                            <td>05 Jan 2024, 11:20AM</td>
                            <td><a href="leads-details.html" class="title-name">Michael Johnson</a></td>
                            <td>
                                <span class="table-avatar d-flex gap-10 align-items-center">
                                    <a href="company-details.html" class="company__thumb">
                                        <img src="assets/images/user/1.png" alt="image"></a>
                                    <a class="d-inline-grid no-copy no-copy" href="company-details.html">SwiftTech
                                        Solutions
                                        <span>Pleasantville, CA</span>
                                    </a>
                                </span>
                            </td>
                            <td>+1 (555) 123-4567</td>
                            <td>info@swifttech.com</td>
                            <td><span class="title-name">Alexander Swift</span></td>
                            <td><span class="bd-badge bg-success">Approved</span></td>
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
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                            <td>10 Jan 2024, 09:45AM</td>
                            <td><a href="leads-details.html" class="title-name">Emma Davis</a></td>
                            <td>
                                <span class="table-avatar d-flex gap-10 align-items-center">
                                    <a href="company-details.html" class="company__thumb">
                                        <img src="assets/images/user/2.png" alt="image"></a>
                                    <a class="d-inline-grid no-copy" href="company-details.html">BlueWave Group
                                        <span>Willow Springs, NY</span>
                                    </a>
                                </span>
                            </td>
                            <td>+1 (555) 234-5678</td>
                            <td>info@bluewave.com</td>
                            <td><span class="title-name">Victoria Blue</span></td>
                            <td><span class="bd-badge bg-warning">Pending</span></td>
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
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                            <td>15 Jan 2024, 02:30PM</td>
                            <td><a href="leads-details.html" class="title-name">Ethan Wilson</a></td>
                            <td>
                                <span class="table-avatar d-flex gap-10 align-items-center">
                                    <a href="company-details.html" class="company__thumb">
                                        <img src="assets/images/user/3.png" alt="image"></a>
                                    <a class="d-inline-grid no-copy" href="company-details.html">Summit
                                        Inc.
                                        <span>Maplewood, TX</span></a>
                                </span>
                            </td>
                            <td>+1 (555) 345-6789</td>
                            <td>info@summit.com</td>
                            <td><span class="title-name">David Summit</span></td>
                            <td><span class="bd-badge bg-danger">Rejected</span></td>
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
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                            <td>20 Jan 2024, 04:15PM</td>
                            <td><a href="leads-details.html" class="title-name">Olivia Parker</a></td>
                            <td>
                                <span class="table-avatar d-flex gap-10 align-items-center">
                                    <a href="company-details.html" class="company__thumb">
                                        <img src="assets/images/user/4.png" alt="image"></a>
                                    <a class="d-inline-grid no-copy" href="company-details.html">Nexus Corporation
                                        <span>Cedar Hills, FL</span></a>
                                </span>
                            </td>
                            <td>+1 (555) 456-7890</td>
                            <td>contact@nexus.com</td>
                            <td><span class="title-name">Olivia Nexus</span></td>
                            <td><span class="bd-badge bg-info">Contacted</span></td>
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
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                            <td>25 Jan 2024, 09:00AM</td>
                            <td><a href="leads-details.html" class="title-name">Sophia Adams</a></td>
                            <td>
                                <span class="table-avatar d-flex gap-10 align-items-center">
                                    <a href="company-details.html" class="company__thumb">
                                        <img src="assets/images/user/5.png" alt="image"></a>
                                    <a class="d-inline-grid no-copy" href="company-details.html">Stellar Ltd.
                                        <span>Pinecrest, WA</span></a>
                                </span>
                            </td>
                            <td>+1 (555) 567-8901</td>
                            <td>info@stellarltd.com</td>
                            <td><span class="title-name">Christopher Stellar</span></td>
                            <td><span class="bd-badge bg-secondary">Pending</span></td>
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
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                            <td>30 Jan 2024, 03:45PM</td>
                            <td><a href="leads-details.html" class="title-name">Liam Cooper</a></td>
                            <td>
                                <span class="table-avatar d-flex gap-10 align-items-center">
                                    <a href="company-details.html" class="company__thumb">
                                        <img src="assets/images/user/6.png" alt="image"></a>
                                    <a class="d-inline-grid no-copy" href="company-details.html">Horizon LLC
                                        <span>Redwood City, IL</span></a>
                                </span>
                            </td>
                            <td>+1 (555) 678-9012</td>
                            <td>contact@horizon.com</td>
                            <td><span class="title-name">Emily Horizon</span></td>
                            <td><span class="bd-badge bg-primary">Contacted</span></td>
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
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                            <td>05 Feb 2024, 10:30AM</td>
                            <td><a href="leads-details.html" class="title-name">Isabella Turner</a></td>
                            <td>
                                <span class="table-avatar d-flex gap-10 align-items-center">
                                    <a href="company-details.html" class="company__thumb">
                                        <img src="assets/images/user/7.png" alt="image"></a>
                                    <a class="d-inline-grid no-copy" href="company-details.html">Cascade Group
                                        <span>Cascade Falls, GA</span></a>
                                </span>
                            </td>
                            <td>+1 (555) 789-0123</td>
                            <td>info@cascades.com</td>
                            <td><span class="title-name">Nathan Cascade</span></td>
                            <td><span class="bd-badge bg-success">Approved</span></td>
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
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                            <td>25 Jan 2024, 09:00AM</td>
                            <td><a href="leads-details.html" class="title-name">Sophia Adams</a></td>
                            <td>
                                <span class="table-avatar d-flex gap-10 align-items-center">
                                    <a href="company-details.html" class="company__thumb">
                                        <img src="assets/images/user/8.png" alt="image"></a>
                                    <a class="d-inline-grid no-copy" href="company-details.html">Stellar Solutions
                                        <span>Pinecrest, WA</span></a>
                                </span>
                            </td>
                            <td>+1 (555) 567-8901</td>
                            <td>info@stellar.com</td>
                            <td><span class="title-name">Christopher Stellar</span></td>
                            <td><span class="bd-badge bg-secondary">Pending</span></td>
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
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                            <td>10 Feb 2024, 01:20PM</td>
                            <td><a href="leads-details.html" class="title-name">Ethan Williams</a></td>
                            <td>
                                <span class="table-avatar d-flex gap-10 align-items-center">
                                    <a href="company-details.html" class="company__thumb">
                                        <img src="assets/images/user/9.png" alt="image"></a>
                                    <a class="d-inline-grid no-copy" href="company-details.html">Dynamics Inc
                                        <span>Cedar Hills, FL</span></a>
                                </span>
                            </td>
                            <td>+1 (555) 456-7890</td>
                            <td>info@dynamics.com</td>
                            <td><span class="title-name">Olivia Dynamics</span></td>
                            <td><span class="bd-badge bg-info">Contacted</span></td>
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
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                            <td>15 Feb 2024, 11:10AM</td>
                            <td><a href="leads-details.html" class="title-name">Ava Thompson</a></td>
                            <td>
                                <span class="table-avatar d-flex gap-10 align-items-center">
                                    <a href="company-details.html" class="company__thumb">
                                        <img src="assets/images/user/10.png" alt="image"></a>
                                    <a class="d-inline-grid no-copy" href="company-details.html">Quantum ltd.
                                        <span>Quantum Valley, OH</span></a>
                                </span>
                            </td>
                            <td>+1 (555) 901-2345</td>
                            <td>info@quantumltd.com</td>
                            <td><span class="title-name">Daniel Quantum</span></td>
                            <td><span class="bd-badge bg-warning">Pending</span></td>
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
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                            <td>20 Feb 2024, 02:50PM</td>
                            <td><a href="leads-details.html" class="title-name">Noah Hernandez</a></td>
                            <td>
                                <span class="table-avatar d-flex gap-10 align-items-center">
                                    <a href="company-details.html" class="company__thumb">
                                        <img src="assets/images/user/11.png" alt="image"></a>
                                    <a class="d-inline-grid no-copy" href="company-details.html">Apex International
                                        <span>Summit City, AZ</span></a>
                                </span>
                            </td>
                            <td>+1 (555) 012-3456</td>
                            <td>contact@apex.com</td>
                            <td><span class="title-name">Olivia Apex</span></td>
                            <td><span class="bd-badge bg-success">Approved</span></td>
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
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                            <td>25 Feb 2024, 08:30AM</td>
                            <td><a href="leads-details.html" class="title-name">Mia Martinez</a></td>
                            <td>
                                <span class="table-avatar d-flex gap-10 align-items-center">
                                    <a href="company-details.html" class="company__thumb">
                                        <img src="assets/images/user/12.png" alt="image"></a>
                                    <a class="d-inline-grid no-copy" href="company-details.html">Synergy Systems
                                        Ltd.
                                        <span>Harmony Heights, NV</span></a>
                                </span>
                            </td>
                            <td>+1 (555) 123-4567</td>
                            <td>info@synergy.com</td>
                            <td><span class="title-name">Ethan Synergy</span></td>
                            <td><span class="bd-badge bg-info">Contacted</span></td>
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
<div id="addNewLead" class="modal custom-modal fade" role="dialog">
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
                                                <label for="leadName">Lead Name<span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="leadName" id="leadName" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="leadType" class="form-label">Lead Type
                                                    <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <select id="leadType" class="form-select">
                                                    <option>Select Type</option>
                                                    <option value="1">Personal</option>
                                                    <option value="2">Organization</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="companyName" class="form-label">Company Name
                                                    <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <select id="companyName" class="form-select">
                                                    <option>Select Company</option>
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
                                                <label for="value">Value <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="value" id="value" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="currency" class="form-label">Currency
                                                    <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <select id="currency" class="form-select">
                                                    <option>Select Currency</option>
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
                                                <label for="phoneNumber">Mobile Number <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="phoneNumber" id="phoneNumber" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="phoneNumber3">Phone Number</label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="phoneNumber3" id="phoneNumber3" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="emailAddress">Email Address <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="emailAddress" id="emailAddress" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="sourceType">Source Type <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="sourceType" id="sourceType" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="ownerName">Owner Name <span>*</span></label>
                                            </div>
                                            <div class="from__input-box">
                                                <select id="ownerName" class="multiple-img">
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
                                                <label for="TagifyBasic" class="form-label">Basic Tag</label>
                                            </div>
                                            <div class="form__input">
                                                <input id="TagifyBasic" class="form-control form__tags" name="TagifyBasic" value="Tag1," />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label>Lead Description <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <textarea class="form-control" name="name" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form__input-title">
                                            <label>Lead Visibility</label>
                                        </div>
                                        <div class="radio d-flex align-items-center gap-20">
                                            <div class="form-check">
                                                <input name="visibilityRadio" class="form-check-input" type="radio" value="" id="visibilityRadio1" checked="">
                                                <label class="form-check-label" for="visibilityRadio1">Public</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="visibilityRadio" class="form-check-input" type="radio" value="" id="visibilityRadio2" checked="">
                                                <label class="form-check-label" for="visibilityRadio2">Private</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="visibilityRadio" class="form-check-input" type="radio" value="" id="visibilityRadio3" checked="">
                                                <label class="form-check-label" for="visibilityRadio3">Select
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
                                                <input name="statusRadio" class="form-check-input" type="radio" value="" id="statusRadio4" checked>
                                                <label class="form-check-label" for="statusRadio4">Active</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="statusRadio" class="form-check-input" type="radio" value="" id="statusRadio5" checked="">
                                                <label class="form-check-label" for="statusRadio5">Inactive</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="statusRadio" class="form-check-input" type="radio" value="" id="statusRadio6" checked="">
                                                <label class="form-check-label" for="statusRadio6">Pending</label>
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