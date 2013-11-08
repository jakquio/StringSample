
<?php

// Define link attributes here

// Checks to see if MyLinks.php exists
// if( !file_exists('view/elements/myLinks')) 
// {
// 	echo show_404();
// }

// URL segment declarations - make sure it's the public function callback
$aboutMe = 'about_me';
$myJquery = 'jquery_test';
$string_play = 'string_play';

// anchor function usage: anchor(url segment, text, attributes);

?>

<div id='topMenu'>
	<table>
	<tr>
		<td><?php echo anchor(NULL,  'Main'); ?></td>
		<td><?php echo anchor($aboutMe, 'About Me'); ?></td>
		<td><?php echo anchor($myJquery, 'Jquery Sample' ); ?></td>
		<td><?php echo anchor($string_play, 'Play with Words!' ); ?></td>
	</tr>
	</table>
</div>