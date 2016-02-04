<?php
    function minify($path) {
            $cssFiles = array();

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
    function writting($file, $buffer) {
        if (file_exists($file)) {
            unlink($file);
        }
        $cssFiles = fopen($file, 'a');
        fwrite($cssFiles, $buffer);
        fclose($cssFiles);
    }
?>