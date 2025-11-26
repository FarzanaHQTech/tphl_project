<?php
$page_title = "project Page";
$page = 'Project';
$show_breadcrumb = true;

?>
<div class="col-xxl-12">
  <div class="row">


    <div class="col-xxl-6">
      <div class="card__wrapper">

        <a href="index.php?page=create-project" class="btn btn-primary w-100">Add Project</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xxl-12">
    <div class="card__wrapper">
      <div class="card__title-wrap mb-20">
        <h3 class="card__heading-title">Product-Request </h3>
      </div>
      <div class="card__table table-responsive">
        <table class="table table-bordered mb-0">
          <thead>
            <tr class="table__title">
              <th><input type="checkbox" id="selectall"></th>
              <th>Iamge</th>
              <th>Name</th>
              <th>Address</th>
              <th>Land Area</th>
              <th>Launching Date</th>
              <th>Hand Over Date</th>
              <th>Building Height</th>
              <th>Status</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody class="table__body">
            <tr>
              <td><input type="checkbox" class="selectedId" name="selectedId"></td>

              <td><img src="https://admin.dpremiumhomes.com/_next/image?url=https%3A%2F%2Fapi.dpremiumhomes.com%2Fstorage%2Fproducts%2F1752859894_687a84f68525a_Project%20Image.png&w=48&q=75" alt="image"></td>
              <td class="table__cat">The Premium Lak</td>
              <td class="table__cat">Ashulia Model Thana</td>
              <td class="table__cat">3600</td>
              <td class="table__cat">2025-10-17</td>
              <td class="table__cat">2026-10-17</td>
              <td class="table__cat">10</td>

              <td><span class="bd-badge bg-success">Active</span></td>

              <td class="table__icon-box">
                <div class="d-flex align-items-center justify-content-center gap-10">
                  <a href="#" class="table__icon download">
                    <i class="fa-regular fa-arrow-down-to-bracket"></i>
                  </a>
                  <a href="index.php?page=404.php" class="table__icon edit">
                    <i class="fa-sharp fa-light fa-pen"></i>
                  </a>
                  <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#showItemsModal"><i
                      class="fa-regular fa-eye"></i></button>

                </div>
              </td>


            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<!--Show Modal -->
<div class="modal fade" id="showItemsModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">All Items</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Description</th>
                <th class="text-end">Quantity</th>
                <th class="text-end">Unit Price</th>
                <th class="text-end">Total Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>test</td>
                <td class="text-end">1</td>
                <td class="text-end">100</td>
                <td class="text-end">100</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>