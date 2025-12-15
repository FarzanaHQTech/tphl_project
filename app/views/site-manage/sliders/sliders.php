<?php
$page_title = "Sliders Page";
$page = 'Sliders';
$addPage = true;
$show_breadcrumb = true;
?>

<div class="breadcrumb__btn my-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSlider">Add Slider</button>
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
                                    <th>S/L</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody class="table__body">
                                <?php foreach($sliders as $key => $slider): ?>
                                <tr>
                                    <td>#<?= $key + 1 ?></td>
                                    <td><?= $slider['title'] ?? '' ?></td>
                                    <td><?= $slider['subtitle'] ?? '-' ?></td>
                                    <td>
                                        <?php if(!empty($slider['image'])): ?>
                                        <img src="<?= getImage('sliders',$slider['image']) ?>" alt="" width="100">
                                        <?php endif; ?>
                                    </td>
                                    
                                    <td>
                                        <?php if ($slider['status'] == 1): ?>
                                        <span class="bd-badge bg-success">Active</span>
                                        <?php else: ?>
                                        <span class="bd-badge bg-danger">Inactive</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-10">

                                            <!-- Edit Button -->
                                            <button
                                                type="button"
                                                class="table__icon edit"
                                                data-bs-toggle="modal"
                                                data-bs-target="#sliderEdit<?= $slider['id'] ?>">
                                                <i class="fa-sharp fa-light fa-pen"></i>
                                            </button>

                                            <!-- Delete Button -->
                                            <button
                                                type="button"
                                                class="table__icon delete removeBtn"
                                                data-id="<?= $slider['id'] ?>">
                                                <i class="fa-regular fa-trash"></i>
                                            </button>

                                        </div>
                                    </td>
                                </tr>

                                <!-- Slider Edit Modal -->
                                <div class="modal fade" id="sliderEdit<?= $slider['id'] ?>" tabindex="-1" aria-labelledby="sliderEditLabel<?= $slider['id'] ?>" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="sliderEditLabel<?= $slider['id'] ?>">Edit Slider</h5>
                                                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark-large"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= $GLOBALS['base_url'] ?>/update-slider/<?= $slider['id'] ?>" method="post" enctype="multipart/form-data">
                                                    <div class="card__wrapper mb-20">
                                                        <div class="row g-20 gy-20">
                                                            <div class="col-lg-12">
                                                                <div class="from__input-box">
                                                                    <div class="form__input-title">
                                                                        <label>Title <span>*</span></label>
                                                                    </div>
                                                                    <div class="form__input">
                                                                        <input class="form-control" name="title" type="text" value="<?= $slider['title'] ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="from__input-box">
                                                                    <div class="form__input-title">
                                                                        <label>Link</label>
                                                                    </div>
                                                                    <div class="form__input">
                                                                        <input class="form-control" name="link" type="text" value="<?= $slider['link'] ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="from__input-box">
                                                                    <div class="form__input-title">
                                                                        <label>Image</label>
                                                                    </div>
                                                                    <div class="form__input">
                                                                        <input class="form-control" name="image" type="file">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="col-lg-12">
                                                                <div class="from__input-box">
                                                                    <div class="form__input-title">
                                                                        <label>Status</label>
                                                                    </div>
                                                                    <div class="form__input">
                                                                        <select class="form-control" name="status">
                                                                            <option value="1" <?= $slider['status'] == 1 ? 'selected' : '' ?>>Active</option>
                                                                            <option value="0" <?= $slider['status'] == 0 ? 'selected' : '' ?>>Inactive</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="submit__btn text-center">
                                                        <button class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Edit Modal -->

                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Slider Modal -->
<div class="modal fade" id="addSlider" tabindex="-1" aria-labelledby="addSliderLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSliderLabel">Add New Slider</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form action="<?= $GLOBALS['base_url'] ?>/store-slider" method="post" enctype="multipart/form-data">
                    <div class="card__wrapper mb-20">
                        <div class="row g-20 gy-20">
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Title <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="title" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Sub Title <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="subtitle" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Link</label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="link" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Image</label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="image" type="file">
                                    </div>
                                </div>
                            </div>
                    
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Status</label>
                                    </div>
                                    <div class="form__input">
                                        <select class="form-control" name="status">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
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
<!-- End Add Slider Modal -->
