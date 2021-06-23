@extends("layouts.mainlayout")

@section('content')
<div class="main-container">
  <h1 style="text-align: center; margin-bottom:20px">MOVIES</h1>

  <div class="movies-container">
    @foreach ($films as $movie)
      <div class="movie">
        <h4>Title: {{$movie['title']}}</h4>
        <h4>Original Title: {{$movie['original_title']}}</h4>
        <h5>Nationality: {{$movie['nationality']}}</h4>
        <h5>Vote: {{$movie['vote']}}</h4>
      </div>
  @endforeach
  </div>
  

</div>

@endsection