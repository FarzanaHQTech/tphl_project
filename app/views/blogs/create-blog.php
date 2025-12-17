<?php
$page_title = "Create Blog ";
$page = 'Add Blog ';
$show_breadcrumb = true;

?>
<form action="<?= $GLOBALS['base_url'] ?>/store-blog" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-xxl-12">
            <div class="row gy-10">
                <div class="col-xl-12">
                    <div class="card__wrapper">
                        <div class="row gy-20">
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="title">Blog Title<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="title" id="title" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="author">Author<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="author" id="author" type="text">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Publish Date <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" id="startingDate" type="text" placeholder="" readonly="readonly" name="published_date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="blogStatus" class="form-label">Status
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <select id="blogStatus" class="form-select" name="status">
                                            <option value="1">Publish</option>
                                            <option value="0">Draft</option>

                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="photo">Employee Photo (1000*500px)</label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" id="photo" type="file" name="image">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Blog Content
                                            <span>*</span></label>
                                    </div>
                                    <div class="from__input-box">
                                        <textarea id="tinymce_simple_textarea" name="content"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Blog short Excerpt
                                            <span>*</span></label>
                                    </div>
                                    <div class="from__input-box">
                                        <textarea id="tinymce_simple_textarea" name="excerpt"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="submit__btn text-center mb-20">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>