@extends('layouts.app')

@section('content')
    <section class="hero">
        <h1>Welcome to the Maria Angela M. Catangay POS Application</h1>
        <p>This Laravel application demonstrates routes, controllers, Blade views, and static PHP arrays.</p>
        <a class="button" href="{{ route('customers.index') }}">View Customer Accounts</a>
    </section>
@endsection
