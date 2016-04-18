<?php include ROOT . '/views/layouts/header.php'; ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/template/js/jQuizler.js"></script>

<link rel="stylesheet" href="/template/css/bootstrap.min.css" />
<link rel="stylesheet" href="/template/css/jQuizler.css" />


<script type="text/javascript">
var questions = [
    {
        type: "choose",
        question: "<h3>Рассчитываете ли вы потратить большуб сумму денег на покупку ноутбука?</h3>",
        answers: [
            "Да",
            "Нет",
        ],
        correct: [1]
    },
    {
        type: "choose",
        question: "<h3>Для каких целей вы приобретаете ноутбук?</h3>",
        answers: [
            "В основном для работы/учебы",
            "В основном собираюсь играть",
            "Для проигрывания аудио и видео, общения в сети"
        ],
        correct: [1]
    },
    {
        type: "choose",
        question: "<h3>Часто ли вы носите с собой ноутбук?</h3>",
        answers: [
            "Нет",
            "Да",
        ],
        correct: [1]
    },
    
    {
        type: "choose",
        question: "<h3>Собираетесь ли вы работать от батареи более 6 часов?</h3>",
        answers: [
            "Нет",
            "Да",
        ],
        correct: [1]
    },
    
      {
        type: "choose",
        question: "<h3>Вы будете смотреть фильмы с дисков?</h3>",
        answers: [
            "Нет",
            "Да",
        ],
        correct: [1]
    }
];

$("document").ready(function(){
    $("#jQuizler").jQuizler(questions);
});

</script>


<body>
    <div id="jQuizler" class="main-quiz-holder">
        <h3>Тест</h3>
        <button class="btn btn-large">Старт</button>
    </div>
    

</body>
</html>