<?php
for($i=0;$i<=3;$i++){
    echo str_repeat("&nbsp;",3-$i);
    echo str_repeat("*",$i*2+1);
    echo '<br/>';
}