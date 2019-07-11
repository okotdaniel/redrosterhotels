<!doctype html>
<html lang="en">
<head>
<?php include 'admin_head.php' ; ?>
</head>
<body>

<div class="wrapper">
<?php include 'admin_sidebar.php' ; ?>

    <div class="main-panel">
    <?php include 'admin_menu.php' ; ?>
        <div id="map"></div>

    </div>
</div>


</body>
<?php include 'admin_js.php' ; ?>

    <script>
        $().ready(function(){
            demo.initGoogleMaps();
        });
    </script>

</html>
