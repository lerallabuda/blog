
@extends('partials.layout')

@section('content')
<div class="max-w-md mx-auto">
    <h1 class="text-2xl font-bold mb-6">
        @lang('Reset Password')
    </h1>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <input
            type="hidden"
            name="token"
            value="{{ $request->route('token') }}"
        >

        <fieldset class="fieldset">
            <legend class="fieldset-legend">Email</legend>

            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email', $request->email) }}"
                class="input w-full @error('email') input-error @enderror"
                required
                autofocus
                autocomplete="username"
            >

            @error('email')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <fieldset class="fieldset mt-4">
            <legend class="fieldset-legend">Password</legend>

            <input
                id="password"
                type="password"
                name="password"
                class="input w-full @error('password') input-error @enderror"
                required
                autocomplete="new-password"
            >

            @error('password')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <fieldset class="fieldset mt-4">
            <legend class="fieldset-legend">Confirm Password</legend>

            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                class="input w-full @error('password_confirmation') input-error @enderror"
                required
                autocomplete="new-password"
            >

            @error('password_confirmation')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <div class="mt-6">
            <button type="submit" class="btn btn-primary w-full">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</div>
@endsection