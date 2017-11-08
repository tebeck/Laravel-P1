@extends("layouts.masterPage")

@section("title")
  Listado generos
@endsection

@section("principal")
<div class="jumbotron">
<h1 class="display-3">Mis Peliculas</h1>
<hr class="my-4">

  <ul>
    @if (count($getGenres) > 0)
      @foreach ($getGenres as $genre)
        <li>
          <a href="/peliculas/{{ $genre->name }}">
            {{$genre->name}}
          </a>
        </li>
      @endforeach
    @else
      <p>No hay películas</p>
    @endif
  </ul>

</div>

@endsection
