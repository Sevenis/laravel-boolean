@extends('layouts.app')

@section('titolo', 'Studenti')

@section('content')
    <div class="card-group">
        @foreach ($data as $key => $student)
          <div class="card">
            <div class="img-student">
                <img src="{{$student['img']}}" alt="{{$student['nome']}}">
                <a href="{{route('Student.slug', ['slug' => $key])}}"><h3 class="card-title">{{$student['nome']}} ({{$student['anni']}} anni)</h3></a>
            </div>
            <div class="card-body">
              <h4 class="card-text"> Assunt{{(($student['genere'] == 'f') ? 'a' : 'o')}} da: {{$student['azienda']}}</h4>
              <p class="card-text"> {{$student['descrizione']}}</p>
              <p class="age-text"><small class="text-muted"><a href="#"><i class="fab fa-linkedin"></i></a></small></p>
            </div>
          </div>
        @endforeach
    </div>
@endsection
