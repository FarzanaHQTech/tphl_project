<?php
    $page_title = "Create camera ";
    $page = 'Add Camera ';
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
                                                        <label for="name">Camera Name <span>*</span></label>
                                                    </div>
                                                    <div class="form__input">
                                                        <input class="form-control" name="name" id="name" type="text">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-12">
                                                <div class="from__input-box">
                                                    <div class="form__input-title">
                                                        <label for="streamPath">Stream Path<span>*</span></label>
                                                    </div>
                                                    <div class="form__input">
                                                        <input class="form-control" name="streamPath" id="streamPath" type="text">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="submit__btn text-center mb-20">
                                                <button class="btn btn-primary">Add Camera</button>
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