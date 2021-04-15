@extends('layouts.app')

@section('title', 'Домашняя страница')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <h3>Create your account</h3>

{{--                    @if ($errors->any())--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            <ul>--}}
{{--                                @foreach ($errors->all() as $error)--}}
{{--                                    <li>{{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                     @endif--}}

                <form method="POST" action="{{ route('auth.signup') }}" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : ''  }}"
                               id="email" placeholder="user@gmail.com"
                               value="{{ Request::old('email') ? : '' }}">

                        @if($errors->has('email'))
                            <span class="help-block text-danger">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" name="name"
                               class="form-control{{ $errors->has('username') ? ' is-invalid' : ''  }}"
                               id="name" placeholder="John Doe"
                               value="{{ Request::old('name') ? : '' }}">

                        @if($errors->has('name'))
                            <span class="help-block text-danger">
                                {{ $errors->first('username') }}
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : ''  }}"
                               id="password">

                        @if($errors->has('password'))
                            <span class="help-block text-danger">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Create account</button>
                </form>
            </div>
        </div>
    </div>
@endsection
