<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('build/css/quiz.css') }}" rel="stylesheet">
</head>
<body>
  <header>
    <div class="curve">
      <h1>Oordeel</h1>
    </div>
  </header>
  <p>Veroordeel nu de matrozen. 
<br>
De matrozen zijn schuldig wanneer:  
<br>
Ze tussen de 1-4 vragen of 8-10 vragen goed hebben.
<br>
Tussen de 5-7 vragen goed betekent onschuld.
<br>

</p>
  <br>
  <br>
  <a href="{{ route('fotoNav') }}">            
    <button>Straf afhandelen</button>
  </a>

  <script src="{{asset('build/js/quiz.js') }}"></script>
</body>
</html>