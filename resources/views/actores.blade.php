@extends("layouts.masterPage")

@section("title")
  Listado Mejores Actores
@endsection

@section("principal")
<div class="jumbotron">
<h1 class="display-3">Mis Actores</h1>
<hr class="my-4">

  <ul>
    @if (count($getMejores) > 0)
      @foreach ($getMejores as $actor)
        <li>
          <a href="/actores/{{ $actor->first_name }}">
            {{ $actor->first_name }}
          </a>
        </li>
      @endforeach
    @else
      <p>No hay películas</p>
    @endif
  </ul>

</div>

@endsection
