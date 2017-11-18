
<?php
/**
 * 变量的定义
 */
// 变量是临时存储数据的容器

//$a = 100; // 声明一个变量a，赋值了整数100
//$b = 'yes'; // 声明一个变量b, 赋值了字符串yes
//$c = true; // 声明了一个变量c，赋值了布尔值true
//$d = 99.99; // 声明一个变量d，赋值了浮点值99.99
//$e = $a; // 声明一个变量e，赋值了变量

/**
 * php类型
 * 1、字符串类型     一个字符串是一串字符的序列，将任何文本放在单引号和双引号中叫做字符串类型。
 * 2、整型          是一个没有小数的数字。
 * 3、浮点类型       浮点数是带小数部分的数字，或是指数形式。
 * 4、布尔类型       布尔型通常用于条件判断。true、false
 * 5、数组          数组可以在一个变量中存储多个值。
 * 6、对象          对象数据类型也可以用于存储数据。在 PHP 中，对象必须声明。首先，你必须使用class关键字声明类对象。
 *                  类是可以包含属性和方法的结构。
 */

/**
 * 赋值运算符
 */
$x = 5; // 声明一个变量x，赋值了整型5
$x += 5; // $x = $x + 5;
$x -= 3; // $x = $x - 3;
$x *= 2; // $x = $x * 2;
$x /= 7; // $x = $x / 7;
//echo $x;

/**
 * 比较运算符
 */
$com_foo = 5;//声明了一个变量foo，赋值了整型5
$com_bar = 3; // 声明了一个变量bar，赋值了整型3
$com_bar2 = '3'; // 声明了一个变量bar2，赋值了字符串'3'

/* 大于、小于 */
//echo ($com_bar > $com_foo) ? 'true' : 'false';
//echo ($com_bar < $com_foo) ? 'true' : 'false';

/* 大于等于、小于等于 */
// echo ($com_bar >= $com_bar2) ? 'true' : 'false';

/* 等于（只比较值是否相等） */
// echo ($com_bar == $com_bar2) ? '1' : '0';
//
/* 全等于（首先比较值，还要比较值的类型） */
//echo ($com_bar === $com_bar2) ? 'yes' : 'no';

/* 不等于（只比较值是否不相等） */
// echo ($com_bar != $com_bar2) ? 'true' : 'false';

/**
 * 1. 比较值是否不相等，不相等返回true，否则进行第二步比较
 * 2. 比较类型是否不相等，不相等返回true，否则返回false
 */
/* 不全等于（比较值是否不相等，如果值相等继续比较类型是否不相等） */
// echo ($com_bar2 !== $com_foo) ? 'true' : 'false';
//echo $com_bar !== $com_bar2 ? 'neq' : 'eq';

/**
 * 逻辑运算符
 */
$foo = false; // 声明了一个变量foo，赋值了布尔类型false
$bar = true; // 声明了一个变量bar，赋值了布尔类型true

$bar2 = $com_bar == $com_bar2; // 声明了一个变量bar2，赋值了布尔类型true
$foo2 = $com_bar === $com_bar2; // 声明了一个变量foo2，赋值了布尔类型false

/* 逻辑与 */
// && 符号左右两边都要为true，返回ture，否则返回false
// echo ($bar2 && $com_bar2 !== $com_bar) ? 'yes' : 'no'; // TODO: 多打几遍
//echo  ($bar2 && $com_bar2 !== $com_bar) ? 'yes' : 'no';



/* 实战 */
$cou = '美国';
$cit = '纽约';
$dis = '曼哈顿';
$boo = ($cou == '美国' && $cit ==  '纽约' && $dis == '皇后')
    || ($cou == '美国' && $cit == '纽约' && $dis == '曼哈顿');

$echo = '';
if ($dis == '哈林') {
    $echo = '一般';
}

elseif ($dis == '曼哈顿') {
    $echo = '还好';
}

else {
   $echo = '很好';
}
// echo $echo;

/* 逻辑或 */
// && 符号左右两边有一个为true，返回true，否则返回false
//echo ($com_foo == '5' || $com_bar == $com_bar2) ? 'yes' : 'no';

/* 逻辑非 */
// 取反
//echo !($com_foo !== '5') ? 'yes' : 'no';

/* 逻辑异或 */
// 左右两边操作只能有一个为true时，返回true，否则返回false
//echo (false xor true) ? 'true' : 'false';

/**
 * 其他运算符
 */
// 三元运算符
$num1 = 5;
$num2 = '5';
$num3 = 8;
$other_com = $num1 === $num2; // 声明了一个变量other_com，赋值了布尔类型false
//echo ($num1 != $num2) ? '真' : '假';

/**
 * 分支结构
 */
// 单一条件、双向条件 分支结构（if、else从句）
/*if ( !($num1 + $num3 + $num1 > 100) && ($num3 + $num1 == 100) ) {
    echo '1';
} else {
    echo '0';
}*/

// 多项条件分支结构 (elseif子句)
$city = 'shanghai'; // 声明了一个变量city，赋值了字符串类型'beijing'
if ($city == 'shanghai') {
    $echo =  '上海';
}
elseif ($city == 'New York') {
    $echo = '纽约';
}
elseif ($city == 'beijing') {
    $echo = '北京'; // 声明了一个变量echo，赋值了字符串类型'北京'
}
else {
    $echo = '132';
}
// echo $echo;

// 多项条件分支结构（switch语句）
$i = 0;
$country = 'zhongguo'; // 声明了一个变量country，赋值了字符串类型'meiguo'
$echo = ''; // 声明了一个变量echo，赋值了字符串类型''
switch ($country) {
    case 'zhongguo':
        $echo = '中国';
        $i = 123;
        break;

    case 'yingguo':
        $echo = '英国';
        break;

    case 'meiguo':
        $echo = '美国'; // 赋值了字符串类型'美国'
        break;

    default:
        $echo = '全球';
}

// echo $i;

/**
 * while语句 (789, 543)
 */
 //$a = 10;
 //while ($a > 7) {
 //    $a--;
 //    echo $a;
 //}
//$a = 6;


/**
 * do...while语句
 */
//$a = 0;
//do {
//    echo $a;
//    echo "<br />";
//    $a--;
//} while ($a > 0);

/**
 * for语句 (789, 543)
 */
//for ($i=0; $i<10; $i++) {
//   echo $i . '<br />';
//}


// 第一个表达式：在第一次循坏开始前无条件执行一次
// 第二个表达式：在每次循环开始前执行一次，如果该表达式返回真则 执行下面的 嵌套循环语句，否则终止循环
// 第三个表达式：在每次循环结束后执行一次

// for ($k = 1; $k < 10; $k ++) {
//     $k = 3;
//
//     for ($j = 1; $j < 10; $j ++) {
//         echo $k . "x" . $j . " = " . $k * $j;
//         echo "<br />";
//     }
// }