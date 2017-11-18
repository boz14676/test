<?php
/**
 * Array
 */

function dump($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    exit;
}

/**
 * 索引数组
 */
$todoist = [
    '起床',
    '洗漱',
    '遛狗',
    '学习',
    '吃饭',
    '睡觉',
];
// dump($todoist);

$todoist2[] = '起床';
$todoist2[] = '吃饭';
$todoist2[] = '睡觉';
// dump($todoist2);

/**
 * 关联数组
 */
$person = [
    'name' => '吴雄',
    'sex' => '男',
    'age' => 19,
    'job' => '学生',
    'hobby' => '玩游戏'
];

// dump($person);

$perons2['name'] = '张三';
$perons2['age'] = 19;
// dump($perons2);


/**
 * 二维数组
 */
$persons = [
    0 => ['name' => '吴雄', 'sex' => '男'],
    1 => ['name' => '小红', 'sex' => '女'],
    2 => ['name' => '张三', 'sex' => '男'],
];

foreach ($persons as $index => $person) {
    if ($person['sex'] === '女') {
        $sex_pre = '她';
    } elseif ($person['sex'] === '男') {
        $sex_pre = '他';
    }

    echo '第' . ($index + 1) . '个人, ' . $sex_pre . '的名字是：' . $person['name'] . '';
}