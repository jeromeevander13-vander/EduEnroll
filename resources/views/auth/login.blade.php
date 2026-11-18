@extends('layouts.app')

@section('title', 'Student Sign In')

@section('content')
<div class="mx-auto max-w-md rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
    <div class="mb-7">
        <p class="text-xs font-bold uppercase tracking-widest text-ncc-maroon">EduEnroll</p>
        <h1 class="mt-2 text-2xl font-extrabold text-slate-900">Sign in to your account</h1>
        <p class="mt-2 text-sm text-slate-500">Students and administrators can sign in here.</p>
    </div>

    @if (session('status'))
        <p role="status" class="mb-5 rounded-xl border border-emerald-200 bg-emerald-50 p-3 text-sm text-emerald-800">{{ session('status') }}</p>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-5" data-single-submit data-clear-on-load autocomplete="off">
        @csrf
        <div>
            <label for="email" class="mb-1.5 block text-sm font-semibold text-slate-700">Email address</label>
            <input id="email" name="email" type="email" autocomplete="off" required autofocus
                   class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm focus:border-ncc-maroon focus:outline-none focus:ring-2 focus:ring-ncc-maroon/20">
            @error('email') <p class="mt-1.5 text-sm text-red-700">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="password" class="mb-1.5 block text-sm font-semibold text-slate-700">Password</label>
            <input id="password" name="password" type="password" autocomplete="off" required
                   class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm focus:border-ncc-maroon focus:outline-none focus:ring-2 focus:ring-ncc-maroon/20">
            @error('password') <p class="mt-1.5 text-sm text-red-700">{{ $message }}</p> @enderror
        </div>

        <label class="flex items-center gap-2 text-sm text-slate-600">
            <input type="checkbox" name="remember" value="1" class="rounded border-slate-300 text-ncc-maroon focus:ring-ncc-maroon">
            Remember me
        </label>

        <button type="submit" class="w-full rounded-xl bg-ncc-maroon px-4 py-3 font-bold text-white transition hover:bg-ncc-maroonHover focus:outline-none focus:ring-2 focus:ring-ncc-gold focus:ring-offset-2">
            Sign In
        </button>
    </form>

    <p class="mt-6 text-center text-sm text-slate-600">
        New to the portal?
        <a href="{{ route('register') }}" class="font-bold text-ncc-maroon hover:underline">Create an account</a>
    </p>
</div>
@endsection
