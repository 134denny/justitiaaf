@include('adminheader')

    <button type="button" id="photobutton" class="btn btn-primary">Foto toevoegen</button>

    @foreach ($images as $image)
    <div class="card" style="width: 18rem;">
        <img src="/storage/app/{{ $image->path }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $image->id }}</h5>
          <button class="btn btn-danger">Verwijderen</button>
        </div>
      </div>
    @endforeach


      <div class="modal fade" id="photoForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Foto toevoegen</h5>
              <button type="button" class="close"  aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{url('/adminphotos')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="path" class="form-label">Foto</label>
                    <input class="form-control" type="file" name="path">
                  </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Foto toevoegen</button>
            </div>
        </form>
          </div>
        </div>
      </div>


    </div>
</div>
<div>

</body>
<script>
$("#photobutton").on( "click", function() {
    $('#photoForm').modal('show');
} );
</script>
</html>
