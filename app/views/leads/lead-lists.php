<?php
$page_title = "leads Page";
$page = 'Leads';
$addPage = 'Add Leads';
$addPage = true;
$show_breadcrumb = true;
?>

<div class="row">

    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <div class="card__wrapper">
            <div class="d-flex align-items-center gap-sm">
                <div class="card__icon">
                    <span><i class="fa-light fa-ban"></i></span>
                </div>
                <div class="card__title-wrap">
                    <h6 class="card__sub-title mb-10">Total Lead</h6>
                    <div class="d-flex flex-wrap align-items-end gap-10">
                        <h4 class="card__title">1500</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <div class="card__wrapper">
            <div class="d-flex align-items-center gap-sm">
                <div class="card__icon">
                    <span><i class="fa-light fa-badge-check"></i></span>
                </div>
                <div class="card__title-wrap">
                    <h6 class="card__sub-title mb-10">Total Company</h6>
                    <div class="d-flex flex-wrap align-items-end gap-10">
                        <h4 class="card__title">950</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <div class="card__wrapper">
            <div class="d-flex align-items-center gap-sm">
                <div class="card__icon">
                    <span><i class="fa-sharp fa-regular fa-user"></i></span>
                </div>
                <div class="card__title-wrap">
                    <h6 class="card__sub-title mb-10">Approved </h6>
                    <div class="d-flex flex-wrap align-items-end gap-10">
                        <h4 class="card__title">3130</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <div class="card__wrapper">
            <button
                class="btn btn-success my-2 w-full"
                data-bs-toggle="modal"
                data-bs-target="#importCsvModal">
                Import CSV
            </button>

            <a href="<?= $GLOBALS['base_url'] ?>/create-lead" class="btn btn-primary my-2 w-full">
                Add Lead
            </a>
        </div>
    </div>



    <div class="col-xxl-12">
        <div class="card__wrapper">
            <div class="table__wrapper table-responsive">
                <table class="table mb-20 multiple_tables">
                    <thead>
                        <tr class="table__title table__sort">
                            <th class="no-sort sorting"><input type="checkbox" id="selectall"></input>
                            </th>
                            <th>created At</th>
                            <th>Lead Name</th>
                            <th>Lead Type</th>
                            <th>Company</th>
                            <th>Value Amount - currency</th>

                            <th>Phone</th>
                            <!-- <th>Alt Phone</th> -->
                            <th>Email</th>
                            <!-- <th>Source Type</th> -->
                            <th>Owner</th>
                            <!-- <th>Address</th> -->
                            <th>Designation</th>
                            <th>Preferred Location</th>
                            <th>Project Type</th>
                            <th>Interest On</th>
                            <th>Preferred Flat Size</th>
                            <th>Note</th>
                            <!-- <th>Description</th> -->
                            <th>Visibility</th>
                            <th>Status</th>
                            <th>Lead Quality</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table__body">

                        <?php foreach ($leads as $lead): ?>
                            <tr>
                                <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                                <td><?= $lead['created_at'] ? date('d F, Y', strtotime($lead['created_at'])) : '' ?></td>
                                <td><?= $lead['lead_name'] ?? '' ?></td>
                                <td><?= $lead['lead_type'] ?? '' ?></td>
                                <td><?= $lead['company'] ?? '' ?></td>
                                <td><?= ($lead['currency'] ?? '') . ' ' . ($lead['value_amount'] ?? '') ?></td>
                                <td><?= $lead['phone'] ?? '' ?></td>
                                <td><?= $lead['email'] ?? '' ?></td>
                                <td><?= $lead['owner_name'] ?? '' ?></td>
                                <td><?= $lead['designation'] ?? '' ?></td>
                                <td><?= $lead['pref_location'] ?? '' ?></td>
                                <td><span class="bd-badge bg-success"><?= $lead['project_type'] ?? '' ?></span></td>
                                <td><?= $lead['interest_on'] ?? '' ?></td>
                                <td><?= $lead['pref_flat_size'] ?? '' ?></td>
                                <td><?= $lead['tags'] ?? '' ?></td>
                                <td><?= $lead['visibility'] ?? '' ?></td>
                                <td><span class="bd-badge bg-success"><?= $lead['status'] ?? '' ?></span></td>
                                <td><?= $lead['lead_quality'] ?? '' ?></td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-start gap-10">
                                        <a class="table__icon download" href="<?= $GLOBALS['base_url'] ?>/view-lead">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a class="table__icon edit" href="<?= $GLOBALS['base_url'] ?>/edit-lead/<?= $lead['id'] ?>">
                                            <i class="fa-sharp fa-light fa-pen"></i>
                                        </a>
                                        <button class="removeBtn table__icon delete">
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


<!-- CSV Import Modal -->
<div class="modal fade" id="importCsvModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Leads from CSV</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark-large"></i>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?= $GLOBALS['base_url'] ?>/leads-import-csv"
                    method="post"
                    enctype="multipart/form-data">

                    <div class="from__input-box mb-20">
                        <div class="form__input-title">
                            <label>Upload CSV File <span>*</span></label>
                        </div>
                        <div class="form__input">
                            <input type="file"
                                name="csv_file"
                                class="form-control"
                                accept=".csv"
                                required>
                        </div>
                    </div>

                    <div class="submit__btn text-center">
                        <button class="btn btn-primary">Import</button>
                    </div>
                </form>

                <p class="mt-15 text-muted small">
                    CSV header must match lead table columns.
                </p>
            </div>
        </div>
    </div>
</div>