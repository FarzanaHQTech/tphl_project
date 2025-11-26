<?php
$page_title = "permission";
$page = 'Permission';
$show_breadcrumb = true;
?>
<!-- TOP ROLE INPUT -->
<div class="row mb-4">
    <div class="col-lg-10">
        <input type="text" class="form-control" placeholder="New Role Name">
    </div>
    <div class="col-lg-2 text-end">
        <button class="btn btn-primary w-100">Create Role</button>
    </div>
</div>

<!-- ROLE SELECT (Optional) -->
<div class="row mb-4">
    <div class="col-lg-12">
        <select class="form-select">
            <option selected>Select Role</option>
            <option>Admin</option>
            <option>Manager</option>
            <option>Employee</option>
        </select>
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