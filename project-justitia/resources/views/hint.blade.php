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
      <h1>Hint</h1>
      <h2></h2>
    </div>
    <nav class="more">
    </nav>
  </header>
  <p>Hier staan de hints, als rechter mag je zelf bepalen hoeveel hints je geeft. 
<br>   
</p>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Vraag</th>
        <th scope="col">Hint</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($hints as $hint)
        <tr>
            <td>{{ $hint->question }}</td>
            <td>{{ $hint->hint }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

  <a href="{{ route('oordeelNav') }}">            
    <button>Oordeel</button>
  </a>

  <script src="{{asset('build/js/quiz.js') }}"></script>
</body>
</html>