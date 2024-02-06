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
        <h1>Rechter</h1>
        <h2></h2>
      </div>
      <nav class="more">
      </nav>
    </header>
<body>
<p>Jij bent een rechter, jouw taak is om de matrozen te veroordelen. 
<br>  
Ook kan je als rechter hints geven voor de quiz. 
</p>
      <br>
      <br>
    <a href="{{ route('hintNav') }}">            
    <button>Hint</button>
    </a>
    <script src="{{asset('build/js/quiz.js') }}"></script>
</body>
</html>