
@extends("layouts.masterPage")

@section("title")
  Listado de películas
@endsection

@section("principal")
<div class="jumbotron">
<h1 class="display-3">Mis Peliculas</h1>
<hr class="my-4">

<ul>
  @if (count($peliculas) > 0)
    @foreach ($peliculas as $pelicula)
      <li>
        <a href="/pelicula/{{$pelicula->id}}">
          {{$pelicula->title}}
        </a>
      </li>
    @endforeach
  @else
    <p>No hay películas</p>
  @endif
</ul>

</div>

@endsection
