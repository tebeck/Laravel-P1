@extends("layouts.masterPage")

@section("title")
  Agregar película
@endsection

@section("principal")
<div class="container col-6 ">
    <h1>
      Agregar actor
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


    <form class="" action="/addActor" method="post">
      <!-- IMPORTANTE - SEGURIDAD LARAVEL !-->
      {{ csrf_field() }}
      <!-- End importante !-->
      <div class="form-group">
        <label for="">Titulo</label>
        <input type="text" name="nombre" value="{{old("nombre")}}" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Apellido</label>
        <input type="text" name="duracion" value="{{old("apellido")}}" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Rating</label>
        <input type="text" name="premios" value="{{old("rating")}}" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Rating</label>
        <input type="text" name="rating" value="{{old("rating")}}" class="form-control">
      </div>
      <div class="">
        <input type="submit" class="btn btn-primary" name="" value="Agregar película">
      </div>
    </form>

</div>
@endsection
