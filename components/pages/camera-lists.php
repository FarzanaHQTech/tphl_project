<?php
$page_title = "Camera lists";
$page = "Camera list";
$show_breadcrumb = true;

?>

<div class="col-xxl-12">
    <div class="row">
        <div class="col-xxl-6">
            <div class="card__wrapper">
                <div class="from__input-box">
                    <div class="form__input">
                        <input type="text" class="form-control" id="name" placeholder="Camera Name">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-6">
            <div class="card__wrapper">
                <div class="d-flex align-items-center justify-content-between gap-15">
                    <button class="btn btn-secondary w-100">Search</button>
                    <a class="btn btn-primary w-100" href="?page=create-camera">Add Camera</a>
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
                            <th>Camera Name</th>
                            <th>Stream Path</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table__body">
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>

                            <td class="table__cat">Camera - 1</td>
                            <td class="table__cat">rtsp://admin:Hik@2025@103.139.145.6:8554/stream-path</td>

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

                            <td class="table__cat">Camera - 2</td>
                            <td class="table__cat">rtsp://admin:Hik@2025@103.139.145.6:8554/stream-path</td>
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