<?php
    $page_title = "Requisition Page";
    $page = 'Requisition';
    $show_breadcrumb = true;
    $content='
  
  <div class="col-xxl-12">
                        <div class="row">
                            <div class="col-xxl-6">
                                <div class="card__wrapper">
                                    <div class="from__input-box">
                                        <div class="form__input">
                                            <input type="text" class="form-control" id="locationName" placeholder="Requisitiom Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                            <div class="col-xxl-6">
                                <div class="card__wrapper">
                                    <div class="d-flex align-items-center justify-content-between gap-15">
                                        <button class="btn btn-secondary w-100">Search</button>
                                          <a href="./create-requisition.php" class="btn btn-primary w-100" >Add Requisition</a>
                                    </div>
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
                                            <th>Project ID</th>
                                            <th>Remark </th>
                                            <th>Project Name</th>
                                            <th>Required Date</th>
                                            <th>Status</th>
                                          
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table__body">
                                        <tr>
                                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                                           
                                            <td class="table__cat">#1</td>
                                            <td class="table__cat">Project - 1</td>
                                            <td class="table__cat">Test</td>
                                            <td class="table__cat">2025-10-17</td>
                                            <td><span class="bd-badge bg-success">Approved</span></td>
                                           
                                            <td class="table__icon-box">
                                                <div class="d-flex align-items-center justify-content-center gap-10">
                                                    <a href="#" class="table__icon download">
                                                        <i class="fa-regular fa-arrow-down-to-bracket"></i>
                                                    </a>
                                                    <a href="./edit-requisition.php" class="table__icon edit">
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
    
    
';
include "../layouts/master.php";
?>