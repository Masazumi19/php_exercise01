<?php

echo '血液型を入力してください: ';
$blood_type = trim(fgets(STDIN));

// ここに処理を記述
switch($blood_type){
    case 'A':
        echo 'A型の方は几帳面だけど優しいらしいです！' . PHP_EOL;
        break;
    case 'B':
        echo 'B型の方は好奇心旺盛らしいです！'. PHP_EOL;
        break;
    case 'AB':
        echo 'AB型の人は先読み思考に優れた天才らしいです！'. PHP_EOL;
        break;
    case 'O':
        echo 'O型の人はおおらからしいです！'. PHP_EOL;
        break;
    default:
        echo '判定不能です！'. PHP_EOL;
        break;
}
