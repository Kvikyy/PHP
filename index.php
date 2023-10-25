<?php
    // Вывести на экран свой возраст и имя
    $name = "Igor";
    $age = 30;
    echo "$name, $age";
    // Объявить глобальную переменную равной значению вашего удовлетворения от прошедшего урока
    $globalVariable = 9;
    // Объявить константу равную кол-ву существующих типов данных в PHP на данный момент
    define("types", "8");
    // Объявить переменную myAge и myName. Вывести на экран фразу типа "Всем привет, меня зовут Александр и мне 23 года."
    $myAge = 30;
    $myName = "Igor";
    echo "Всем привет, меня зовут $myName и мне $myAge лет.";
    // Второй способ
    echo "Всем привет, меня зовут Igor и мне 30 лет.";
    // Создать по 1 переменной каждого пройденного на уроке типа (bool, int, float, array, null, string)
    bool $var = false;
    int $var = 1;
    float $var = 1.01;
    array $var = array("one", "two", "three");
    null $var = null;
    string $var = "my name is Igor";
?>