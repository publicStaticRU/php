<?php

function insertionSort($mas, $masCount)
{
    for($i = 1; $i < $masCount; $i++)
    {
        $rightValue = $mas[$i];
        $leftValue = $i - 1;
        
        while($leftValue >= 0 && $mas[$leftValue] > $rightValue)
        {
            $mas[$leftValue+1] = $mas[$leftValue];
            $leftValue--;
        }
        
        $mas[++$leftValue] = $rightValue;
    }
    
    return $mas;
}


?>