<?php

/**
 * 冒泡排序:每次比较相邻的元素,如果他们的顺序错误就把他们交换过来
 *
 * 如果有 n 个数进行排序,只需将 n1 个数归位,也就是说要进行 n-1 趟操作。
 * 而“每一趟”都需要从第 1 位开始进行相邻两个数的比较,将较小的一个数放 在后面,
 * 比较完毕后向后挪一位继续比较下面两个相邻数的大小,重复此步骤,
 * 直到最后一 个尚未归位的数,已经归位的数则无需再进行比较
 *
 * 时间复杂度: O(N*N)
 */

function bubbleSort($array, $order = 'asc')
{
    $count = count($array);
    if ($count <= 0) {
        return false;
    }
    for ($i = 0; $i < $count; $i++) {               //控制第几趟排序
        if ($order == 'asc') {
            for ($k = $count - 1; $k > $i; $k--) {      //每一趟的比较排序
                if ($array[$k] < $array[$k - 1]) {
                    $tmp = $array[$k];
                    $array[$k] = $array[$k - 1];
                    $array[$k - 1] = $tmp;
                }
            }
        } else {
            for ($k = $count - 1; $k > $i; $k--) {      //每一趟的比较排序 抓取最大的放在前面
                if ($array[$k] > $array[$k - 1]) {
                    $tmp = $array[$k];
                    $array[$k] = $array[$k - 1];
                    $array[$k - 1] = $tmp;
                }
            }
        }

    }
    return $array;
}

$array = [4, 6, 2, 9, 10, 6, 3, 7];
print_r(bubbleSort($array, 'desc'));


