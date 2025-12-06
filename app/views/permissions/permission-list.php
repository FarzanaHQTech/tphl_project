<?php
$page_title = "permission";
$page = 'Role & Permission';
$show_breadcrumb = true;
?>

<!-- TOP ROLE INPUT -->
<div class="row mb-4">

    <div class="col-lg-12 text-end">
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addNewRole">Add Role</button>

    </div>
</div>

<!-- PERMISSION TABLE -->
<div class="table-responsive">
    <table class="table table-bordered perm-table align-middle">
        <thead>
            <tr>
                <th class="thead-secondary text-light" width="25%">Role</th>
                <th class="text-light">Permissions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roles as $role): ?>
                <tr>
                    <td class="perm-module">
                        <?= htmlspecialchars($role["role_name"]) ?>
                    </td>

                    <td class="perm-checkbox">
                        <?php if (!empty($role["permissions"])): ?>
                            <?php foreach ($role["permissions"] as $perm_id): ?>
                                <?php
                                $perm_name = '';
                                foreach ($permissions as $p) {
                                    if ($p['id'] == $perm_id) {
                                        $perm_name = $p['name'];
                                        break;
                                    }
                                }
                                ?>
                                <label><span><?= htmlspecialchars($perm_name) ?></span></label>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <span class="text-muted">No Permissions</span>
                        <?php endif; ?>

                        <!-- Edit button always visible -->
                        <button class="btn btn-primary ms-2" 
                                data-bs-toggle="modal" 
                                data-bs-target="#editRoleModal<?= $role['role_id'] ?>">
                            Edit
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modals -->
<?php foreach ($roles as $role): ?>
<div class="modal fade" id="editRoleModal<?= $role['role_id'] ?>" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Role: <?= htmlspecialchars($role['role_name']) ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="<?= $GLOBALS['base_url'] ?>/update-role" method="POST">
                    <input type="hidden" name="id" value="<?= $role['role_id'] ?>">

                    <div class="mb-3">
                        <label>Role Name</label>
                        <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($role['role_name']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="permission" class="col-12 col-form-label">Permissions</label>
                        <select multiple name="permissions[]" class="selectpicker w-100" data-live-search="true">
                            <?php foreach ($permissions as $perm): ?>
                                <option value="<?= $perm['id'] ?>" 
                                    <?= in_array($perm['id'], $role['permissions']) ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($perm['name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="text-center mt-2">
                        <button type="submit" class="btn btn-success">Update Role</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>


<!-- add new client profile modal -->
<div class="modal fade" id="addNewRole" tabindex="-1" aria-labelledby="addNewRoleLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewRoleLabel">Add New Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= $GLOBALS['base_url'] ?>/store-role" method="POST">
                    <div class="card__wrapper mb-20">
                        <div class="row g-20 gy-20 align-items-center justify-content-center">
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="name" placeholder="New Role Name" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="permission" class="col-12 col-form-label">Permissions</label>
                                <div class="dropdown bootstrap-select show-tick w-100 show dropup">
                                    <select multiple="multiple" name="permissions[]" class="selectpicker w-100 " data-live-search="true" style="background-color: transparent!important; ">
                                        <?php foreach ($permissions as $permission): ?>
                                            <option value="<?= $permission['id'] ?>">
                                                <?= $permission['name'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
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
</div>


<!-- edit  -->
<!-- <div class="modal fade" id="editRole" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="editRoleForm">
                    <input type="hidden" name="id" id="edit_role_id">
                    <input type="text" name="name" id="edit_role_name" class="form-control mb-3" required>

                    <label>Permissions</label>
                    <select multiple name="permissions[]" id="edit_role_permissions" class="selectpicker w-100" data-live-search="true">
                        <?php foreach ($permissions as $perm): ?>
                            <option value="<?= $perm['id'] ?>"><?= $perm['name'] ?></option>
                        <?php endforeach; ?>
                    </select>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary">Update Role</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->




<style>
    /* Remove background from generated button */
    .bootstrap-select .dropdown-toggle {
        background-color: transparent !important;
        border: 1px solid #ced4da !important;
        color: #333 !important;
        padding: 0 12px !important;
        border-radius: 6px !important;
    }

    /* Placeholder text color */
    .bootstrap-select .filter-option-inner-inner {
        color: #6c757d !important;
    }

    /* Remove focus blue outline */
    .bootstrap-select .dropdown-toggle:focus,
    .bootstrap-select .dropdown-toggle:active {
        outline: none !important;
        box-shadow: none !important;
    }

    /* Dropdown design better */
    .bootstrap-select .dropdown-menu {
        border-radius: 6px;
    }

    /* Selected items tick color */
    .bootstrap-select .dropdown-menu .selected span.check-mark {
        color: #0d6efd !important;
    }
</style>