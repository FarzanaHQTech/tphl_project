<?php
$page_title = "designation Page";
$page = 'designation';
$addPage = true;
$show_breadcrumb = true;

?>

<?php if (!empty($_SESSION['success']) || !empty($_SESSION['error'])): ?>
    <div class="message-swiper-container">
        <div class="swiper-wrapper">

            <?php if (!empty($_SESSION['success'])): ?>
                <div class="swiper-slide success-slide">
                    <?= $_SESSION['success']; ?>
                </div>
            <?php unset($_SESSION['success']);
            endif; ?>

            <?php if (!empty($_SESSION['error'])): ?>
                <div class="swiper-slide error-slide">
                    <?= $_SESSION['error']; ?>
                </div>
            <?php unset($_SESSION['error']);
            endif; ?>

        </div>
    </div>
<?php endif; ?>

<div class="breadcrumb__btn my-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDesignation">Add Designation</button>
</div>
<div class="row">
    <div class="col-xxl-12">
        <div class="card__wrapper">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="table__wrapper table-responsive">
                        <table class="table mb-20 hover multiple_tables">
                            <thead>
                                <tr class="table__title">
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table__body">
                                <?php foreach ($designations as $desg): ?>
                                    <tr>
                                        <td class="table__designation"><?= $desg['designation_name'] ?></td>
                                        <td class="table__department"><?= $desg['department_name'] ?></td>
                                        <td class="table__icon-box">
                                            <div class="d-flex align-items-center justify-content-start gap-10">


                                                <button type="button"
                                                    class="table__icon edit"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editDesignation"
                                                    data-id="<?= $desg['id'] ?>"
                                                    data-name="<?= $desg['designation_name'] ?>"
                                                    data-department="<?= $desg['department_id'] ?>">
                                                    <i class="fa-sharp fa-light fa-pen"></i>
                                                </button>


                                                <button class="removeBtnCust table__icon delete"
                                                    data-id="<?= $desg['id'] ?>"
                                                    data-name="<?= $desg['designation_name'] ?>"
                                                    data-action="delete-designation">
                                                    <i class="fa-regular fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- New Designation Modal Start -->
<div class="modal fade" id="addDesignation" tabindex="-1" aria-labelledby="addDesignationLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDesignationLabel">Add New Designation</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <div class="employee__info">
                    <form action="<?= $GLOBALS['base_url'] ?>/store-designation" method="POST">

                        <div class="card__wrapper mb-20">
                            <div class="row g-20 gy-20 align-items-center justify-content-center">
                                <div class="col-lg-12">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="designation">Designation <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="name" id="name" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label>Employee Department <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <select class="form-control" name="department_id">

                                                <?php foreach ($departments as $dept): ?>

                                                    <option value="<?= $dept['id'] ?>"><?= $dept['name'] ?></option>
                                                <?php endforeach ?>
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
<!-- New Designation Modal End -->

<!-- Designations Edit Modal Start -->
<div class="modal fade" id="editDesignation" tabindex="-1" aria-labelledby="editDesignationLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDesignationLabel">Edit Designation</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark-large"></i>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?= $GLOBALS['base_url'] ?>/update-designation" method="POST">
                    <input type="hidden" name="id" id="edit_designation_id">


                    <div class="card__wrapper mb-20">
                        <div class="row g-20 gy-20">

                            <!-- Designation Name -->
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="edit_name">Designation <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input type="text" class="form-control" name="name" id="edit_desgination" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Department -->
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="edit_department_id">Department <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <select class="form-control" name="department_id" id="edit_department_id" required>
                                            <option value="">Select Department</option>

                                            <!-- PHP Loop -->
                                            <?php foreach ($departments as $dept): ?>
                                                <option value="<?= $dept['id'] ?>"><?= $dept['name'] ?></option>
                                            <?php endforeach; ?>

                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="submit__btn text-center">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<!-- Designations Edit Modal End -->


<script>
    const base_url = "<?= $GLOBALS['base_url'] ?>"; // PHP outputs the correct base URL



    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById('editDesignation');

        modal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;

            const id = button.getAttribute('data-id');
            const name = button.getAttribute('data-name');
            const departmentId = button.getAttribute('data-department'); // <-- important

            document.getElementById('edit_designation_id').value = id;
            document.getElementById('edit_desgination').value = name;

            // Set selected department
            document.getElementById('edit_department_id').value = departmentId;
        });
    });
</script>