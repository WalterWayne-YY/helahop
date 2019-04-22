@extends('layouts.dash')

@section('content')


   
            @if (session('status'))
               <div class="alert alert-success" role="alert">
                   {{ session('status') }}
                </div>
            @endif
            <h1 class="h2">Dashboard</h1>

@endsection
