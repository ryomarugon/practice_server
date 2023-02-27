<?php
echo "登録したい生徒の人数を入力してください" . "\n";
$num = rtrim(fgets(STDIN));
echo $num . '人の生徒を登録できます' . "\n";
for ($i = 1; $i <= $num; $i++) {
    echo '名前 年齢を記入して下さい' . "\n";
    $values = rtrim(fgets(STDIN));
    $array_data = explode(" ", $values);
    $name = $array_data[0];
    $age = $array_data[1];
    echo $name . 'さんは' . $age . '歳の生徒です。' . "\n";
    if ($i==$num) {
        echo '登録が完了しました';
        break;
    }
}
?>