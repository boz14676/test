<?php

function dump($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}


/**
 * 输出数字范围
 *
 * @param int $from 开始阈值
 * @param int $to   结束阈值
 * @param int $type 方式
 */
function number_list($from, $to, $type = 1) {
    $arr = [];
    // 递增方式
    if ($type == 1) {
        for ($i = $from; $i < $to + 1; $i ++) {
            $arr[] = $i;
        }
    }

    // 递减方式
    elseif ($type == 2) {
        for ($i = $from; $i > $to - 1 ; $i --) {
            $arr[] = $i;
        }
    }

    return $arr;
}

$numbers = number_list(1, 10, 1); // [16, 15, 14, 13];
dump($numbers);
exit;