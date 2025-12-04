<?php
$current_page = $GLOBALS['current_page'];

function isActive($pages, $current_page) {
    if (is_array($pages)) {
        return in_array($current_page, $pages) ? 'active' : '';
    }
    return ($current_page === $pages) ? 'active' : '';
}

function isMenuOpen($pages, $current_page) {
    if (is_array($pages)) {
        return in_array($current_page, $pages) ? 'open' : '';
    }
    return ($current_page === $pages) ? 'open' : '';
}
?>


<?php
if (!isset($page_title)) {
    $page_title = 'Blank'; 
}

require __DIR__ . '/../header.php';
?>


<?php
if (isset($show_breadcrumb) && $show_breadcrumb === true) {
    include __DIR__ . '/../breadcrumb-area.php';

}
?>
<div class="app__slide-wrapper">
    <?php
    if (isset($content)) {
        echo $content;
    }
    ?>
</div>


<?php
require __DIR__ . '/../footer.php';
?>
