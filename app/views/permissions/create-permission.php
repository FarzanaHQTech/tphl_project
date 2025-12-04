<?php
$page_title = "Create Permission";
$page = 'Add Permission ';
$show_breadcrumb = true;

?>
<?php $base_url = '/tphl_project/public'; ?>
<form action="<?= $base_url ?>/store-permission" method="POST">
    <div class="row">
        <div class="col-xxl-12">
            <div class="row gy-10">
                <!-- Permission Name -->
                <div class="col-lg-12">
                    <div class="from__input-box">
                        <div class="form__input-title">
                            <label for="name">Permission Name<span>*</span></label>
                        </div>
                        <div class="form__input">
                            <input class="form-control" name="name" id="name" type="text" required>
                        </div>
                    </div>
                </div>

                <!-- Status -->
                <div class="col-lg-12">
                    <div class="form__input-box">
                        <div class="form__input-title">
                            <label for="status">Status <span>*</span></label>
                        </div>
                        <div class="form__input">
                            <select class="form-control" name="status" id="status" required>
                                <option value="">-- Select Status --</option>
                                <option value="1">Active</option>
                                <option value="0">In Active</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="submit__btn text-center mb-20 mt-3">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>
