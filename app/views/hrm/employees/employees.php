<?php
$page_title = "employees lists ";
$page = 'Employee Lists';
$show_breadcrumb = true;

?>
<form method="GET" action="">
    <div class="row g-20 mb-20 justify-content-between align-items-end">

        <!-- Search -->
        <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-4">
            <div class="card__wrapper">
                <div class="search-box">
                    <input type="text" class="form-control" name="q" id="employeeName"
                        placeholder="Employee Name / Username /ID"
                        value="<?= htmlspecialchars($searchTerm ?? '') ?>">
                </div>
            </div>
        </div>

        <!-- Department Filter -->
        <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-4">
            <div class="card__wrapper">
                <div class="from__input-box">
                    <select class="form-control" name="department_id">
                        <option value="">Employee Department</option>
                        <?php foreach ($departments as $department): ?>
                            <option value="<?= $department['id'] ?>" 
                                <?= $selectedDepartment == $department['id'] ? 'selected' : '' ?>>
                                <?= $department['name'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
        </div>

        <!-- Submit -->
        <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-4">
        <div class="card__wrapper">
            <div class="d-flex align-items-center justify-content-between gap-15">
            <button type="submit" class="btn btn-secondary"> Filter</button>

                <a type="button" class="btn btn-primary w-100" href="<?= $GLOBALS['base_url'] ?>/create-employee">
                    Add Employee</a>
            </div>
        </div>
    </div>

    </div>
</form>



<div class="row">
    <?php foreach($employees as $employee): ?>
    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
        <div class="card__wrapper">
            <div class="employee__wrapper text-center">
                <div class="employee__thumb mb-15">
                    <a href="index.php?page=employee-profile">
                        <img src="<?= getImage('employees',$employee['photo']) ?? '' ?>" alt="image"></a>
                </div>
                <div class="employee__content">
                    <div class="employee__meta mb-15">
                        <h4 class="mb-8"><a href="index.php?page=employee-profile"><?= $employee['full_name'] ?? '' ?></a></h4>
                        <p><?= $employee['department_name'] ?></p>
                    </div>
                    <div class="common-social mb-20">
                        <a href="<?= $employee['social_media1'] ?>"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="<?= $employee['social_media2'] ?>"><i class="fa-brands fa-x-twitter"></i></a>
                      
                    </div>
                    <div class="employee__btn">
                        <div class="d-flex align-items-center justify-content-center gap-15">
                            <a class="btn btn-outline-theme-border" href="tel:<?= $employee['phone'] ?>">Call</a>
                            <a class="btn btn-outline-theme-border" href="index.php?page=employee-profile">View</a>
                            <!-- <a href="< $GLOBALS['base_url'] ?>/edit-employee?id=< $employee['id'] ?>">Edit</a> -->
                            <a class="btn btn-outline-theme-border"  href="<?= $GLOBALS['base_url'] ?>/edit-employee/<?= $employee['id'] ?>">Edit</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach ?>


    
    <div class="d-none d-flex justify-content-center mt-20 mb-20">
        <button type="button" class="btn btn-primary">Load More</button>
    </div>
</div>


