<?php
$page = "Edit List";

$selectedSourceId = $_SESSION['old']['source_type_id']
    ?? $leadData['source_type_id']
    ?? null;
?>


<!-- new lead modal start -->
<form action="<?= $GLOBALS['base_url'] ?>/update-lead/<?= $leadData['id'] ?>"
    method="POST"
    enctype="multipart/form-data">
    <div class="row gy-10">

        <!-- Lead Name -->
        <div class="col-lg-12">
            <div class="from__input-box">
                <label class="form__input-title" for="leadName">Lead Name*</label>
                <input class="form-control" name="lead_name" id="leadName" type="text" value="<?= $leadData['lead_name'] ?? '' ?>">
            </div>
        </div>

        <!-- Lead Type -->
        <div class="col-lg-6">
            <div class="from__input-box">
                <label class="form__input-title" for="leadType">Lead Type*</label>
                <select name="lead_type" id="leadType" class="form-select" name="lead_type">
                    <option value="">Select</option>
                    <option value="Hot" <?= ($leadData['lead_type'] ?? '') == 'Hot' ? 'selected' : '' ?>>Hot</option>
                    <option value="Warm" <?= ($leadData['lead_type'] ?? '') == 'Warm' ? 'selected' : '' ?>>Warm</option>
                    <option value="Cold" <?= ($leadData['lead_type'] ?? '') == 'Cold' ? 'selected' : '' ?>>Cold</option>
                </select>
            </div>
        </div>

        <!-- Company Name -->
        <div class="col-lg-6">
            <div class="from__input-box">
                <label class="form__input-title" for="companyName">Company Name</label>
                <input class="form-control" name="company" id="companyName" type="text" value="<?= $leadData['company'] ?? '' ?>">
            </div>
        </div>

        <!-- Value Amount -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label class="form__input-title" for="value">Value</label>
                <input class="form-control" name="value_amount" id="value" type="number" value="<?= $leadData['value_amount'] ?? 0 ?>">
            </div>
        </div>

        <!-- Currency -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label class="form__input-title" for="currency">Currency*</label>
                <select name="currency" id="currency" class="form-select">
                    <?php
                    $currencies = ['BDT', 'USD', 'EURO', 'RUBLE', 'POUND'];
                    foreach ($currencies as $cur) {
                        $selected = ($leadData['currency'] ?? '') == $cur ? 'selected' : '';
                        echo "<option value='$cur' $selected>$cur</option>";
                    }
                    ?>

                </select>
            </div>
        </div>

        <!-- Phone -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label class="form__input-title" for="phoneNumber">Mobile Number*</label>
                <input class="form-control" name="phone" id="phoneNumber" type="text" value="<?= $leadData['phone'] ?? '' ?>">
            </div>
        </div>

        <!-- Alternate Phone -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label for="altPhone">Alternate Number</label>
                <input class="form-control" name="alt_phone_number" id="altPhone" type="text" value="<?= $leadData['alt_phone_number'] ?? '' ?>">
            </div>
        </div>

        <!-- Email -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label class="form__input-title" for="emailAddress">Email*</label>
                <input class="form-control" name="email" id="emailAddress" type="email" value="<?= $leadData['email'] ?? '' ?>">
            </div>
        </div>

        <!-- Source Type -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label class="form__input-title" for="sourceType">Source Type</label>
                <select  id="source_type_id" class="form-select" name="source_type_id">
                    <option value="">Select Source</option>

                    <?php foreach ($sources as $source): ?>
                        <option value="<?= $source['id']; ?>"
                            <?= ($selectedSourceId == $source['id']) ? 'selected' : ''; ?>>
                            <?= htmlspecialchars($source['name']); ?>
                        </option>
                    <?php endforeach; ?>

                </select>
            </div>
        </div>

        <!-- Owner ID -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label class="form__input-title" for="ownerName">Lead Owner*</label>
                <select name="owner_id" id="ownerName" class="form-select">
                    <option value="">Select Owner</option>
                    <?php foreach ($ownerUsers as $user): ?>
                        <option value="<?= $user['id'] ?>" <?= ($leadData['owner_id'] ?? '') == $user['id'] ? 'selected' : '' ?>><?= $user['full_name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <!-- Address -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value="<?= $leadData['address'] ?? '' ?>">
            </div>
        </div>

        <!-- Preferred Location -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Preferred Location</label>
                <input type="text" class="form-control" name="pref_location" value="<?= $leadData['pref_location'] ?? '' ?>">
            </div>
        </div>

        <!-- Designation -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Designation</label>
                <input type="text" class="form-control" name="designation" value="<?= $leadData['designation'] ?? '' ?>">
            </div>
        </div>

        <!-- Project Type -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Project Type*</label>
                <select name="project_type" class="form-select">
                    <option value="ATI Society" <?= ($leadData['project_type'] ?? '') == 'ATI Society' ? 'selected' : '' ?>>ATI Society</option>
                    <option value="ASHU Society" <?= ($leadData['project_type'] ?? '') == 'ASHU Society' ? 'selected' : '' ?>>ASHU Society</option>
                </select>
            </div>
        </div>

        <!-- Interest On -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Interest On*</label>
                <input type="text" class="form-control" name="interest_on" value="<?= $leadData['interest_on'] ?? '' ?>">
            </div>
        </div>

        <!-- Preferred Flat Size -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Preferred Size*</label>
                <input type="text" class="form-control" name="pref_flat_size" value="<?= $leadData['pref_flat_size'] ?? '' ?>">
            </div>
        </div>

        <!-- Communication Type -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Communication Type</label>
                <select name="communication_type" class="form-select">
                    <option value="WA Messaging" <?= ($leadData['communication_type'] ?? '') == 'WA Messaging' ? 'selected' : '' ?>>WA Messaging</option>
                    <option value="WA Conversion" <?= ($leadData['communication_type'] ?? '') == 'WA Conversion' ? 'selected' : '' ?>>WA Conversion</option>
                </select>
            </div>
        </div>

        <!-- Tags -->
        <div class="col-md-6">
            <div class="tagify__wrapper">
                <label>Tags</label>
                <input id="TagifyBasic" class="form-control" name="tags" value="<?= $leadData['tags'] ?? '' ?>">
            </div>
        </div>

        <!-- Lead Quality -->
        <div class="col-md-6">
            <label>Lead Quality</label>
            <select name="lead_quality" class="form-select">
                <?php
                $qualities = ['Not Interested', 'Prospect', 'Pending'];
                foreach ($qualities as $q) {
                    $selected = ($leadData['lead_quality'] ?? '') == $q ? 'selected' : '';
                    echo "<option value='$q' $selected>$q</option>";
                }
                ?>
            </select>
        </div>

        <!-- Description -->
        <div class="col-md-12">
            <div class="from__input-box">
                <label>Lead Description</label>
                <textarea class="form-control" name="description"><?= $leadData['description'] ?? '' ?></textarea>
            </div>
        </div>

        <!-- Visibility -->
        <div class="col-md-6">
            <label>Visibility</label>
            <div class="d-flex gap-20">
                <label><input type="radio" name="visibility" value="public" <?= ($leadData['visibility'] ?? '') == 'public' ? 'checked' : '' ?>> Public</label>
                <label><input type="radio" name="visibility" value="private" <?= ($leadData['visibility'] ?? '') == 'private' ? 'checked' : '' ?>> Private</label>
                <label><input type="radio" name="visibility" value="selected" <?= ($leadData['visibility'] ?? '') == 'selected' ? 'checked' : '' ?>> Selected</label>
            </div>
        </div>

        <!-- Status -->
        <div class="col-md-6">
            <label>Status</label>
            <div class="d-flex gap-20">
                <label><input type="radio" name="status" value="active" <?= ($leadData['status'] ?? '') == 'active' ? 'checked' : '' ?>> Active</label>
                <label><input type="radio" name="status" value="inactive" <?= ($leadData['status'] ?? '') == 'inactive' ? 'checked' : '' ?>> Inactive</label>
            </div>
        </div>


    </div>

    <div class="submit__btn text-center mt-4">
        <button class="btn btn-primary">Submit</button>
    </div>
</form>

<!-- new lead modal end -->