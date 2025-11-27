<?php
$page_title = "location lists";   // এই পেজের Title
$page = "location list";   // এই পেজের Title
$show_breadcrumb = true;
?>
<div class="col-xxl-12">
    <div class="row">
        <div class="col-xxl-6">
            <div class="card__wrapper">
                <div class="from__input-box">
                    <div class="form__input">
                        <input type="text" class="form-control" id="locationName" placeholder="Locatiobn Name">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-6">
            <div class="card__wrapper">
                <div class="d-flex align-items-center justify-content-between gap-15">
                    <button class="btn btn-secondary w-100">Search</button>
                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addLocation">Add Location</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xxl-12">
        <div class="card__wrapper">
            <div class="card__title-wrap mb-20">
                <h3 class="card__heading-title">Location Lists</h3>
            </div>
            <div class="card__table table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr class="table__title">
                            <th><input type="checkbox" id="selectall"></th>
                            <th>Location Name</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table__body">
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>

                            <td class="table__cat">Location - 1</td>

                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-center gap-10">
                                    <a href="#" class="table__icon download">
                                        <i class="fa-regular fa-arrow-down-to-bracket"></i>
                                    </a>
                                    <a href="#" class="table__icon edit">
                                        <i class="fa-sharp fa-light fa-pen"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>

                            <td class="table__cat">Location - 2</td>

                            <td class="table__icon-box">
                                <div class="d-flex align-items-center justify-content-center gap-10">
                                    <a href="#" class="table__icon download">
                                        <i class="fa-regular fa-arrow-down-to-bracket"></i>
                                    </a>
                                    <a href="#" class="table__icon edit">
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


// <!-- add location -->
<div class="modal fade" id="addLocation" tabindex="-1" aria-labelledby="addLocationLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addLocationLabel">Edit Customer</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">

                        <div class="col-xxl-12">
                            <div class="row gy-10">
                                <div class="col-xl-12">
                                    <div class="card__wrapper">
                                        <div class="row gy-20">
                                            <div class="col-lg-12">
                                                <div class="from__input-box">
                                                    <div class="form__input-title">
                                                        <label for="name">Location Title<span>*</span></label>
                                                    </div>
                                                    <div class="form__input">
                                                        <input class="form-control" name="name" id="name" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit__btn text-center mb-20">
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>