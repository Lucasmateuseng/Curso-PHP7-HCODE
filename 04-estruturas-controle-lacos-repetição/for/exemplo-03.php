<?php

echo "<select>";

for ($i=date("Y"); $i >= date("Y")-100 ; $i--) { 
    //geração de um campo option    
    echo '<option value="'.$i.'">'.$i.'</option>';
}

echo "</select>"

?>