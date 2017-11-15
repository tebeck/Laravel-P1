@extends("layouts.masterPage")

@section("title")
  Listado Mejores Actores
@endsection

@section("principal")
<div class="jumbotron">
<h1 class="display-3">Mis Actores</h1>
<hr class="my-4">

  <ul>
    @if (count($getActors) > 0)
      @foreach ($getActors as $actor)
        <li>
          <a href="/actores/{{ $actor->id }}">
            {{ $actor->first_name }} {{ $actor->last_name }}
          </a>
        </li>
      @endforeach
    @else
      <p>No hay películas</p>
    @endif
  </ul>

</div>

@endsection
