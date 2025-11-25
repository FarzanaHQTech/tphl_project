<?php
$page_title = "users lists ";
$page = 'User Lists';
$show_breadcrumb = true;
$content = '
<div class="row">
    <div class="col-xxl-7">
        <div class="card__wrapper height-equal">
            <div class="employee__profile-single-box p-relative">
                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                    <h5 class="card__heading-title">Personal Information</h5>
                    <a data-bs-target="#profile__info" data-bs-toggle="modal" class="edit-icon" href="#">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                </div>
                <div class="profile-view d-flex flex-wrap justify-content-between align-items-start">
                    <div class="d-flex flex-wrap align-items-start gap-20">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#"><img src="assets/images/avatar/avatar1.png" alt="User Image"></a>
                            </div>
                        </div>
                        <div class="profile-info">
                            <h3 class="user-name mb-15">Ethan Mitchell</h3>
                            <h6 class="text-muted mb-5">UI/UX Design Team</h6>
                            <span class="d-block text-muted mb-5">Web Designer</span>
                            <h6 class="small employee-id text-black mb-5">User ID : MD-0001</h6>
                            <span class="d-block text-muted mb-20">Date of Join : 05 01 2024</span>
                            <div class="employee-msg"><a class="btn btn-primary" href="chat.html">Send Message</a></div>
                        </div>
                    </div>
                    <div class="personal-info-wrapper pr-20">
                        <ul class="personal-info">
                            <li>
                                <div class="title">Phone:</div>
                                <div class="text text-link-hover"><a href="tel:+18006427676"> +1(800) 642 7676</a></div>
                            </li>
                            <li>
                                <div class="title">Email:</div>
                                <div class="text text-link-hover"><a href="mailto:ethanmitchell@example.com">ethanmitchell@example.com</a></div>
                            </li>
                            <li>
                                <div class="title">Birthday:</div>
                                <div class="text">28 December 1992</div>
                            </li>
                            <li>
                                <div class="title">Address:</div>
                                <div class="text">100 Terminal, Fort Lauderdale, Miami 33315, United States</div>
                            </li>
                            <li>
                                <div class="title">Gender:</div>
                                <div class="text">Male</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-5">
        <div class="card__wrapper height-equal">
            <div class="employee__profile-single-box p-relative">
                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                    <h5 class="card__heading-title">Emergency Contact</h5>
                    <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#emergency_contact_modal">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="emergency-contact">
                            <h6 class="card__sub-title mb-10">Primary Contact</h6>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Name:</div>
                                    <div class="text">John Doe</div>
                                </li>
                                <li>
                                    <div class="title">Relationship:</div>
                                    <div class="text">Father</div>
                                </li>
                                <li>
                                    <div class="title">Phone:</div>
                                    <div class="text text-link-hover"><a href="tel:9876543210">9876543210</a>, <a href="tel:9876543210">9876543210</a></div>
                                </li>
                                <li>
                                    <div class="title">Email:</div>
                                    <div class="text text-link-hover"><a href="mailto:father@example.com">father@example.com</a></div>
                                </li>
                                <li>
                                    <div class="title">Address:</div>
                                    <div class="text">150, New York</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="emergency-contact">
                            <h6 class="card__sub-title mb-10">Secondary Contact</h6>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Name:</div>
                                    <div class="text">Jane Doe</div>
                                </li>
                                <li>
                                    <div class="title">Relationship:</div>
                                    <div class="text">Mother</div>
                                </li>
                                <li>
                                    <div class="title">Phone:</div>
                                    <div class="text text-link-hover"><a href="tel:9876543211">9876543211</a>, <a href="tel:9876543211">9876543211</a></div>
                                </li>
                                <li>
                                    <div class="title">Email:</div>
                                    <div class="text text-link-hover"><a href="mailto:mother@example.com">mother@example.com</a></div>
                                </li>
                                <li>
                                    <div class="title">Address:</div>
                                    <div class="text">150, New York</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
>

</div>';
include "../layouts/master.php";
?>