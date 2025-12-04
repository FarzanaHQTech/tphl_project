<?php
$page_title = "permission";
$page = 'Permission';
$show_breadcrumb = true;
?>
<!-- TOP ROLE INPUT -->
<div class="row mb-4">
    
        <div class="col-lg-2 text-end">
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addNewRole">Add Role</button>

</div>
</div>


<!-- PERMISSION TABLE -->
<div class="table-responsive">
    <table class="table table-bordered perm-table align-middle">
        <thead>
            <tr>
                <th class="thead-secondary text-light" width="25%">Module</th>
                <th class="text-light">Permissions</th>
            </tr>
        </thead>

        <tbody>

            <!-- ROW TEMPLATE -->
            <tr>
                <td class="perm-module ">Role</td>
                <td class="perm-checkbox">
                    <label><span>List</span> <input type="checkbox"></label>
                    <label><span>Create</span> <input type="checkbox"></label>
                    <label><span>Show</span> <input type="checkbox"></label>
                    <label><span>Edit</span> <input type="checkbox"></label>
                </td>
            </tr>

            <tr>
                <td class="perm-module">Permission</td>
                <td class="perm-checkbox">
                    <label><span>List</span> <input type="checkbox"></label>
                    <label><span>Create</span> <input type="checkbox"></label>
                    <label><span>Show</span> <input type="checkbox"></label>
                    <label><span>Edit</span> <input type="checkbox"></label>
                </td>
            </tr>

            <tr>
                <td class="perm-module">Location</td>
                <td class="perm-checkbox">
                    <label><span>List</span> <input type="checkbox"></label>
                    <label><span>Create</span> <input type="checkbox"></label>
                    <label><span>Show</span> <input type="checkbox"></label>
                    <label><span>Edit</span> <input type="checkbox"></label>
                </td>
            </tr>

            <tr>
                <td class="perm-module">Product</td>
                <td class="perm-checkbox">
                    <label><span>List</span> <input type="checkbox"></label>
                    <label><span>Create</span> <input type="checkbox"></label>
                    <label><span>Show</span> <input type="checkbox"></label>
                    <label><span>Edit</span> <input type="checkbox"></label>
                    <label><span>ProductDelete</span> <input type="checkbox"></label>
                </td>
            </tr>

            <tr>
                <td class="perm-module">Customer</td>
                <td class="perm-checkbox">
                    <label><span>List</span> <input type="checkbox"></label>
                    <label><span>Create</span> <input type="checkbox"></label>
                    <label><span>Show</span> <input type="checkbox"></label>
                    <label><span>Edit</span> <input type="checkbox"></label>
                </td>
            </tr>

            <tr>
                <td class="perm-module">Vendor</td>
                <td class="perm-checkbox">
                    <label><span>List</span> <input type="checkbox"></label>
                    <label><span>Create</span> <input type="checkbox"></label>
                    <label><span>Show</span> <input type="checkbox"></label>
                    <label><span>Edit</span> <input type="checkbox"></label>
                </td>
            </tr>

            <tr>
                <td class="perm-module">Department</td>
                <td class="perm-checkbox">
                    <label><span>List</span> <input type="checkbox"></label>
                    <label><span>Create</span> <input type="checkbox"></label>
                    <label><span>Show</span> <input type="checkbox"></label>
                    <label><span>Edit</span> <input type="checkbox"></label>
                </td>
            </tr>

        </tbody>
    </table>
</div>



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
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="role_name" placeholder="New Role Name" required>
                            </div>
                            <div class="col-lg-12">
                                <select class="form-select" name="permission_id" required>
                                    <option value="">Select Permission</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Manager</option>
                                    <option value="3">Employee</option>
                                </select>
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
