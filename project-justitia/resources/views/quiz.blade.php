<script>
//Pakt de variabele myQuestions van php en zet het om tot een Javascript variabele. 
//Zo kan de quiz.js de quiz laden met de nodige data
var myQuestions = <?php echo json_encode($myQuestions); ?>;
</script>

<!DOCTYPE html>
<html>
<link href="{{asset('build/css/quiz.css') }}" rel="stylesheet">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="{{asset('build/css/quiz.css') }}" rel="stylesheet">
    </head>
    <header>
      <div class="curve">
        <h1>Quiz</h1>
        <h2></h2>
      </div>
      <nav class="more">
      </nav>
    </header>
    <body>
    <h1>Hindeloopen Justitia Quiz</h1>
    <div class="quiz-container">
      <div id="quiz"></div>
    </div>
    <button id="previous">Previous Question</button>
    <button id="next">Next Question</button>
    <button id="submit">Submit Quiz</button>
    <div id="results"></div>
    
<!-- Updated modal HTML -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <p id="modalResults"></p>
  </div>
</div>

<!-- Add overlay element -->
<div id="overlay" class="overlay"></div>

    <script src="{{asset('build/js/quiz.js') }}"></script>
</body>
</html>

