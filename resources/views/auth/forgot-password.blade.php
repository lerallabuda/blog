
@extends('partials.layout')

@section('content')
<div class="max-w-md mx-auto">
    <h1 class="text-2xl font-bold mb-4">
        @lang('Forgot Password')
    </h1>

    <p class="text-base-content/70 mb-4">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </p>

    @if (session('status'))
        <div role="alert" class="alert alert-success mb-4">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <fieldset class="fieldset">
            <legend class="fieldset-legend">Email</legend>

            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="input w-full @error('email') input-error @enderror"
                required
                autofocus
                autocomplete="username"
            >

            @error('email')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary w-full">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
</div>
@endsection