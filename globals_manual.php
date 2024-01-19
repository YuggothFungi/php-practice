<!DOCTYPE html>
<html>

<head>
    <title>Обход массива GLOBALS вручную</title>
</head>

<body>
    <?php
    // Можно загрузить страницу с таким запросом GET http://localhost/work_folder/globals_manual.php?test=name
    // чтобы увидеть, как передающийся параметр отображается в переменной _GET.

        // Функция пишет на экране четыре пробела а затем ключ = значение, 
        // если значение типа массив, пишет ключ и слово Array:
        function iterArray($array){
            foreach ($array as $key => $value) {
                if (gettype($value) == "array"){
                    echo "$key = Array: <br>";
                    iterArray($value);
                } else {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;$key = $value <br>";
                }
            }
        }
        
        iterArray($GLOBALS);
    ?>
</body>

</html>