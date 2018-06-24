<?php

setcookie('username', 'Adele', time() + (86400 * 30);
          
          
if(count($_COOKIE) > 0) {
    echo 'There are ' .count($COOKIE). ' cookies saved';
}else{
    echo 'There are no cookies saved';
}
}
          

if(isset($_COOKIE['name'])){
    echo 'User ' . $_COOKIE['name'] . 'is set <br>'
        
}else{
    echo 'User is not set';
}
}

?>