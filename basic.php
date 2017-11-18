<?php
// function bump($data) {
//     echo '<pre>';
//     print_r($data);
//     echo '<pre/>';
// }
//
//
// $todoist = [
//     '起床',
//     '洗漱',
//     '吃饭',
//     '遛狗',
//
// ];
// dump($todoist[1]);




$persons = [
    ['name' => '吴雄', 'sex' => '男'],
    ['name' => '小红', 'sex' => '女'],
    ['name' => '张三', 'sex' => '男'],
];


foreach ($persons as $index => $person){
    echo '我是第' . ($index+1) . '个人, 我的名字叫：' . $person['name'] . '； ';
}