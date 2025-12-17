<?php
$page_title = "blog details";
$page = "Blog Details";
$show_breadcrumb = true;

?>
<div class="row">
  
    <div class="col-xxl-12 col-sm-12">
        <div class="card__wrapper">
            <div class="post-details-wrapper">
                <div class="post-details-content">
                    <div class="post-details-top-content mb-30">

                        <h3 class="post-details-title mb-15"><?= $blog['title'] ?? '' ?></h3>
                        <div class="post-details-meta">
                            <ul>
                                <li><a href="javascript:"><img src="<?= getImage('blogs',$blog['image']) ?>" alt="author"><span>By</span> <?= $blog['author'] ?></a></li>
                                <li>
                                    <a href="javascript:">
                                        <i class="icon-calendar-check"></i>
                                        <?= !empty($blog['published_date'])
                                            ? date('d F, Y', strtotime($blog['published_date']))
                                            : ''
                                        ?>
                                    </a>
                                </li>

                                <!-- <li><a href="javascript:"><i class="icon-comment"></i> 02 Comments</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="post-details-thumb mb-30">
                        <a href="javascript:"><img src="<?= getImage('blogs',$blog['image']) ?>" alt="image" style="max-width: 58%;!important"></a>
                    </div>
                    <p class="mb-15">   <?= $blog['content'] ?></p>
                   
                </div>
            </div>
        </div>

        <div class="card__wrapper">
            <div class="post-comment-form">
                <div class="post-comments-title">
                    <h4 class="mb-15">Leave a Comment</h4>
                    <span class="d-block mb-25">Your email address will not be published. Required
                        fields are marked *</span>
                </div>
                <form>
                    <div class="row gy-20">
                        <div class="col-xl-6">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label for="name">Full Name<span>*</span></label>
                                </div>
                                <div class="form__input">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label for="email">Email<span>*</span></label>
                                </div>
                                <div class="form__input">
                                    <input class="form-control" name="name" id="email" type="text" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label>Your Message<span>*</span></label>
                                </div>
                                <div class="form__input">
                                    <textarea class="form-control" name="name" placeholder="Type Comment here"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="submit-btn">
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>