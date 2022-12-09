<?php 
$user = readline("Как ваше имя?");
echo "$user какая задача стоит перед вами сегодня?. Добавьте 3 задачи.";
$task1 = readline("Задача 1:");
$taskTime1 = (int)readline("Сколько примерно времени эта задача займет?");
$task2 = readline("Задача 2:");
$taskTime2 = (int)readline("Сколько примерно времени эта задача займет?");
$task3 = readline("Задача 3:");
$taskTime3 = (int)readline("Сколько примерно времени эта задача займет?");
$sumTime = $taskTime1 + $taskTime2 + $taskTime3;
echo "{$user}, сегодня у вас запланировано 3 приоритетных задачи на день:
    - $task1 ({$taskTime1} ч)
    - $task2 ({$taskTime2} ч)
    - $task3 ({$taskTime3} ч)
    Время выполнения плана = $sumTime ч";