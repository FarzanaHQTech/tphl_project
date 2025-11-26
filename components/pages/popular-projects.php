<?php
$page_title = "popular Project Page";
$page = 'Popular Projects ';
$show_breadcrumb = true;

?>
<div class="col-xxl-12">
  <div class="row">
    <div class="col-xxl-6">
      <div class="card__wrapper">
        <div class="from__input-box">
          <div class="form__input">
            <input type="text" class="form-control" id="projectName" placeholder="Popular Project Name">
          </div>
        </div>
      </div>
    </div>

    <div class="col-xxl-6">
      <div class="card__wrapper">
        <div class="d-flex align-items-center justify-content-between gap-15">
          <button class="btn btn-secondary w-100">Search</button>
          <a href="index.php?page=create-popular-project" class="btn btn-primary w-100">Add Popular Project Name</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xxl-12">
    <div class="card__wrapper">
      <div class="card__title-wrap mb-20">
        <h3 class="card__heading-title">Projects </h3>
      </div>
      <div class="card__table table-responsive">
        <table class="table table-bordered mb-0">
          <thead>
            <tr class="table__title">
              <th><input type="checkbox" id="selectall"></th>
              <th>ID</th>
              <th>Title </th>
              <th>Type</th>
              <th>Position</th>
              <th>Required Date</th>
              <th>Status</th>

              <th>Action</th>
            </tr>
          </thead>
          <tbody class="table__body">
            <tr>
              <td><input type="checkbox" class="selectedId" name="selectedId"></td>

              <td>#1 <img src="assets/images/blog/blog-image-1" alt="image"></td>
              <td class="table__cat">The Premium Lak</td>
              <td class="table__cat">Popular Project - 1</td>

              <td><span class="bd-badge bg-success">Pending</span></td>
              <td class="table__cat">2025-10-17</td>
              <td><span class="bd-badge bg-success">Active</span></td>


              <td class="table__icon-box">
                <div class="d-flex align-items-center justify-content-center gap-10">
                  <a href="#" class="table__icon download">
                    <i class="fa-regular fa-arrow-down-to-bracket"></i>
                  </a>
                  <a href="index.php?page=edit-requisition" class="table__icon edit">
                    <i class="fa-sharp fa-light fa-pen"></i>
                  </a>

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