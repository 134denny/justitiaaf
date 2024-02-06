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
        <h1>Matroos</h1>
        <h2></h2>
      </div>
      <nav class="more">
      </nav>
    </header>
<body>
<p>Jij bent een matroos jouw taak is om je onschuld te bewijzen. 
<br>  
Na het beantwoorden van de vragen kom je erachter of je schuldig bent of niet. 
<br>
Maar geef niet teveel goede antwoorden anders word jij misschien als schuldige bestempelt.
</p>
      <br>
      <br>
    <a href="{{ route('quiz.index') }}">            
    <button>Quiz</button>
    </a>
    <script src="{{asset('build/js/quiz.js') }}"></script>
</body>
</html>