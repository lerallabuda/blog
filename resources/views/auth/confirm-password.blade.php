
@extends('partials.layout')

@section('content')
<div class="max-w-md mx-auto">
    <h1 class="text-2xl font-bold mb-4">
        @lang('Confirm Password')
    </h1>

    <p class="text-base-content/70 mb-6">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <fieldset class="fieldset">
            <legend class="fieldset-legend">Password</legend>

            <input
                id="password"
                type="password"
                name="password"
                class="input w-full @error('password') input-error @enderror"
                required
                autofocus
                autocomplete="current-password"
            >

            @error('password')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <div class="mt-6">
            <button type="submit" class="btn btn-primary w-full">
                {{ __('Confirm') }}
            </button>
        </div>
    </form>
</div>
@endsection