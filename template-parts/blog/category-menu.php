    <div class="category my-4">
        <div class="container">
            <li class="head">دسته‌بندی‌ها:</li>
            <?php
$args = array(
    'orderby' => 'name',
    'parent' => 0,
);
$categories = get_categories($args);
foreach ($categories as $category) { 
    $catID = $single_category->cat_ID;

    $theid = $category->term_id;
    $children = $wpdb->get_results("SELECT term_id FROM $wpdb->term_taxonomy WHERE parent=$theid");
    $no_children = count($children);
    if ($no_children > 0) {
    echo '<li class="title parent" style="border-top: 0px;"><a href=" ' . get_category_link($category->cat_ID) . ' ">' . $category->cat_name . '<i class="icon icon-anfle-down "></i></a>';

}if ($no_children <= 0){
    echo '<li class="title" style="border-top: 0px;"><a href=" ' . get_category_link($category->cat_ID) . ' ">' . $category->cat_name . '</a>';

}

    if ($no_children > 0) {
        echo "<ul class='submenu'>";
        $args2 = array(
            'orderby' => 'name',
            'parent' => 2,
        );
        $args2["parent"] = $category->term_id;
        $categories2 = get_categories($args2);
        foreach ($categories2 as $category2) {

            echo '<li><a href=" ' . get_category_link($category2->cat_ID) . ' ">' . $category2->cat_name . '</a></li>';

        }
        echo '</ul>';
    } else {
        echo '</li>';
    }

}
?>

<li><a href="#" title="عضویت در خبرنامه" class="rss"><i class="icon icon-rss "></i></a></li>
        </div>
        <!-- end container -->
        
    </div>
    <!-- end category -->