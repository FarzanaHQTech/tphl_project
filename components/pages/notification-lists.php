<?php
$page_title = "notification lists";
$page = "Notification list";
$show_breadcrumb = true;
?>

<div class="col-xxl-12">
    <div class="row">
        <div class="col-xxl-6">
            <div class="card__wrapper">
                <div class="from__input-box">
                    <div class="form__input">
                        <input type="text" class="form-control" id="name" placeholder="Notification Name">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-6">
            <div class="card__wrapper">
                <div class="d-flex align-items-center justify-content-between gap-15">
                    <button class="btn btn-secondary w-100">Search</button>
                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addNewCustomer">Add notification</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xxl-12">
        <div class="card__wrapper">
            <div class="card__title-wrap mb-20">
                <h3 class="card__heading-title">Notification Lists</h3>
            </div>
            <div class="card__table table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr class="table__title">
                            <th><input type="checkbox" id="selectall"></th>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table__body">
                        <tr>
                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>

                            <td class="table__cat">1/td>
                            <td class="table__cat">Test</td>
                            <td class="table__cat">message</td>

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