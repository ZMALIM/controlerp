@extends('layouts.app')
@section('titulo','Inicia Sesion')

@section('content')
  <div class="m-login__signin">
    <div class="m-login__head">
      <h3 class="m-login__title">Inicia Sesion</h3>
    </div>
    {{-- @if (session()->has('flash'))
        <div class="alert alert-info">
            {{session('flash')}}
        </div>
    @endif --}}
    <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
      @csrf
      <div class="form-group m-form__group">
        <input class="form-control m-input" type="text" placeholder="Usuario" name="usuario" autocomplete="off" value="{{ old('usuario') }}" autofocus>
      </div>

      @if ($errors->has('usuario'))
          <span class="m--font-info" role="alert">
              {{ $errors->first('usuario') }}
          </span>
      @endif

      <div class="form-group m-form__group">
        <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Contraseña" name="password">
      </div>

      @if ($errors->has('password'))
          <span class="m--font-info" role="alert">
              {{ $errors->first('password') }}
          </span>
      @endif

      <div class="row m-login__form-sub">
        <div class="col m--align-left m-login__form-left">
          <label class="m-checkbox  m-checkbox--light">
            <input type="checkbox" name="recordar" {{ old('remember') ? 'checked' : '' }}> Recuerdame
            <span></span>
          </label>
        </div>
        @if (Route::has('password.request'))
        <div class="col m--align-right m-login__form-right">
          <a href="{{ route('password.request') }}" class="m-link">¿Olvidaste tu contraseña?</a>
        </div>
        @endif
      </div>
      <div class="m-login__form-action">
        <button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">Iniciar Sesion</button>
      </div>
    </form>
  </div>

  <div class="m-login__account">
    <span class="m-login__account-msg">
      Don't have an account yet ?
    </span>&nbsp;&nbsp;
    <a href="javascript:;" class="m-link m-link--light m-login__account-link">Sign Up</a>
  </div>
@endsection
