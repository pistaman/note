@extends('layouts.app')

@section('content')

<div class="main__container">
  <div class="col-md-8">
      <div class="card">
          <div class="card-body">
              @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif
          </div>
      </div>
  </div>
</div>
@endsection
