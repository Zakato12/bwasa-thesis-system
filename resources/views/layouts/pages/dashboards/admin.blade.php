@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <h2>Dashboard</h2>
    <p>Welcome to the system.</p>
    
    <h2>{{ session('usr_id') }}</h2>
    <h2>{{ session('usr_name') }}</h2>
    <h2>{{ session('usr_role') }}</h2>
    <h2>{{ session('usr_pass') }}</h2>

@endsection
