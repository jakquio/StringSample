<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> <?php echo $title; ?> </title>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>application/libraries/jquery-1.10.2.js"></script>

	<script>
	$(document).ready( function() { // Write JQuery Code Here.

	var myColors = ['red','green','orange','pink','purple','blue'];

		$("#myHeading1").css({"color":"blue",});

		$("#myHeading1").click( function() {
			$(this).css({ 'color': 'green', })
		}); <!-- End of Click function -->
	}); <!-- End of JQuery -->
	</script>

	<?php echo link_tag('css/myLayout.css'); ?>

</head>

<body>