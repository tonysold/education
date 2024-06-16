<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Тестовая страница для обучения</title>
</head>

<body>
    <h1>Тестовая страница 1</h1>
    <?php
    /*$var = 17;

    $message = ($var >= 18) ? 'Доступ разрешён' : 'Доступ запрещён';
    echo $message;

    if ('string') {
        echo 'Условие string выполнилось';
    }
    if (0) {
        echo 'Условие 0 выполнилось';
    }
    if (null) {
        echo 'Условие null выполнилось';
    }
    if (5) {
        echo 'Условие 5 выполнилось';
    }

    function power(int $x, int $n)
    {
        var_dump($x, $n);
        echo '<br>';
        // Если сейчас степень равна нулю, то возвращаем единицу
        if ($n === 0) {
            return 1;
        }

        // В остальных случаях - умножаем число на возведённое в степень n - 1 и возвращаем его
        return $x * power($x, $n - 1);
    }

    echo 'Результат: ' . power(2, 3);
    function getSumOfNumbersFromZero(int $n)
    {
        var_dump($n);
        echo '<br>';
        // Если сейчас 1, то просто возвращаем 1
        if ($n == 1) {
            return 1;
        }

        // В остальных случаях - прибавляем текущее число к сумме всех предыдущих
        return $n + getSumOfNumbersFromZero($n - 1);
    }

    echo 'Результат: ' . getSumOfNumbersFromZero(6);

    //функция возвращает минимальное значение
    function retMinFloat ($a, $b, $c) 
    {
        if ($a < $b && $a < $c) {
            return $a;
        }
        elseif ($b < $a && $b < $c) {
            return $b;
        }
        else return $c;
    }
    echo retMinFloat(7.8, 5.6, 6.7);

    //функция возвращает удвоение аргументов
    function retDouble(&$a, &$b)
    {
        $a *= 2;
        $b *= 2;
    }
    $x = 5;
    $y = 6;
    retDouble($x, $y);
    echo $x . '<br>' . $y;

    //факториал!
    function factorial ($x) 
    {
        if ($x === 0) {
            return 1;
        }

        return $x * factorial($x - 1);
    }

    echo factorial(4);*/

    function numbers(int $x) {
        if ($x === 0) {
            echo $x;
            return;
        }
        numbers($x - 1);
        echo ', ' . $x;
    }

    numbers(10);

    ?>
</body>

</html>