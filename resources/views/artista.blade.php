<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<div class="row">

    ​<picture>
        <img src="{{$artista->images[0]->url}}" class="rounded" width="304" height="236">
    </picture>
</div>
<br>
<p>{{ $artista->name}}</p>
<a href="{{route('getAllLanzamientos')}}">Ir a la pagina de artistas</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Foto</th>
      <th scope="col">Album</th>
      <th scope="col">Cancion</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tracks as $track)
        <tr>
        <td> <img src="{{$track->album->images[0]->url}}" width="100" height="100" alt="myimage" /></td>
        <td>{{ $track->name}}</td>
        <td>{{ $track->album->name}}</td>
        </tr>
    @endforeach
  </tbody>
</table>