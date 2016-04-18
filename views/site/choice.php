<?php include ROOT . '/views/layouts/header.php'; ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/template/js/jQuizler.js"></script>

<link rel="stylesheet" href="/template/css/bootstrap.min.css" />
<link rel="stylesheet" href="/template/css/jQuizler.css" />


<script type="text/javascript">
var questions = [
    {
        type: "choose",
        question: "<h3>Вопрос 1</h3>",
        answers: [
            "Ответ 1",
            "Ответ 2",
            "Ответ 3"
        ],
        correct: [1]
    },
    {
        type: "choose",
        question: "<h3>Вопрос 2</h3>",
        answers: [
            "Ответ 1",
            "Ответ 2",
            "Ответ 3"
        ],
        correct: [2]
    },
    {
        type: "choose",
        question: "<h3>Вопрос 3</h3>",
        answers: [
            "Ответ 1",
            "Ответ 2",
            "Ответ 3"
        ],
        correct: [3]
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