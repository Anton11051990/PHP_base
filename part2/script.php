<?php 
$userName = readline("Как ваше имя");
$counteUser = (int)readline("Сколько заданий планируете выполнить на сегодня ?");
$taskSumTime = 0;
$task = "";

for ($i=0; $i < $counteUser ; $i++) { 
    $task .= readline("Какую задачу планируете сегодня?");
    $taskTime = (int)readline("Сколько времени потребуется на выполнение?");
    $task .= " " . "(" . $taskTime . "ч)";
    $task .= "\n";
    $taskSumTime += $taskTime;
    
}
echo "$userName, сегодня у вас запланировано $counteUser приоритетных задачи на день:\n" .
    $task .
    "Время выполнения плана = $taskSumTime ч ";
