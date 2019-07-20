<?php
function task1($arr = [], $flag = false)
{
    if ($flag) {
        return implode('', $arr);
    }
    echo '<p>' . implode('</p><p>', $arr) . '</p>';
}

function task2($operand, ...$numbers)
{
    $result = $numbers[0];
    $error = 'На 0 делить нельзя';
    switch ($operand) {
        case '+':
            for ($i = 1; $i < count($numbers); $i++) {
                $result += $numbers[$i];
            }
            break;
        case '-':
            for ($i = 1; $i < count($numbers); $i++) {
                $result -= $numbers[$i];
            }
            break;
        case '/':
            for ($i = 1; $i < count($numbers); $i++) {
                if ($numbers[$i] > 0) {
                    $result /= $numbers[$i];
                } else {
                    return $error;
                }
            }
            break;
        case '*':
            for ($i = 1; $i < count($numbers); $i++) {
                $result *= $numbers[$i];
            }
            break;
    }
    return $result;
}

function task3($num1, $num2)
{
    if (is_int($num1) && is_int($num2)) {
        echo "<table>";
        for ($i = 1; $i <= $num1; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $num2; $j++) {
                echo "<td>" . $i * $j . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } elseif (!is_int($num1)) {
        echo "Число {$num1} не целое.";
    } elseif (!is_int($num1)) {
        echo "Число {$num2} не целое.";
    } else {
        echo "Числа {$num1} и {$num2} не целые.";
    }
}

function task4()
{
    echo date('d.m.Y H:i');
    echo strtotime('24.02.2016 00:00:00');
}

function task5()
{
    echo str_replace('К', '', 'Карл у Клары украл Кораллы');
    echo str_replace('Две', 'Три', 'Две бутылки лимонада');
}

function task6($fileName)
{
    echo file_get_contents(__DIR__.'/'.$fileName);
}
