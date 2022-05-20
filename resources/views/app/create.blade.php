@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

<form class="form bg-white p-6 border-1" method="POST" action="{{ route('app.store') }}">s
    @csrf 
    <div>
        <label class="text-sm" for="first-name">First Name</label>
        <input class="text-lg border-1" type="text" id="first-name" value="{{ old('first-name') }}" name="first-name">
        @error('first-name')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="last-name">Last Name</label>
        <input class="text-lg border-1" type="text" id="last-name" value="{{ old('last-name') }}" name="last-name">
        @error('last-name')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="customer-id">Customer ID</label>
        <input class="text-lg border-1" type="text" id="customer-id" value="{{ old('customer-id') }}" name="customer-id">
        @error('customer-id')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="points">Points</label>
        <input class="text-lg border-1" type="text" id="points" value="{{ old('points') }}" name="points">
        @error('points')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <button class=" border-1" type="submit">Submit</button>
    </div>
</form>
</div>
@endsection