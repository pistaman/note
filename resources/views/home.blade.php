@extends('layouts.app')

@section('content')

<div class="main__container">
  <div class="col-md-8">
      @guest
        <div class="">
          
        </div>
      @endguest
  </div>
</div>
@endsection
