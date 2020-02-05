<script>
    //$(document).ready(function() {
        $("#block_url").css("display","none");
        $("#block_cms").css("display","none");
    //});
    
    function change_type(val) {
        if (val == "url") {
            $("#block_url").css("display","");
            $("#block_cms").css("display","none");
        } else if (val == "cms") {
            $("#block_url").css("display","none");
            $("#block_cms").css("display","");
        } else {
            $("#block_url").css("display","none");
            $("#block_cms").css("display","none");
        }
    }
    <?php
    $menu_type = ($this->input->post('menu_type') ? $this->input->post('menu_type') : @$menu['menu_type']);
    if ($menu_type != "") {
        echo 'change_type(\''.$menu_type.'\');';
    }
    ?>
</script>