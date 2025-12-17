<?php
$page_title = "blog page";
$page = 'Blogs';
$show_breadcrumb = true;

?>
<form method="GET" action="">
    <div class="row g-20 mb-20 justify-content-between align-items-end">

        <!-- Search -->
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="card__wrapper">
                <div class="search-box">
                    <input type="text" class="form-control" name="q" id="blogName"
                        placeholder="Blog Title "
                        value="<?= htmlspecialchars($searchTerm ?? '') ?>">
                </div>
            </div>
        </div>


        
        <!-- Submit -->
        <div class="col-xxl-6  col-md-6">
            <div class="card__wrapper">
                <div class="d-flex align-items-center justify-content-between gap-15">
                    <button type="submit" class="btn btn-secondary"> Filter</button>

                    <a type="button" class="btn btn-primary w-100" href="<?= $GLOBALS['base_url'] ?>/create-blog">
                        Add Blog</a>
                </div>
            </div>
        </div>

    </div>
</form>
<div class="row gy-20">

<?php foreach($blogs as $blog) : ?>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
        <article class="bd-blog-wrapper">
            <div class="bd-blog-thumb">
                <a href="index.php?page=blog-details"><img src="<?= getImage('blogs',$blog['image']) ?>"
                        alt="image"></a>
            </div>
            <div class="bd-blog-content">
                <div class="bd-blog-meta-list">
                    <div class="bd-blog-meta-item has-seperator">
                        <span class="meta-icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="meta-text"><a class="meta-author" href="index.php?page=blog-details"></a></span>
                    </div>
                    <div class="bd-blog-meta-item">
                        <span class="meta-icon">
                            <i class="fa-sharp fa-light fa-calendar"></i>
                        </span>
                        <span class="meta-text"><a href="index.php?page=blog-details">July 11,
                                2024</a></span>
                    </div>
                </div>
                <h4 class="bd-blog-title"><a href="index.php?page=blog-details"><?= $blog['title'] ?? '' ?></a></h4>
                <p><?= $blog['excerpt'] ?? '' ?></p>
                <div class="btn-text-icon p-relative">
                    <a href="<?= $GLOBALS['base_url'] ?>/blog-details/<?= $blog['id'] ?>">
                        <span>Read More</span>
                        <i>
                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.2871 1L17 6.71285L11.2871 12.4257" stroke="currentColor"
                                    stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M1 6.71313H16.8397" stroke="currentColor" stroke-width="1.5"
                                    stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </i>
                    </a>
                </div>
                  <div class="employee__btn">
                            <div class="d-flex align-items-center justify-content-center gap-15">

                              
                                <a class="btn btn-outline-theme-border" href="<?= $GLOBALS['base_url'] ?>/edit-blog/<?= $blog['id'] ?>">Edit</a>
                                <a class="btn btn-outline-theme-border removeBtnCust" href="#">Delete</a>
                            </div>
                        </div>
            </div>
        </article>
    </div>
<?php endforeach ?>



   



    <div class="text-center d-flex justify-content-center mt-40 mb-20">
        <button type="button" class="btn btn-primary">Load More</button>
    </div>
</div>