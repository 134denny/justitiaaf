<x-app-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

<br>
<button type="button" id="modalbutton" class="btn btn-primary mb-4">Vraag toevoegen</button>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">De vraag</th>
        <th scope="col">Antwoord a</th>
        <th scope="col">Antwoord b</th>
        <th scope="col">Antwoord c</th>
        <th scope="col">correcte antwoord</th>
        <th scope="col">Hint</th>
        <th scope="col">Opties</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($questions as $question)
        <tr>
            <th scope="row">{{ $question->id }}</th>
            <td>{{ $question->question }}</td>
            <td>{{ $question->answer1 }}</td>
            <td>{{ $question->answer2 }}</td>
            <td>{{ $question->answer3 }}</td>
            <td>{{ $question->correct_answer }}</td>
            <td>{{ $question->hint }}</td>
            <td>
                <form action="{{url('/adminquiz/deleteQuestion')}}" method="post">
                    @csrf
                <input type="text" class="form-control" value="{{ $question->id }}" name="question_id" hidden>
                <button type="submit" onclick="console.log({{ $question->id }})" class="btn btn-danger">Verwijderen</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



<div class="modal fade" id="questionForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Vraag toevoegen</h5>
          <button type="button" class="close"  aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{url('/adminquiz')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">De vraag</label>
                <input type="text" class="form-control" name="questionInput" placeholder="...">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Antwoord A</label>
                <input type="text" class="form-control" name="answer1Input" id="answer1Input" placeholder="...">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Antwoord B</label>
                <input type="text" class="form-control" name="answer2Input" placeholder="...">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Antwoord C</label>
                <input type="text" class="form-control" name="answer3Input" placeholder="...">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Correcte antwoord</label>
                <input type="text" class="form-control" name="correctAnswerInput" placeholder="...">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Hint</label>
                <input type="text" class="form-control" name="hintInput" placeholder="...">
              </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" >Sluiten</button>
          <button type="submit" class="btn btn-primary">Vraag toevoegen</button>
        </div>
    </form>
      </div>
    </div>
  </div>

</div>
</div>
</div>

</body>

</html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>

    $("#modalbutton").on( "click", function() {
        $('#questionForm').modal('show');
    } );

    $("#answerModal").on( "click", function() {
        $('#answerForm').modal('show');
    } );
    </script>
@include('adminheader')


