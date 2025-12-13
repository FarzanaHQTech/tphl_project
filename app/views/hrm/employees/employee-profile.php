<?php
$page_title = "show employee ";
$page = 'Show Employee';
$show_breadcrumb = true;

?>
<div class="row">

    <div class="col-xxl-7">
        <div class="card__wrapper height-equal">
            <div class="employee__profile-single-box p-relative">
                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                    <h5 class="card__heading-title">Personal Information</h5>
                    <a data-bs-target="#profile__info"  class="edit-icon" href="<?= $GLOBALS['base_url'] ?>/edit-employee/<?= $employee['id'] ?>">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                </div>
                <div class="profile-view d-flex flex-wrap justify-content-between align-items-start">
                    <div class="d-flex flex-wrap align-items-start gap-20">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#"><img src="<?= getImage('employees',$employee['photo']) ?>" alt="User Image"></a>
                            </div>
                        </div>
                        <div class="profile-info">
                            <h3 class="user-name mb-15"><?= $employee['full_name'] ?? '' ?></h3>
                            <h6 class="text-muted mb-5"><?= $employee['department_name'] ?? '' ?></h6>
                            <span class="d-block text-muted mb-5"><?= $employee['designation_name'] ?? '' ?></span>
                            <h6 class="small employee-id text-black mb-5">Employee ID : MD-0<?= $employee['employee_id'] ?></h6>
                            <span class="d-block text-muted mb-20">Date of Join : <?= $employee['joining_date'] ?  date('d F, Y', strtotime($employee['joining_date'])) : '' ?></span>
                            <div class="employee-msg"><a class="btn btn-primary" href="chat.html">Send Message</a></div>
                        </div>
                    </div>
                    <div class="personal-info-wrapper pr-20">
                        <ul class="personal-info">
                            <li>
                                <div class="title">Phone:</div>
                                <div class="text text-link-hover"><a href="tel:<?= $employee['phone'] ?>"> <?= $employee['phone'] ?></a></div>
                            </li>
                            <li>
                                <div class="title">Email:</div>
                                <div class="text text-link-hover"><a href="mailto:<?= $employee['email'] ?>"><?= $employee['email'] ?></a></div>
                            </li>
                            <li>
                                <div class="title">Birthday:</div>
                                <div class="text"><?= $employee['dob'] ? date('d F,Y',strtotime($employee['dob'])) : ''?></div>
                            </li>
                            <li>
                                <div class="title">Address:</div>
                                <div class="text"><?= $employee['address'] ?></div>
                            </li>
                            <!-- <li>
                                <div class="title">Gender:</div>
                                <div class="text">Male</div>
                            </li> -->
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
                    <a href="<?= $GLOBALS['base_url'] ?>/edit-employee/<?= $employee['id'] ?>" class="edit-icon"  data-bs-target="#emergency_contact_modal">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="emergency-contact">
                            <h6 class="card__sub-title mb-10">Primary Contact</h6>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Father Name:</div>
                                    <div class="text"><?= $employee['father_name'] ?></div>
                                </li>
                              
                                <li>
                                    <div class="title">Phone:</div>
                                    <div class="text text-link-hover"><a href="tel:<?= $employee['emergency_contact']?>"><?= $employee['emergency_contact']?></a>, <a href="tel:<?= $employee['emergency_contact']?>"><?= $employee['emergency_contact']?></a></div>
                                </li>
                                
                                <li>
                                    <div class="title">Address:</div>
                                    <div class="text"><?= $employee['address'] ?></div>
                                </li>
                            </ul>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6">
        <div class="card__wrapper">
            <div class="employee__profile-single-box p-relative">
                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                    <h5 class="card__heading-title">Education Qualification</h5>
                    <a href="<?= $GLOBALS['base_url'] ?>/edit-employee/<?= $employee['id'] ?>" class="edit-icon"  data-bs-target="#education__info">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                </div>
                <div class="education__box">
                    <?= $employee['qualification'] ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6">
        <div class="card__wrapper">
            <div class="employee__profile-single-box p-relative">
                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                    <h5 class="card__heading-title">Experience Details</h5>
                    <a href="<?= $GLOBALS['base_url'] ?>/edit-employee/<?= $employee['id'] ?>" class="edit-icon"  data-bs-target="#experience__info">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                </div>
                <div class="education__box">
                 <?=  $employee['experience'] ?> 
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-4">
        <div class="card__wrapper">
            <div class="employee__profile-single-box p-relative">
                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                    <h5 class="card__heading-title">Bank Account</h5>
                    <a href="<?= $GLOBALS['base_url'] ?>/edit-employee/<?= $employee['id'] ?>" class="edit-icon"  data-bs-target="#bank__account__info">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                </div>
                <div class="personal-info-wrapper bank__account">
                    <ul class="personal-info">
                        <li>
                            <div class="title">Account Holder Name:</div>
                            <div class="text"><?= $employee['account_holder_name'] ?></div>
                        </li>
                        <li>
                            <div class="title">Account Number:</div>
                            <div class="text"><?= $employee['account_number'] ?></div>
                        </li>
                        <li>
                            <div class="title">Bank Name:</div>
                            <div class="text"><?= $employee['bank_name'] ?></div>
                        </li>
                        <li>
                            <div class="title">Branch Name:</div>
                            <div class="text"><?= $employee['branch_name'] ?></div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-4">
        <div class="card__wrapper">
            <div class="employee__profile-single-box p-relative">
                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                    <h5 class="card__heading-title">Passport Information</h5>
                    <a href="<?= $GLOBALS['base_url'] ?>/edit-employee/<?= $employee['id'] ?>" class="edit-icon"  data-bs-target="#passport__info">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                </div>
                <div class="personal-info-wrapper bank__account">
                    <ul class="personal-info">
                        <li>
                            <div class="title">Passport Number:</div>
                            <div class="text"><?= $employee['pass_num'] ?? 'N/A' ?></div>
                        </li>
                        <li>
                            <div class="title">Nationality:</div>
                            <div class="text">Bangladeshi</div>
                        </li>
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-4">
        <div class="card__wrapper">
            <div class="employee__profile-single-box p-relative">
                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                    <h5 class="card__heading-title">Social Profile</h5>
                    <a href="<?= $GLOBALS['base_url'] ?>/edit-employee/<?= $employee['id'] ?>" class="edit-icon"  data-bs-target="#social__info">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                </div>
                <div class="personal-info-wrapper bank__account">
                    <ul class="personal-info">
                        <li>
                            <div class="title">Facebook:</div>
                            <div class="text text-link-hover"><a href="<a href="<?= formatUrl($employee['social_media1']) ?>>Link</a></div>
                        </li>
                        <li>
                            <div class="title">LinkedIn:</div>
                            <div class="text text-link-hover"><a href="<?= formatUrl($employee['social_media2']) ?>">Link</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>