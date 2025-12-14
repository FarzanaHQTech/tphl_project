<?php
$page_title = "Edit User";
$page = 'Edit User';
$show_breadcrumb = true;

?>


<div class="row">
    <div class="col-xxl-12 col-xl-12 col-lg-12">

        <div class="card__title-wrap mb-20">
            <h5 class="card__heading-title">Edit User</h5>
        </div>

        <form action="<?= $GLOBALS['base_url'] ?>/update-user/<?= $user['id'] ?>" method="POST" enctype="multipart/form-data">

            <div class="card__wrapper mb-20">
                <div class="row g-20 align-items-center justify-content-center">

                    <!-- Full Name -->
                    <div class="col-lg-6 mb-3">
                        <label for="fullName">Full Name <span>*</span></label>
                        <input class="form-control" name="full_name" id="full_Name" type="text" value="<?= htmlspecialchars($user['full_name']) ?>" required>
                    </div>

                    <!-- Contact Number -->
                    <div class="col-lg-6 mb-3">
                        <label for="contactnumber">Contact Number <span>*</span></label>
                        <input class="form-control" minlength="11" maxlength="11" name="phone" id="contactnumber" type="text" value="<?= htmlspecialchars($user['phone']) ?>" required>
                    </div>

                    <!-- Email -->
                    <div class="col-lg-6 mb-3">
                        <label for="email">Email <span>*</span></label>
                        <input class="form-control" name="email" id="email" type="email" value="<?= htmlspecialchars($user['email']) ?>" required>
                    </div>

                    <!-- Designation -->
                    <div class="col-lg-6 mb-3">
                        <label for="designation">Designation <span>*</span></label>
                        <select class="form-control" name="designation_id" id="designation" required>
                            <option value="">Select Designation</option>
                            <?php foreach ($designations as $d): ?>
                                <option value="<?= $d['id'] ?>" <?= ($user['designation_id'] == $d['id'] ? 'selected' : '') ?>><?= $d['designation_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- Role -->
                    <div class="col-lg-6 mb-3">
                        <label for="role">Role <span>*</span></label>
                        <select class="form-control" name="role_id" id="role" required>
                            <option value="">Select Role</option>
                            <?php foreach ($roles as $role): ?>
                                <option value="<?= $role['id'] ?>" <?= ($user['role_id'] == $role['id'] ? 'selected' : '') ?>><?= $role['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    



                    <!-- Address -->
                    <div class="col-lg-6 mb-3">
                        <label for="address">Address <span>*</span></label>
                        <textarea class="form-control" name="address" id="address" required><?= htmlspecialchars($user['address']) ?></textarea>
                    </div>

                    <!-- NID / Passport -->
                    <div class="col-lg-6 mb-3">
                        <label for="nid">NID <span>*</span></label>
                        <input class="form-control" name="nid" id="nid" type="text" value="<?= htmlspecialchars($user['nid']) ?>" required>
                    </div>

                    <!-- NID / Passport -->
                    <div class="col-lg-6 mb-3">
                        <label for="nid">Password<span>*</span></label>
                        <input class="form-control" name="password" id="password" type="password" value="<?= htmlspecialchars($user['password']) ?>" required>
                    </div>





                    <!-- Photo -->
                    <div class="col-lg-12">
                        <label for="photo">Employee Photo (300px*300px)</label>
                        <input class="form-control" type="file" name="photo" id="photo">


                        <img src="<?= getUserProfileImage($user) ?>" width="100" class="mt-2">
                    </div>

                    <div class="col-12 text-center mt-3">
                        <button class="btn btn-primary">Update Employee</button>
                    </div>



                    <!-- Media Links -->


                </div>
            </div>


    </div>