<?php

function solution($A) 
{
    $n = count($A);
    sort($A);
    $min_dist = 10^20;
    //1,3,8,17,20,24
    for($i = 0; $i < $n - 1; $i++) 
    {
        $current_dist = $A[$i+1] - $A[$i];
        if($current_dist < $min_dist)
        {
            $min_dist = $current_dist;
        }
    }
    
    return $min_dist;
}

solution([8, 24, 3, 20, 1, 17]);