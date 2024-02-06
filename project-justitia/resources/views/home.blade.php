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
        <h1>Justitia</h1>
        <h2></h2>
      </div>
      <nav class="more">
      </nav>
    </header>
<body>
<p>Deze multiplayer quizgame heeft 2 rollen. Per groep is er één rechter,
<br>  
dit is de leider. De rest van de spelers zijn matrozen.</p>
      <div style="display: flex; flex-direction: column;">
    <a href="{{ route('matroosNav') }}">            
        <button>Matroos</button>
    </a>
    <a href="{{ route('rechterNav') }}">            
        <button>Rechter</button>
    </a>
</div>
    <script src="{{asset('build/js/quiz.js') }}"></script>
    <footer class="footer">
      <a href="{{ route('creditsNav') }}" class="credits-link">Justitia-credits         
      </a>
    </footer>
</body>
</html>