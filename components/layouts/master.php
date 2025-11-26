<?php
$current_page = $GLOBALS['current_page'];
?>
<?php
if (!isset($page_title)) {
    $page_title = 'Blank'; // default title
}

require __DIR__ . '/../header.php';
?>
<!--=======================================================================-->
<!------------------------  Content Start From Here --------------------->
<!--=======================================================================-->

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

<!--=======================================================================-->
<!----------------------------  Content End Here ------------------------->
<!--=======================================================================-->

<?php
require __DIR__ . '/../footer.php';
?>
