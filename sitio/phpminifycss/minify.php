<?php
/**
 * On-the-fly CSS Compression
 * Copyright (c) 2009 and onwards, Manas Tungare.
 * Creative Commons Attribution, Share-Alike.
 *
 * In order to minimize the number and size of HTTP requests for CSS content,
 * this script combines multiple CSS files into a single file and compresses
 * it on-the-fly.
 *
 * To use this in your HTML, link to it in the usual way:
 * <link rel="stylesheet" type="text/css" media="screen, print, projection" href="/css/compressed.css.php" />
 */

/* Add your CSS files to this array (THESE ARE ONLY EXAMPLES) */
$cssFiles = array(
    'css/styles/action-bar.css',
    'css/styles/contact.css',
    'css/styles/footer.css',
    'css/styles/form-elements.css',
    'css/styles/fullwidth-features.css',
    'css/styles/global-helper-sectio.css',
    'css/styles/headers-slider-dividers.css',
    'css/styles/hero-carousel.css',
    'css/styles/infobox.css',
    'css/styles/integrity-light.css',
    'css/styles/main-navigation.css',
    'css/styles/main-sitio.css',
    'css/styles/media-box.css',
    'css/styles/media-print.css',
    'css/styles/results-items.css',
    'css/styles/section-colors.css',
    'css/styles/single-listing-action.css',
    'css/styles/typography.css',
    'css/styles/video-strip.css'
);

/**
 * Ideally, you wouldn't need to change any code beyond this point.
 */
$buffer = "";
foreach ($cssFiles as $cssFile) {
  $buffer .= file_get_contents($cssFile);
}

// Remove comments
$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);

// Remove space after colons
$buffer = str_replace(': ', ':', $buffer);

// Remove whitespace
$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);

// Enable GZip encoding.
ob_start("ob_gzhandler");

// Enable caching
header('Cache-Control: public');

// Expire in one day
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');

// Set the correct MIME type, because Apache won't set it for us
header("Content-type: text/css");

// Write everything out
/*
$concat = 'import';
$urlStyles = 'css/styles/min/';
$file = $urlStyles . $concat . '.min.css';
if ( file_exists($file) ) {
    unlink($file);
}
*/
echo($buffer);
//$buffer = fopen($file, 'a');
//fwrite($cssFile, $buffer);
//fclose($cssFile);
?>
