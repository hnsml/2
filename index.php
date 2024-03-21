<?php
$var1 = 10;
$var2 = 5;

if ($var1 % $var2 == 0) {
    echo "$var1 є кратним $var2<br>";
    echo "Квадрат більшого з чисел: " . ($var1 > $var2 ? $var1 * $var1 : $var2 * $var2) . "<br>";
}

$num1 = 10;
$num2 = 7;


$max = max($num1, $num2);
$square = $max * $max;
"Квадрат більшого з чисел: $square<br>";

$month = 2;
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, date('Y'));
echo "Кількість днів у місяці: $daysInMonth<br>";

$year = 2024;
$isLeapYear = date('L', mktime(0, 0, 0, 1, 1, $year));
if ($isLeapYear) {
    echo "$year - високосний рік<br>";
} else {
    echo "$year - не є високосним роком<br>";
}

$num1 = 9;
$num2 = 3;


if ($num1 % 3 == 0 && $num2 % 3 == 0) {
    $sum = $num1 + $num2;
    echo "Сума чисел $num1 і $num2 дорівнює: $sum<br>";
} elseif ($num2 != 0) {
    $division = $num1 / $num2;
    echo "Результат ділення $num1 на $num2 дорівнює: $division";
} else {
    echo "Некоректний ввід: друге число дорівнює нулю<br>";
}

session_start();

if(isset($_SESSION['session_id'])) {
    if($_SESSION['session_id'] == 0) {
        echo "<h2>Реєстраційна форма (логін та пароль)</h2>";
        echo "<form method='post'>";
        echo "<input type='text' name='username' placeholder='Логін'><br>";
        echo "<input type='password' name='password' placeholder='Пароль'><br>";
        echo "<button type='button'>Увійти</button>";
        echo "</form>";
    }
    elseif($_SESSION['session_id'] == 1) {
        echo "<h2>Ви зареєстровані, увійдіть</h2>";
    }
} else {
    echo "<h2>Реєстраційна форма (логін та пароль)</h2>";
    echo "<form method='post'>";
    echo "<input type='text' name='username' placeholder='Логін'><br>";
    echo "<input type='password' name='password' placeholder='Пароль'><br>";
    echo "<button type='button'>Увійти</button>";
    echo "</form>";
}

function drawSquare (int $xcoord, int $ycoord, string $color)
{
    echo "<p>X: {$xcoord}</p>
          <p>Y: {$ycoord}</p>
          <p>Колір: {$color}</p>";
    if($xcoord<=800 && $ycoord<=800)
    {
        echo "<div style='
    position: absolute;
    width: 50px;
    height: 50px;
    background-color: {$color};
    left: {$xcoord}px;
    top: {$ycoord}px;'></div>";
    }
    else
    {
        echo "Виходить за межі екрану";
    }
}
drawSquare(800,800,"black");
?>
