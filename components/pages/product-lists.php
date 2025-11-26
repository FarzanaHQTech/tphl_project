<?php
$page_title = "product page";
$page = 'Products';
$show_breadcrumb = true;

?>
<div class="col-xxl-12">
    <div class="card__wrapper">
        <div class="table__wrapper table-responsive">
            <table class="table mb-20 multiple_tables">
                <thead>
                    <tr class="table__title table__sort">
                        <th class="no-sort sorting"><input type="checkbox" id="selectall"></input>
                        </th>
                        <th>Image</th>
                        <th>Project Name</th>
                        <th>Flat Type</th>
                        <th>Floor Number</th>
                        <th>Flat Size(sqft)</th>
                        <th>Total Prize</th>
                        <th>Rooftop gurden</th>
                        <th>Car Parking</th>
                        <th>Generator</th>
                        <th>Sold/Available</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table__body">
                    <tr>
                        <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                        <td><img src="https://admin.dpremiumhomes.com/_next/image?url=https%3A%2F%2Fapi.dpremiumhomes.com%2Fstorage%2Fproducts%2F1752859894_687a84f68525a_Project%20Image.png&w=48&q=75" alt="image"></td>
                        <td>N/A</td>
                        <td>TPHV-9b</td>
                        <td>9</td>
                        <td>1630</td>
                        <td>444000</td>
                        <td class="" bd-badge bg-success">Yes</td>
                        <td class="" bd-badge bg-success">Yes</td>
                        <td class="" bd-badge bg-success">Yes</td>

                        <td><span class="bd-badge bg-danger">Sold</span></td>
                        <td><span class="bd-badge bg-success">Active</span></td>


                        <td>
                            <div class="d-flex align-items-center justify-content-start gap-10">
                                <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#leadDetails"><i
                                        class="fa-regular fa-eye"></i></button>
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