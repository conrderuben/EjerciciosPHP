<?php
require '../Ej09/utilHTML.php';

for($i=1; $i<=50; $i++){
    if($i%2==0){
        echo $i."<br/>\n";
        
    }else{
        echo  resaltar($i) . "<br/>\n";
    }
    
}


?>