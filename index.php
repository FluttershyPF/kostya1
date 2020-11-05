<?php


use Nikitenko\MyLog;
use Nikitenko\NikitenkoException;

require "core/EquationInterface.php";
require "core/LogAbstract.php";
require "core/LogInterface.php";
require "Nikitenko/MyLog.php";
require "Nikitenko/Equation.php";
require "Nikitenko/QuadEquation.php";
require "Nikitenko/NikitenkoException.php";


ini_set("display_errors", 1);
error_reporting (-1);

$b = new E();
try
{
    $values = array();
    for ($i = 0; $i < 3; $i++)
    {
        echo "Введите " . ($i+1) . "й-аргумент:";
        $values[$i] = (float)readline();
    }

    MyLog::Log("Введено уравнение" . $values[0] . "x^2+" . $values[1] . "x+" . $values[2]);

    $x = $b->solve($values[0], $values[1], $values[2]);

    $str = implode(", ", $x);
    MyLog::Log("Корни уравнения: " . $str);
}
catch (Exception $e)
{
    MyLog::Log($e->getMessage());
}
MyLog::write();

?>
