<?php
//// Script for showing full screen HashOver Next comments for a certain page ////

// To use this, place this file on your HashOver Next directory and then
// set hashover_comment_within_page to false on Hexo's _config.yml

// Retrieve values from GET variables in the url
$url = @$_GET['url'];
$title = @$_GET['title'];
if ( $title ) {
	$identifier = $title;
} else {
	$identifier = $url;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comments for &quot;<?=$identifier?>&quot;</title>
</head>
<body>

<?php if ( intval(@$_GET['noback']) != 1 ) : ?>

<a href="<?=$url?>" title="Click this link to go back to &quot;<?=$identifier?>&quot;">&laquo; Go back to article</a>
<hr/>

<?php endif; ?>

<div id="hashover"></div>

<script type="text/javascript" src="https://lazplanet.adnan360.com/hovr/loader.php"></script> 
<script type="text/javascript">
    var hashover = new HashOver ('hashover', {
        url: '<?=$url?>',
        title: '<?=$identifier?>'
    });
</script> 

</body>
</html>
