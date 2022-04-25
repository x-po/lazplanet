<?php
//// Script for showing full screen HashOver Next comments for a certain page ////

// License: CC0 1.0 Universal (https://creativecommons.org/publicdomain/zero/1.0/legalcode)

// To use this, on LazPlanet project place this file on your HashOver Next
// directory and then set hashover_comment_display_style to 2 on Hexo's
// _config.yml

// Without Hexo, just link to this file with "url" and "title" parameters.

// Retrieve values from GET variables in the url
// URL of the page to show comments for
$url = filter_input(INPUT_POST | INPUT_GET, 'url', FILTER_SANITIZE_SPECIAL_CHARS);
// Title of the page to show on UI
$title = filter_input(INPUT_POST | INPUT_GET, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
// Fallback if title is not given
if ( $title ) {
	$identifier = $title;
} else {
	$identifier = $url;
}

// Hides the go back link when noback is set to 1
$noback = intval(filter_input(INPUT_POST | INPUT_GET, 'noback', FILTER_SANITIZE_SPECIAL_CHARS));

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comments for &quot;<?=$identifier?>&quot;</title>
</head>
<body>

<?php if ( $noback != 1 ) : ?>

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
