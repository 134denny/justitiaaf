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
    <div class="quiz-container">
      <div id="quiz"></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <button id="previous">Vorige vraag</button>
    <button id="next">Volgende vraag</button>
    <a href="/resultaat">
    <button id="submit">Verstuur Quiz</button>
    </a>
    <div id="results"></div>
    <script src="{{asset('build/js/quiz.js') }}"></script>
    <footer class="footer">
      <p>Justitia</p>
    </footer>
</body>
</html>