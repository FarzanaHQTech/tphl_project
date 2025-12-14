<?php
$page_title = "show user ";
$page = 'Show user';
$show_breadcrumb = true;

?>
<div class="row">

    <div class="col-xxl-7">
        <div class="card__wrapper height-equal">
            <div class="user__profile-single-box p-relative">
                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                    <h5 class="card__heading-title">Personal Information</h5>
                    <a data-bs-target="#profile__info"  class="edit-icon" href="<?= $GLOBALS['base_url'] ?>/edit-user/<?= $user['id'] ?>">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                </div>
                <div class="profile-view d-flex flex-wrap justify-content-between align-items-start">
                    <div class="d-flex flex-wrap align-items-start gap-20">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#"><img src="<?=getUserProfileImage($user) ?>" alt="User Image"></a>
                            </div>
                        </div>
                        <div class="profile-info">
                            <h3 class="user-name mb-15"><?= $user['full_name'] ?? '' ?></h3>
                            <h6 class="text-muted mb-5"><?= $user['department_name'] ?? '' ?></h6>
                            <span class="d-block text-muted mb-5"><?= $user['designation_name'] ?? '' ?></span>
                            <h6 class="small user-id text-black mb-5">user ID : MD-0<?= $user['id'] ?></h6>
                            
                        </div>
                    </div>
                    <div class="personal-info-wrapper pr-20">
                        <ul class="personal-info">
                            <li>
                                <div class="title">Phone:</div>
                                <div class="text text-link-hover"><a href="tel:<?= $user['phone'] ?>"> <?= $user['phone'] ?></a></div>
                            </li>
                            <li>
                                <div class="title">Email:</div>
                                <div class="text text-link-hover"><a href="mailto:<?= $user['email'] ?>"><?= $user['email'] ?></a></div>
                            </li>
                            <li>
                                <div class="title">NID Number:</div>
                                <div class="text text-link-hover"><a href="mailto:<?= $user['nid'] ?>"><?= $user['nid'] ?></a></div>
                            </li>
                           
                            <li>
                                <div class="title">Address:</div>
                                <div class="text"><?= $user['address'] ?></div>
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

</div>