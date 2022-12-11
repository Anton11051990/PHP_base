<?php 
$info = "Приветствуем вас на мини опроснике по истории.";
$userName = readline("Как ваше имя?");
$historyQuestion = "В каком году было крещение Руси?";
$answerHistory = "988";
$optionsAnswerHistory = "458, 988, 1001";
$content = "$userName ответьте на вопрос.\n $historyQuestion .\n Варианты ответа: $optionsAnswerHistory.";

echo "$info";
echo "$userName ответьте на вопрос.\n $historyQuestion .\n Варианты ответа: $optionsAnswerHistory. ";

    for ($counter=0; ; $counter++) { 
        $userAnswer = (int)readline("Ваш вариант ответа:");
        if ($userAnswer == $answerHistory) {
            echo "Отлично";
            break;
        } else {
            echo "Не верно \n";
        }

    }