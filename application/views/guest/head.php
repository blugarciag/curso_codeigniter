<!DOCTYPE HTML>
<!--
	Photon by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/assets/css/main.css" />		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>plantilla/assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>plantilla/assets/js/jquery.scrolly.min.js"></script>
		<script src="<?php echo base_url(); ?>plantilla/assets/js/skel.min.js"></script>
		<script src="<?php echo base_url(); ?>plantilla/assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="<?php echo base_url(); ?>plantilla/assets/js/main.js"></script>
			<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!-- Scripts -->
	</head>
	<script type="text/javascript">

    // Ajax post
    $(document).ready(function() {

        $(".submit").click(function(event) {

            event.preventDefault();
            var user_name = $("input#name").val();
            var password = $("input#pwd").val();
            jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/ajax_post_controller/user_data_submit",
            dataType: 'json',
            data: {name: user_name, pwd: password},
            success: function (res) {
                
                
                location.reload();

            }
            });
        });
        
    });
    </script>
		
