<?php
echo '日付を入力してください' . "\n";
$n=rtrim(fgets(STDIN));
echo date("Y-m-d",strtotime($n . "+7 day"))."\n";

?>