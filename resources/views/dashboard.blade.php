@extends('base')

@section('content')
<div class="flex flex-col items-center justify-center h-screen">
    <div class="mb-4 text-xl font-bold">Dashboard</div>
    <div class="mb-4">Hello, {{ auth()->user()->name }}</div>
    <form action="{{ url('/logout') }}" method="POST">
        {{ csrf_field() }}
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Logout
        </button>
    </form>
</div>
@endsection
