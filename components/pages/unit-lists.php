<?php
$page_title = "Units Pages";
$page = 'Unit Lists ';
$show_breadcrumb = true;

?>
<div class="col-xxl-12">
    <div class="row">
        <div class="col-xxl-6">
            <div class="card__wrapper">
                <div class="from__input-box">
                    <div class="form__input">
                        <input type="text" class="form-control" id="locationName" placeholder="unit Name">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-6">
            <div class="card__wrapper">
                <div class="d-flex align-items-center justify-content-between gap-15">
                    <button class="btn btn-secondary w-100">Search</button>
                    <a href="./create-unit.php" class="btn btn-primary w-100">Add Unit</a>
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
                            <th> S/L</th>
                            <th>Unit Name </th>
                            <th>Label</th>
                            <th>Multiplier</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table__body">
                        <tr>

                            <td class="table__cat">#1</td>
                            <td class="table__cat">Pic</td>
                            <td class="table__cat">Pic</td>
                            <td class="table__cat">1</td>

                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-center gap-10">
                                    <button type="button" data-bs-target="#editUnit" data-bs-toggle="modal" class=" btn  btn-primary">
                                        <i class="fa-sharp fa-light fa-pen"></i>
                                    </button>

                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!--Edit Modal -->
<div class="modal fade" id="editUnit" tabindex="-1" aria-labelledby="editUnitLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUnitLabel">Edit Customer</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="card__wrapper mb-20">
                        <div class="row g-20 gy-20 align-items-center justify-content-center">
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="name"> Name <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="name" id="name" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="label">Label</label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="label" id="label" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="multiplier">Multiplier <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="multiplier" id="multiplier" type="text">
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