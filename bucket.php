<?php

/**
 * 桶排序 (Bucket sort)或所谓的箱排序，是一个排序算法，工作的原理是将数组分到有限数量的桶子里
 */


function bucketSort(array $array, $order = 'asc')
{
    //定义桶数组
    $bucketArr = array();
    for ($i = 0; $i <= max($array); $i++) {             //循环M次,M个桶
        $bucketArr[$i] = 0;
    }

    //将排序数据放入桶中
    array_map(function ($v) use (&$bucketArr) {          //循环n次,n个数
        $bucketArr[$v]++;
    }, $array);

    //输出排序
    if ($order == 'asc') {
        for ($j = 0; $j <= count($bucketArr)-1; $j++) {     //循环m+n
            for ($k = 1; $k <= $bucketArr[$j]; $k++) {
                $result[] = $j;
            }
        }
    } else {
        for ($j = count($bucketArr)-1; $j >=0 ; $j--) {
            for ($k = 1; $k <= $bucketArr[$j]; $k++) {
                $result[] = $j;
            }
        }
    }

    return $result;
}

$array = [8, 4, 6, 9, 3, 6, 1];
print_r(bucketSort($array, 'desc'));

//时间复杂度 O(2*(m+n)) -> O(M+N)
//简化版的桶排序,这个很浪费空间, 局限性很大,只能排序正整数