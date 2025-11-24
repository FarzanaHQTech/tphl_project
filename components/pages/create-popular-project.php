<?php
    $page_title = "Create Polpular Project ";
    $page = 'Add Popular Project';
    $show_breadcrumb = true;
    $content='
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
                                                        <label for="name">Name<span>*</span></label>
                                                    </div>
                                                    <div class="form__input">
                                                        <input class="form-control" name="name" id="name" type="text">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-12">
                                                <div class="from__input-box">
                                                    <div class="form__input-title">
                                                        <label for="position">Position<span>*</span></label>
                                                    </div>
                                                    <div class="form__input">
                                                        <input class="form-control" name="position" id="position" type="text">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-12">
                                                <div class="from__input-box">
                                                    <div class="form__input-title">
                                                        <label for="name">Link<span>*</span></label>
                                                    </div>
                                                    <div class="form__input">
                                                        <input class="form-control" name="link" id="link" type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 clo-lg-12 col-12">
                                                    <div class="from__input-box">
                                                        <div class="form__input-title">
                                                            <label>Size Image<span>*</span></label>
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
    
    
';
include "../layouts/master.php";
?>