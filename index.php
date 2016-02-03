<?php

    $cssFiles = array();

    $count = 0;
    $path = 'css/styles';

    $dir = dir($path);

    while (( $file = $dir->read() ) != false ) {
        if ( ++$count > 2 ) {
            $file_new = str_replace('.css', '', $file);
            //echo $file_new . "<br>";
            if ( $file_new != $file ) {
                $cssFiles[] = str_replace('.css', '', $file);
                //echo $cssFiles[$file];
            }
        }
        //All the files in the path are included
        if (is_file($path . '/' . $file) and preg_match('/^(.+)\.css$/i', $file)) {
            //echo $path . '/' . $file;
            //include $path . '/' . $file;
        }
    }
    $dir->close();

    $buffer = "";
    foreach ($cssFiles as $cssFile) {
        $content = $path . '/' . $cssFile . '.css';
        //echo $content;
        $buffer .= file_get_contents($content);
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
    //header('Cache-Control: public');

    // Expire in one day
    //header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');

    // Set the correct MIME type, because Apache won't set it for us
    //header("Content-type: text/css");

    //FILE WRITING
    $concat = 'import';
    $urlStyles = 'css/min/';
    $file = $urlStyles . $concat . '.min.css';
    if (file_exists($file)) {
        unlink($file);
    }
    $cssFiles = fopen($file, 'a');
    fwrite($cssFiles, $buffer);
    fclose($cssFiles);
?>