<?php
    $user_number = rand(0,100);
    echo "Вы ввели число: " . "$user_number<br><br>";

    $number_1 = 1;
    $number_2 = 1;

    function numerical_series($user_number)
    {
        if ($number_1 > $user_number) {
            echo "Задуманное число НЕ входит в числовой ряд.";
            break;
        } elseif ($number_1 === $user_number) {
            echo "Задуманное число входит в числовой ряд.";
            break;
        } else {
            return $number_3 = $number_1;
            return $number_1 =+ $number_2;
            return $number_2 = $number_3;
            numerical_series($user_number);
        }
    }

    var_dump(numerical_series($user_number));
?>
