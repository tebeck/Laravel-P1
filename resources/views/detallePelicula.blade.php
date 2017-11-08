@extends("layouts.masterPage")

@section("title")
  {{$peliFinal}}
@endsection

@section("principal")
  <div class="card" style="width: 20rem; margin-top: 30px; margin-left: 50px;">
    <img class="card-img-top" src="{{ $srcImg }}" alt="Card image cap">
    <div class="card-body">
        <h4 class="card-title">{{$peliFinal}}</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@endsection
