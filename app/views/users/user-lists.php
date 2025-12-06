<?php
$page_title = "User List";  
$page= 'user-lists';
$show_breadcrumb = false;
?>

<form method="GET" action="">
    <div class="row g-20 mb-20 justify-content-between align-items-end">

        <!-- Search by Name / Phone / Email -->
        <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-4">
            <div class="card__wrapper">
                <div class="search-box">
                    <input type="text" class="form-control" name="q" placeholder="User Name / Phone / Email" 
                           value="<?= htmlspecialchars($searchTerm ?? '') ?>">
                </div>
            </div>
        </div>

        <!-- Role Filter -->
        <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-4">
            <div class="card__wrapper">
                <div class="from__input-box">
                    <select class="form-control" name="role">
                        <option value="">All Roles</option>
                        <?php foreach ($roles as $role): ?>
                            <option value="<?= $role['id'] ?>" <?= (isset($selectedRole) && $selectedRole == $role['id']) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($role['name']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-4">
            <div class="card__wrapper">
                <div class="d-flex align-items-center justify-content-between gap-15">
                    <button type="submit" class="btn btn-secondary">Filters</button>
                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                            data-bs-target="#addNewEmployee">
                        Add Users
                    </button>
                </div>
            </div>
        </div>

    </div>
</form>



<div class="row">
   <?php if (!empty($users)): ?>
    <?php foreach ($users as $user): ?>
     
        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
            <div class="card__wrapper">
                <div class="employee__wrapper text-center">
                    <div class="employee__thumb mb-15">
                      
                         <img src=  "<?= getImage('users',$user['photo'])?>" alt="img not found">
                    </div>
                    <div class="employee__content">
                        <div class="employee__meta mb-15">
                            <h4 class="mb-8"><?= htmlspecialchars($user['full_name'] ?: "No Name") ?></h4>
                            <p><?= htmlspecialchars($user['designation'] ?: "No Designation") ?></p>
                        </div>
                        <div class="common-social mb-20">
                            <a href="<?= $user['media_link1'] ?>"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="<?= $user['media_link1'] ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        <div class="employee__btn">
                            <div class="d-flex align-items-center justify-content-center gap-15">
                                <a class="btn btn-outline-theme-border" href="tel:<?= htmlspecialchars($user['phone']) ?>">Call</a>
                                <a class="btn btn-outline-theme-border"
                                   href="<?= $base_url ?>/user-profile?id=<?= $user['id'] ?>">View</a>
                                <a class="btn btn-outline-theme-border"
                                   href="<?= $base_url ?>/edit-user?id=<?= $user['id'] ?>">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p class="text-center text-danger">No Users Found</p>
<?php endif; ?>

</div>


<!-- Pagination -->
<div class="row mt-4">
    <div class="col-12 d-flex justify-content-center">
      <?= paginateLinksSecondary($base_url . "/user-lists", $currentPage, $totalPages); ?>


    </div>
</div>

