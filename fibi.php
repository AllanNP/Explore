<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.02.2018
 * Time: 12:44
 */
function fibonacci($n)
{
    if ($n < 3)
    {
        return 1;
    }
    else
    {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}
$sum = 0;
for ($n = 0;; $n++)
{
    if(fibonacci($n)>10000)
    {
        break;
    }

    $sum += fibonacci($n);
}
echo $sum;