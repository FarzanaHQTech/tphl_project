<?php
$page_title = "Edit Blog ";
$page = 'Edit Blog ';
$show_breadcrumb = true;

?>
<form action="<?= $GLOBALS['base_url'] ?>/update-blog/<?= $blog['id'] ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-xxl-12">
            <div class="row gy-10">
                <!-- Blog Title -->
                <div class="col-lg-6">
                    <div class="from__input-box">
                        <div class="form__input-title">
                            <label for="title">Blog Title<span>*</span></label>
                        </div>
                        <div class="form__input">
                            <input class="form-control" name="title" id="title" type="text" value="<?= htmlspecialchars($blog['title'] ?? '') ?>">
                        </div>
                    </div>
                </div>

                <!-- Author -->
                <div class="col-lg-6">
                    <div class="from__input-box">
                        <div class="form__input-title">
                            <label for="author">Author<span>*</span></label>
                        </div>
                        <div class="form__input">
                            <input class="form-control" name="author" id="author" type="text" value="<?= htmlspecialchars($blog['author'] ?? '') ?>">
                        </div>
                    </div>
                </div>

                <!-- Publish Date -->
                <div class="col-md-6">
                    <div class="from__input-box">
                        <div class="form__input-title">
                            <label>Publish Date <span>*</span></label>
                        </div>
                        <div class="form__input">
                            <input class="form-control" id="startingDate" type="text" name="published_date" readonly
                                value="<?= $blog['published_date'] ? date('d F, Y', strtotime($blog['published_date'])) : '' ?>">
                        </div>
                    </div>
                </div>

                <!-- Status -->
                <div class="col-lg-6">
                    <div class="from__input-box">
                        <div class="form__input-title">
                            <label for="blogStatus" class="form-label">Status <span>*</span></label>
                        </div>
                        <div class="form__input">
                            <select id="blogStatus" class="form-select" name="status">
                                <option value="1" <?= (isset($blog['status']) && $blog['status'] == 1) ? 'selected' : '' ?>>Publish</option>
                                <option value="0" <?= (isset($blog['status']) && $blog['status'] == 0) ? 'selected' : '' ?>>Draft</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Image Upload & Preview -->
                <div class="col-lg-6">
                    <div class="from__input-box">
                        <div class="form__input-title">
                            <label for="photo">Blog Image (1000*500px)</label>
                        </div>
                        <div class="form__input mb-2">
                            <input class="form-control" id="photo" type="file" name="image">
                        </div>
                     
                    </div>
                </div>
                <!-- Image Upload & Preview -->
                <div class="col-lg-6">
                    <div class="from__input-box">
                       <?php if (!empty($blog['image'])) : ?>
                            <img src="<?= getImage('blogs',$blog['image']) ?>" alt="Blog Image" style="max-width: 300px; margin-top:10px;">
                        <?php endif; ?>
                     
                    </div>
                </div>

                <!-- Content -->
                <div class="col-md-12">
                    <div class="from__input-box">
                        <div class="form__input-title">
                            <label>Blog Content <span>*</span></label>
                        </div>
                        <div class="from__input-box">
                            <textarea id="tinymce_simple_textarea" name="content"><?= htmlspecialchars($blog['content'] ?? '') ?></textarea>
                        </div>
                    </div>
                </div>

                <!-- Excerpt -->
                <div class="col-md-12">
                    <div class="from__input-box">
                        <div class="form__input-title">
                            <label>Blog Short Excerpt <span>*</span></label>
                        </div>
                        <div class="from__input-box">
                            <textarea id="tinymce_simple_textarea" name="excerpt"><?= htmlspecialchars($blog['excerpt'] ?? '') ?></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="submit__btn text-center my-5">
        <button class="btn btn-primary">Update Blog</button>
    </div>
</form>
