@extends('layouts.app')

@section('content')
<div class="register_container">
    <div class="card">
        <h2 class="card-header">{{ __('新規登録') }}</h2>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="名前" required autofocus>

                        @if ($errors->has('name'))
                            <p class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="メールアドレス" required>

                        @if ($errors->has('email'))
                            <p class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ old('','パスワード')}}" required>

                        @if ($errors->has('password'))
                            <p class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ old('','パスワード（確認）') }}" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6">
                        <p><button type="submit" class="btn btn-primary">
                            {{ __('登録') }}
                        </button></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
