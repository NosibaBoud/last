@extends('index')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@section('content')  
<head> 
<link href="/css/main.css" rel="stylesheet">
  </head>
  <main>
  <div class="mx-auto max-w-10xl px-7 py-8 sm:px-6 lg:px-8">
  <div class="container">
  <div class="row align-items-start">
    <div class="col">
      <body>
      <div class="card" style="background-color:snow;">
  <div class="card-body" style="text-align: center;">
    <h5 class="card-title" style="font-weight: bolder;">{{$test->name}}</h5>
  </div>
  <ul  class="list-group list-group-flush">
    <li class="list-group-item" style="background-color:snow;"> details: {{$test->details}}</li>
    <li  class="list-group-item" style="background-color: snow;">price: {{$test->price}}</li>
    <li class="list-group-item"style="background-color: snow;">instructions: {{$test->instructions}}</li>
    <li class="list-group-item" style="background-color: snow;">expected time for test: {{$test->expected_time_for_test}}</li>
    <li class="list-group-item" style="background-color:snow;">status: {{$test->status}}</li>
  </ul>
  <form method="POST" action="{{route('mytests.addMytest',$test->id)}}">
    @csrf
    <div class="card-body" style="text-align: right;">
    <div class="btn btn-primary">
      <button  type="submit">ADD</button>
  </div>
</div>
</form>
  </div>
</dive>
      </div>
</main>
  </div>
</div>

@endsection

</body>
</html>
