<?php
    include 'function-minify.php';
    $base = '../../css/';
    function process($base, $array) {
        $principal = function($internalBase, $internalValue){
            $pathBuffer = $internalBase . $internalValue . '/development/';
            $styleBuffer = minify($pathBuffer);

            $pathFile = $internalBase . $internalValue . '/output/import-'. $internalValue . '.min.css';
            writting($pathFile, $styleBuffer);
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
    $dirArray = array(
        'bootstrap'=>'bootstrap',
        'sitio'=> array(
            'plugins'=>'plugins'
        ),
        'styles'=>'styles',
        'webfonts'=>'webfonts'
    );
    process($base, $dirArray);
?>