<?php
$people = array("Илья Игнатович" => "день открытых дверей");
            //"Петр Игнатьевич" => "форум радиолюбителей",
            //"Андрей Русланович" => "на бесплатные курсы монтажников",

$day = 12;
$name = "С уважением, Василий.";

foreach($people as $item => $item_count){
    echo "Уважаемый (ая), ".$item."!</br>",
        "Приглашаем Вас на ".$item_count."</br>",
        "Дата события: $day мая.<br/>",
        $name;
}
?>
