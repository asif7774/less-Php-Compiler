<?php
require_once 'Less.php';
$parse_file = file_get_contents('style.less');
try{
    $parser = new Less_Parser();    
    $parser->parse( $parse_file );
    $css = $parser->getCss();
    echo $css;
}catch(Exception $e){
    $error_message = $e->getMessage();
    echo $error_message;
}
?>
