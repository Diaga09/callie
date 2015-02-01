

@extends('frontend.frontend')
    
    @section('head')

    {{ HTML::style('backend/css/bootstrap.min.css') }}
    {{ HTML::style('backend/font-awesome/css/font-awesome.css') }}
    {{ HTML::style('backend/css/animate.css') }}
    {{ HTML::style('backend/css/style.css') }}
    
    @stop

@section('content')
    <body class="gray-bg">

        <div class="middle-box text-center loginscreen  animated fadeInDown">
            <div>
                <div>

                    <h1 class="logo-name">{{ Config::get('global.logo') }}</h1>

                </div>
                <h3>Welcome to {{Config::get('global.web_name')}}</h3>
                
                <p>Login in. It's free.</p>
                {{ Form::open([ 'url'      => 'login',
                                'class'    => 'm-t',
                                'role'     => 'form',
                                'validate' => 'novalidate'
                                 ])}}
                    @if($errors->any() || Session::has('message'))
                                <div class="alert alert-warning" role="alert" style="text-align:left">

                                    @if(Session::has('message'))

                                        <p>{{ Session::get('message') }}</p>

                                    @endif
                                    
                                        @foreach($errors->all() as $error)

                                            <p>{{ $error }}</p>

                                        @endforeach
                                    
                                </div>
                    @endif

                
                    <div class="form-group">
                        {{ Form::input('email','email_address', null, ['class'       => 'form-control',
                                                                       'placeholder' => 'Email Address',
                                                                       'validate'    => 'novalidate'])}}
                        
                    </div>
                    <div class="form-group">

                        {{ Form::input('password','password', null, ['class'       => 'form-control',
                                                                     'placeholder' => 'Password',
                                                                     ])}}
                                        
                    </div>


                    {{ Form::button('Login', ['type'  => 'submit',
                                              'class' => 'btn btn-primary block full-width m-b'])}}

                   

                    <a href="#"><small>Forgot password?</small></a>
                    <p class="text-muted text-center"><small>Do not have an account?</small></p>
                    {{ HTML::link('register', 'Create an account', ['class' => 'btn btn-sm btn-white btn-block'])}}
                   
                </form>
                
            </div>
        </div>
@stop


