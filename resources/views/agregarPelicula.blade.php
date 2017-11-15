@extends("layouts.masterPage")

@section("title")
  Agregar película
@endsection

@section("principal")
<div class="container col-6 ">
    <h1>
      Agregar película
    </h1>
    @if (count($errors) > 0)
      		<div class="alert alert-danger">
          		<ul>
  	            @foreach ($errors->all() as $error)
  	                <li>{{ $error }}</li>
  	            @endforeach
      		   </ul>
  	    </div>
  	@endif


    <form class="" action="/agregarPelicula" method="post">
      <!-- IMPORTANTE - SEGURIDAD LARAVEL !-->
      {{ csrf_field() }}
      <!-- End importante !-->
      <div class="form-group">
        <label for="">Titulo</label>
        <input type="text" name="titulo" value="{{old("titulo")}}" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Duración</label>
        <input type="text" name="duracion" value="{{old("duracion")}}" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Premios</label>
        <input type="text" name="premios" value="{{old("premios")}}" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Rating</label>
        <input type="text" name="rating" value="{{old("rating")}}" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Fecha de estreno</label>
        <input type="date" name="fecha_de_estreno" value="{{old("fecha_de_estreno")}}" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Género</label>
        <select class="form-control" name="genero">
          @foreach ($generos as $genero)
            @if ($genero->id == old("genero"))
              <option value="{{$genero->id}}" selected>
                {{$genero->name}}
              </option>
            @else
              <option value="{{$genero->id}}">
                {{$genero->name}}
              </option>
            @endif
          @endforeach
        </select>
      </div>
      <div class="">
        <input type="submit" class="btn btn-primary" name="" value="Agregar película">
      </div>
    </form>

</div>
@endsection
