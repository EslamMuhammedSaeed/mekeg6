@extends('auth.master')

@section('content')
    <div class="login-container pt-0" style="top: 45%">
        {{-- <div class="row mt-0 pt-0">
             <img class="img-responsive pull-left flip logo animated fadeIn" src="{{ asset('images/mekeg_logo.png') }}" alt="Logo Icon">
        </div> --}}
        

        <p>{{ __('auth.Register') }}</p>

        <form action="{{ route('register') }}" method="POST">
            {{ csrf_field() }}

            {{-- <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus /> --}}
            <div class="form-group form-group-default" id="nameGroup">
                <label>{{__('auth.Name')}}</label>
                <div class="controls">
                    <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="{{__('auth.Name')}}" class="form-control" required autofocus>
                </div>
            </div>
            <div class="form-group form-group-default" id="emailGroup">
                <label>{{ __('auth.Email') }}</label>
                <div class="controls">
                    <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('auth.Email') }}" class="form-control" required>
                </div>
            </div>

            <div class="form-group form-group-default" id="passwordGroup">
                <label>{{ __('auth.Password') }}</label>
                <div class="controls">
                    <input type="password" name="password" placeholder="{{ __('auth.Password') }}" class="form-control" required>
                </div>
            </div>

            <div class="form-group form-group-default" id="confirmPasswordGroup">
                <label>{{ __('auth.Confirm Password') }}</label>
                <div class="controls">
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="{{ __('auth.Confirm Password') }}" class="form-control" required>
                </div>
            </div>


            <div class="flex items-center justify-end border-0 mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('auth.Already registered?') }}
                </a>

            </div>
            <button type="submit" class="btn btn-block login-button">
                <span class="signingin hidden"><span class="voyager-refresh"></span>  {{ __('auth.Register') }}...</span>
                <span class="signin">{{ __('auth.Register') }}</span>
            </button>
            

            
            

        </form>
        

        <div style="clear:both"></div>

        @if(!$errors->isEmpty())
            <div class="alert alert-red">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div> <!-- .login-container -->
@endsection

@section('post_js')

    <script>
        var btn = document.querySelector('button[type="submit"]');
        var form = document.forms[0];
        var username = document.querySelector('[name="name"]');
        var email = document.querySelector('[name="email"]');
        var password = document.querySelector('[name="password"]');
        var password_confirmation = document.querySelector('[name="password_confirmation"]');
        btn.addEventListener('click', function(ev){
            if (form.checkValidity()) {
                btn.querySelector('.signingin').className = 'signingin';
                btn.querySelector('.signin').className = 'signin hidden';
            } else {
                ev.preventDefault();
            }
        });
        username.focus();
        document.getElementById('nameGroup').classList.add("focused");

        // Focus events for email and password fields
        username.addEventListener('focusin', function(e){
            document.getElementById('nameGroup').classList.add("focused");
        });
        username.addEventListener('focusout', function(e){
            document.getElementById('nameGroup').classList.remove("focused");
        });
        email.addEventListener('focusin', function(e){
            document.getElementById('emailGroup').classList.add("focused");
        });
        email.addEventListener('focusout', function(e){
            document.getElementById('emailGroup').classList.remove("focused");
        });

        password.addEventListener('focusin', function(e){
            document.getElementById('passwordGroup').classList.add("focused");
        });
        password.addEventListener('focusout', function(e){
            document.getElementById('passwordGroup').classList.remove("focused");
        });
        password_confirmation.addEventListener('focusin', function(e){
            document.getElementById('confirmPasswordGroup').classList.add("focused");
        });
        password_confirmation.addEventListener('focusout', function(e){
            document.getElementById('confirmPasswordGroup').classList.remove("focused");
        });

    </script>
@endsection
{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
