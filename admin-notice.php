<?php 
    /*
        Plugin Name: Admin notice
    */ 




    add_action("admin_notices", function(){
        global $pagenow;
        if(!(isset($_COOKIE["nn-close"]) && $_COOKIE["nn-close"] == 1)):
        ?>
<div id="notice_ninja" class="notice notice-info is-dismissible">
    <h3>Admin Notice</h3>
    <p>Hey, There is a notice for you. <?php echo $pagenow;?></p>

</div>
<?php
        endif;
    });

    function notice_admin_assets(){
        wp_enqueue_script("notice-js", plugin_dir_url(__FILE__)."assets/js/notice.js", ["jquery"], time(), true);
    }

    add_action("admin_enqueue_scripts", "notice_admin_assets");
?>