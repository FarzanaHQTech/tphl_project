<?php
$page_title = "Create FAQ ";
$page = 'Add FAQ ';
$show_breadcrumb = true;

?>
<form action="#">
    <div class="row">
        <div class="col-xxl-12">
            <div class="row gy-10">
                <div class="col-xl-12">
                    <div class="card__wrapper">
                        <div class="row gy-20">
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="faqQuestion">FAQ Question<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="faqQuestion" id="faqQuestion" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="faqAnswer">Faq Answer<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="faqAnswer" id="faqAnswer" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="faqType">FAQ Type<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="faqType" id="faqType" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="status">FAQ Status<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="status" id="status" type="text">
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