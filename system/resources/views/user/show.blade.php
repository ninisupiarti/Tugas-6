@extends('Template.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              Detail Data User
            </div>
            <div class="card-body">
                <h3>{{$User->nama}}</h3>
                <hr>
                <p>
                    {{"@".$User->user_name}} |
                    Email : {{$User->email}}
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
