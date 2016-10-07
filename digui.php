<?php
function test($n)
{
    echo $n . " ";
    if ($n > 0) {
        test($n - 1);
    } else {
        echo "<-->";
    }
    echo $n . " ";
}

test(10);
echo '<hr>';
?>

<?php
function one($num)
{
    echo $num;
    two($num - 1);
    echo $num;
}

function two($num)
{
    echo $num;
    three($num - 1);
    echo $num;
}

function three($num)
{
    echo $num;
}

one(3);
?>

