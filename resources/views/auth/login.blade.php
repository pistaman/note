@extends('layouts.app')

@section('content')
<div class="register_container">
    <div class="card">
        <div class="card-header">{{ __('ログイン') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email')}}" placeholder="メールアドレス" required autofocus>

                        @if ($errors->has('email'))
                            <p class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="パスワード" required>

                        @if ($errors->has('password'))
                            <p class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('次回から入力を省略') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <p><button type="submit" class="btn btn-primary">
                            {{ __('ログイン') }}
                        </button></p>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('パスワードを忘れた場合') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
