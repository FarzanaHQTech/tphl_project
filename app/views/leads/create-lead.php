<?php
$page = "create List"


?>
<?php if ($msg = getError()): ?>
    <div class="alert alert-danger"><?= $msg ?></div>
<?php endif; ?>

<?php if ($msg = getSuccess()): ?>
    <div class="alert alert-success"><?= $msg ?></div>
<?php endif; ?>


<!-- new lead modal start -->
<form action="<?= $GLOBALS['base_url'] ?>/store-lead" method="POST">
    <div class="row gy-10">

        <!-- Lead Name -->
        <div class="col-lg-12">
            <div class="from__input-box">
                <label class="form__input-title" for="leadName">Lead Name*</label>
                <input class="form-control" name="lead_name" id="leadName" type="text">
            </div>
        </div>

        <!-- Lead Type -->
        <div class="col-lg-6">
            <div class="from__input-box">
                <label class="form__input-title" for="leadType">Lead Type*</label>
                <select name="lead_type" id="leadType" class="form-select">
                    <option value="">Select</option>
                    <option value="Hot">Hot</option>
                    <option value="Warm">Warm</option>
                    <option value="Cold">Cold</option>
                </select>
            </div>
        </div>

        <!-- Company Name -->
        <div class="col-lg-6">
            <div class="from__input-box">
                <label class="form__input-title" for="companyName">Company Name</label>
                <input class="form-control" name="company" id="companyName" type="text">
            </div>
        </div>

        <!-- Value Amount -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label class="form__input-title" for="value">Value Amount</label>
                <input class="form-control" name="value_amount" id="value" type="number">
            </div>
        </div>

        <!-- Currency -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label class="form__input-title" for="currency">Currency*</label>
                <select name="currency" id="currency" class="form-select">
                    <option value="BDT">BDT</option>
                    <option value="USD">USD</option>
                    <option value="EURO">EURO</option>
                    <option value="RUBLE">RUBLE</option>
                    <option value="POUND">POUND</option>
                </select>
            </div>
        </div>

        <!-- Phone -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label class="form__input-title" for="phoneNumber">Mobile Number*</label>
                <input class="form-control" name="phone" id="phoneNumber" type="text">
            </div>
        </div>

        <!-- Alternate Phone -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label for="altPhone">Alternate Number</label>
                <input class="form-control" name="alt_phone_number" id="altPhone" type="text">
            </div>
        </div>

        <!-- Email -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label class="form__input-title" for="emailAddress">Email*</label>
                <input class="form-control" name="email" id="emailAddress" type="email">
            </div>
        </div>

        <!-- Source Type -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label class="form__input-title" for="sourceType">Source Type</label>
                <input class="form-control" name="source_type" id="sourceType" type="text">
            </div>
        </div>

        <!-- Owner ID -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label class="form__input-title" for="ownerName">Lead Owner*</label>
                <select name="owner_id" id="ownerName" class="form-select">
                    <option value="">Select Owner</option>
                    <?php foreach ($ownerUsers as $user): ?>
                        <option value="<?= $user['id'] ?>"><?= $user['full_name'] ?></option>
                    <?php endforeach ?>
                    <!-- Dynamic user list -->
                </select>
            </div>
        </div>

        <!-- Address -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Address</label>
                <input type="text" class="form-control" name="address">
            </div>
        </div>

        <!-- Preferred Location -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Preferred Location</label>
                <input type="text" class="form-control" name="pref_location">
            </div>
        </div>

        <!-- Designation -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Designation</label>
                <input type="text" class="form-control" name="designation">
            </div>
        </div>

        <!-- Project Type -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Project Type*</label>
                <select name="project_type" class="form-select">
                    <option value="ATI Society">ATI Society</option>
                    <option value="ASHU Society">ASHU Society</option>
                </select>
            </div>
        </div>

        <!-- Interest On -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Interest On*</label>
                <input type="text" class="form-control" name="interest_on">
            </div>
        </div>

        <!-- Preferred Flat Size -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Preferred Size*</label>
                <input type="text" class="form-control" name="pref_flat_size">
            </div>
        </div>

        <!-- Communication Type -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Communication Type</label>
                <select name="communication_type" class="form-select">
                    <option value="WA Messaging">WA Messaging</option>
                    <option value="WA Conversion">WA Conversion</option>
                </select>
            </div>
        </div>

        <!-- Tags -->
        <div class="col-md-6">
            <div class="tagify__wrapper">
                <label>Tags</label>
                <input id="TagifyBasic" class="form-control" name="tags">
            </div>
        </div>


        <!-- Lead Quality -->
        <div class="col-md-6">
            <label>Lead Quality</label>
            <select name="lead_quality" class="form-select">
                <option value="Not Interested">Not Interested</option>
                <option value="Prospect">Prospect</option>
                <option value="Pending">Pending</option>
            </select>
        </div>

        <!-- Description -->
        <div class="col-md-12">
            <div class="from__input-box">
                <label>Lead Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
        </div>

        <!-- Visibility -->


        <!-- Status -->
        <div class="col-md-6">
            <label class="form-label fw-bold">Status</label>
            <div class="border rounded p-3 bg-white">
                <div class="d-flex gap-3">
                    <div class="status-radio">
                        <input type="radio" name="status" value="active" id="active" checked>
                        <label for="active" class="badge bg-success fs-6 py-2 px-4">
                            ✓ Active
                        </label>
                    </div>
                    <div class="status-radio ms-3">
                        <input type="radio" name="status" value="inactive" id="inactive">
                        <label for="inactive" class="badge bg-danger fs-6 py-2 px-4">
                            ✕ Inactive
                        </label>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div class="submit__btn text-center mt-4">
        <button class="btn btn-primary">Submit</button>
    </div>
</form>

<!-- new lead modal end -->