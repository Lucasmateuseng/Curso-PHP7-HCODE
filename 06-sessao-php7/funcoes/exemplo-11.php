<?php
//funçoes anonimas

function test($callback){
    //processo lento

    $callback();

}

test(function(){

    echo "terminou";

});

?>
