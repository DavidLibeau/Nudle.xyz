<?php
if(isset($_GET["q"])){
    $results=json_decode(file_get_contents("http://api.duckduckgo.com/?q=".$_GET["q"]."&format=json&pretty=1&disambiguation=1&no_redirect=1"));

    var_dump($results,TRUE);
    echo("<br/><br/><br/>");
    var_dump($results->{"Results"}); 
}
?>