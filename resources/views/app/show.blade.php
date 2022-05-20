@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
<div>
    <ul>
        <li>
            First Name: {{$ap['firstName']}}
        </li>
        <li>
            Last Name: {{$ap['lastName']}}
        </li>
        <li>
            Customer ID: {{$ap['customerID']}}
        </li>
        <li>
            Points: {{$ap['points']}}
        </li>
    </ul>
</div>
</div>

@endsection