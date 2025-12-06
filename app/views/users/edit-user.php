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

        <form action="<?= $GLOBALS['base_url'] ?>/store-user" method="POST" enctype="multipart/form-data">
            <div class="card__wrapper mb-20">
                <div class="row g-20 align-items-center justify-content-center">

                    <!-- Full Name -->
                    <div class="col-lg-6 mb-3">
                        <label for="fullName">Full Name <span>*</span></label>
                        <input class="form-control" name="full_name" id="full_Name" type="text" required>
                    </div>

                    <!-- Contact Number -->
                    <div class="col-lg-6 mb-3">
                        <label for="contactnumber">Contact Number <span>*</span></label>

                        <input class="form-control" minlength="11" maxlength="11" name="phone" min="11" max="11"  id="contactnumber" type="text" required >
                    </div>

                    <!-- Email -->
                    <div class="col-lg-6 mb-3">
                        <label for="email">Email <span>*</span></label>
                        <input class="form-control" name="email" id="email" type="email" required>
                    </div>

                    <!-- Designation -->
                    <div class="col-lg-6 mb-3">
                        <label for="designation">Designation <span>*</span></label>
                        <input class="form-control" name="designation" id="designation" type="text" required>
                    </div>

                    <!-- Address -->
                    <div class="col-lg-12 mb-3">
                        <label for="address">Address <span>*</span></label>
                        <textarea class="form-control" name="address" id="address" required></textarea>
                    </div>

                    <!-- NID -->
                    <div class="col-lg-6 mb-3">
                        <label for="nid">NID Number <span>*</span></label>
                        <input class="form-control" name="nid" id="nid" type="text" required>
                    </div>
                    <!-- Role (dynamic from DB) -->
                    <div class="col-lg-6 mb-3">
                        <label for="role">Role <span>*</span></label>
                        <select class="form-control" name="role_id" id="role" required>
                            <option value="">Select Role</option>
                            <?php foreach ($roles as $role): ?>
                                <option value="<?= $role['id'] ?>"><?= $role['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                     <!-- Designation -->
                    <div class="col-lg-6 mb-3">
                        <label for="designation">First Media Link<span>*</span></label>
                        <input class="form-control" name="media_link1" id="media_link1" type="text" required>
                    </div>
                     <!-- media_link2 -->
                    <div class="col-lg-6 mb-3">
                        <label for="media_link1">Second Media Link <span>*</span></label>
                        <input class="form-control" name="media_link2" id="media_link2" type="text" required>
                    </div>

                    <!-- Password -->
                    <div class="col-lg-6 mb-3">
                        <label for="password">Password <span>*</span></label>
                        <input class="form-control" name="password" id="password" type="password" required>
                    </div>

                    <!-- Photo -->
                    <div class="col-lg-6 mb-3">
                        <label for="userphoto">User Photo (100px × 100px)</label>
                        <input class="form-control" name="userphoto" id="userphoto" type="file" accept="image/*">
                    </div>

                </div>
            </div>

            <div class="submit__btn text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</div>

</div>