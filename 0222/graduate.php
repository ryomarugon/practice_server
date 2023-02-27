<?php
echo '学習開始日を入力してください' . "\n";
$start=rtrim(fgets(STDIN));
$finish=date("Y-m-d", strtotime($start."+43 day"))."\n";
echo $finish."\n";
?>