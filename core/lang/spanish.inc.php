<?php
    $filename = __DIR__ . '/spanish-utf8.inc.php';
    $contents = file_get_contents($filename);
    $contents = utf8_decode($contents);
    eval('?>' . $contents);
    $modx_lang_attribute = 'es'; // Manager HTML/XML Language Attribute see http://en.wikipedia.org/wiki/ISO_639-1
    $modx_manager_charset = 'iso-8859-1';
?>
