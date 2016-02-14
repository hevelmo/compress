<?php
    function importminify($path) {
        $cssPathFiles = array();

        $dir = dir($path);
        while (( $file = $dir->read() ) != false ) {
            if ( ++$count > 2 ) {
                $file_new = str_replace('.css', '', $file);
                if ( $file_new != $file ) {
                    $cssFiles[] = $path . $file;
                }
            }
        }
        $dir->close();
        $buffer = "";
        foreach ($cssFiles as $cssFile) {
          $buffer .= file_get_contents($cssFile);
        }
        $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
        $buffer = str_replace(': ', ':', $buffer);
        $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
        ob_start("ob_gzhandler");
        return $buffer;
    }
    $base = '../';
    $css = 'css/';

    $pathSite = 'sitio/';
    $pathIntranet = 'intranet/';
    $pathAdmin = 'admin/';

    $paths = array(
        $base . $pathSite . $css,
        $base . $pathIntranet . $css,
        $base . $pathIntranet . $pathAdmin . $css
    );
    /*$domains = '';
    foreach ($paths as $dom) {
        $dom .= file_get_contents($paths);
        echo $dom;
    }*/
    //importminify($dom);
    function process($array) {
        $principal = function($internalBase, $internalValue){
            $pathBuffer = $internalBase . $internalValue . '/development/';
            $styleBuffer = importminify($pathBuffer);
            echo $pathBuffer;

            /*$pathFile = $internalBase . $internalValue . '/output/import-'. $internalValue . '.min.css';
            writting($pathFile, $styleBuffer);*/
        };
        foreach ($array as $key => $value) {
            if ( !is_array($value) ) {
                $principal($base, $value);
            } else {
                $principal($base, $key);
                process($base.$key.'/', $value);
            }
        }
    }
    process($paths);
?>