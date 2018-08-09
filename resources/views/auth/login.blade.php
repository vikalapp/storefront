@extends('layouts.app')

@section('content')
      
<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui image header">
      <div class="content">
      Log-in to your account
      </div>
    </h2>
    <form action="{{ route('login') }}" method="POST" class="ui large form">
    @csrf
      <div class="ui stacked secondary  segment">
        <div class="field">
            <div class="ui left icon input">
                <i class="user icon"></i>
                <input type="text" name="email" placeholder="E-mail address">
            </div>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>

           @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="field">
        <div class="ui checkbox">
            <input type="checkbox" name="remember me">
                <label>Remember Me</label>
        </div>
        </div>
        <div class="ui fluid large teal submit button">Login</div>
        <i class=""></i>
        <div class="content">
            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
        </div>
        <div class="ui error message"></div>

      </div>


    </form>

  </div>
</div>

</form>
<style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
@endsection
