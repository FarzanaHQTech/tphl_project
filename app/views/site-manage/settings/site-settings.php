<?php
$page = "Site Settings";
$page_title = "Create / Update Site Settings";
$show_breadcrumb = true;

// Get existing settings
$settings = $settings ?? []; // Controller থেকে পাঠানো হবে
?>

<form action="<?= $GLOBALS['base_url'] ?>/store-site-setting" method="POST" enctype="multipart/form-data">


    <div class="row gy-10">

        <!-- Website Title -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label class="form__input-title">Website Title *</label>
                <input type="text" name="website_title" class="form-control"
                       value="<?= $settings['website_title'] ?? '' ?>" required>
            </div>
        </div>

        <!-- Logo -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label class="form__input-title">Logo</label>
                <input type="file" name="logo" class="form-control">
                <?php if (!empty($settings['logo'])): ?>
                    <img src="<?= getImage('settings', $settings['logo']) ?>" alt="" width="100" class="mt-2">
                <?php endif; ?>
            </div>
        </div>

        <!-- Contact -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Contact Number *</label>
                <input type="text" name="phone" class="form-control"
                       value="<?= $settings['phone'] ?? '' ?>">
            </div>
        </div>

        <!-- Footer Text -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Footer Text *</label>
                <textarea name="footer_text" class="form-control"><?= $settings['footer_text'] ?? '' ?></textarea>
            </div>
        </div>

        <!-- Alternative Contact -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Alternative Contact</label>
                <input type="text" name="alt_phone" class="form-control"
                       value="<?= $settings['alt_phone'] ?? '' ?>">
            </div>
        </div>

        <!-- Email -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Email *</label>
                <input type="email" name="email" class="form-control"
                       value="<?= $settings['email'] ?? '' ?>">
            </div>
        </div>
        <!-- Email -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Alter Email </label>
                <input type="email" name="email" class="form-control"
                       value="<?= $settings['email'] ?? '' ?>">
            </div>
        </div>

        <!-- Address -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Address</label>
                <input type="text" name="address" class="form-control"
                       value="<?= $settings['address'] ?? '' ?>">
            </div>
        </div>

        <!-- Copyright -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Copyright</label>
                <input type="text" name="copyright" class="form-control"
                       value="<?= $settings['copyright'] ?? '' ?>">
            </div>
        </div>

        <!-- Social Links -->
        <div class="col-md-6">
            <div class="from__input-box">
                <label>Facebook Link</label>
                <input type="text" name="facebook_link" class="form-control"
                       value="<?= $settings['facebook_link'] ?? '' ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="from__input-box">
                <label>Messenger Link</label>
                <input type="text" name="messenger_link" class="form-control"
                       value="<?= $settings['messenger_link'] ?? '' ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="from__input-box">
                <label>Instagram Link</label>
                <input type="text" name="instagram_link" class="form-control"
                       value="<?= $settings['instagram_link'] ?? '' ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="from__input-box">
                <label>Tiktok Link</label>
                <input type="text" name="tiktok_link" class="form-control"
                       value="<?= $settings['tiktok_link'] ?? '' ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="from__input-box">
                <label>X (Twitter) Link</label>
                <input type="text" name="x_link" class="form-control"
                       value="<?= $settings['x_link'] ?? '' ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="from__input-box">
                <label>YouTube Link</label>
                <input type="text" name="youtube_link" class="form-control"
                       value="<?= $settings['youtube_link'] ?? '' ?>">
            </div>
        </div>

        <!-- Header Code -->
        <div class="col-md-12">
            <div class="from__input-box">
                <label>Header Code</label>
                <textarea name="header_code" rows="4" class="form-control"><?= $settings['header_code'] ?? '' ?></textarea>
            </div>
        </div>

        <!-- Body Code -->
        <div class="col-md-12">
            <div class="from__input-box">
                <label>Body Code</label>
                <textarea name="body_code" rows="4" class="form-control"><?= $settings['body_code'] ?? '' ?></textarea>
            </div>
        </div>

    </div>

    <div class="submit__btn text-center mt-4">
        <button class="btn btn-primary px-5"><?= !empty($settings) ? 'Update Settings' : 'Save Settings' ?></button>
    </div>

</form>
