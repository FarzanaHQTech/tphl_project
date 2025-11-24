<?php
$page_title = "product page";
$page = 'Products';
$show_breadcrumb = true;
$content = '
    <div class="col-xxl-12">
                        <div class="card__wrapper">
                            <div class="table__wrapper table-responsive">
                                <table class="table mb-20 multiple_tables">
                                    <thead>
                                        <tr class="table__title table__sort">
                                            <th class="no-sort sorting"><input type="checkbox" id="selectall"></input>
                                            </th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Message</th>
                                            <th>Designation</th>
                                       
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table__body">
                                        <tr>
                                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                                            <td><img src="https://admin.dpremiumhomes.com/_next/image?url=https%3A%2F%2Fapi.dpremiumhomes.com%2Fstorage%2Fproducts%2F1752859894_687a84f68525a_Project%20Image.png&w=48&q=75" alt="image"></td>
                                            <td>Test</td>
                                            <td>Thanks</td>
                                            <td>Customer</td>
                                           
                                             <td><span class="bd-badge bg-success">Active</span></td>
                                    
                
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#leadEdit"><i
                                                            class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i
                                                            class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

';
include "../layouts/master.php";
?>

