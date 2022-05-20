@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    @if (count($app) > 0)
        @foreach ($app as $ap)
            <div>
                <h3>
                    <a href="{{ route('app.show', ['app' => $ap['customerID']])}}">{{$ap['customerID']}}</a>
                </h3>
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

        @endforeach 
    @else
        <h2>There are no users to display</h2>
    @endif
    <div>
        User Input: {{$userInput}}
    </div>
</div>

@endsection