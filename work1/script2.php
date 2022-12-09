<?php 
$taskQuestion = "Kакая задача стоит перед вами сегодня?.";
$taimeQuestion = "Сколько примерно времени эта задача займет?";

$user = readline("Как ваше имя?");
echo "$user {$taskQuestion}. Добавьте 3 задачи. ";
$task1 = readline($taskQuestion);
$taskTime1 = (int)readline($taimeQuestion);
$task2 = readline($taskQuestion);
$taskTime2 = (int)readline($taimeQuestion);
$task3 = readline($taimeQuestion);
$taskTime3 = (int)readline($taimeQuestion);

$sumTime = $taskTime1 + $taskTime2 + $taskTime3;

echo "{$user}, сегодня у вас запланировано 3 приоритетных задачи на день:
    - $task1 ({$taskTime1} ч)
    - $task2 ({$taskTime2} ч)
    - $task3 ({$taskTime3} ч)
    Время выполнения плана = $sumTime ч";