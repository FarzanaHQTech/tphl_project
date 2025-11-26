<?php
$page_title = "Create Blog ";
$page = 'Add Blog ';
$show_breadcrumb = true;

?>
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
                                        <label for="blogName2">Blog Title<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="blogName2" id="blogName2" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Blog Thumb<span>*</span></label>
                                    </div>
                                </div>
                                <div class="dropzone dz-clickable" id="myNewDropzone">
                                    <div class="dz-default dz-message"><i class="fa-thin fa-cloud-arrow-up"></i>
                                        <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo
                                            dropzone. Selected files are
                                            not actually uploaded.)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Create Date <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" id="purchaseDate" type="text" placeholder="" readonly="readonly">
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
                                        <select id="blogStatus" class="form-select">
                                            <option value="1">Publish</option>
                                            <option value="2">Draft</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Blog Description
                                            <span>*</span></label>
                                    </div>
                                    <div class="from__input-box">
                                        <textarea id="tinymce_simple_textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Blog Gallery</label>
                                    </div>
                                </div>
                                <div class="dropzone dz-clickable" id="myDropzone">
                                    <div class="dz-default dz-message"><i class="fa-thin fa-cloud-arrow-up"></i>
                                        <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo
                                            dropzone. Selected files are
                                            not actually uploaded.)</span>
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