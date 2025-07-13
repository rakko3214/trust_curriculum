@extends('layouts.app')

@section('content')
        @foreach ($shops as $shop)  
            <a href="{{ route('shops.show', $shop->id) }}">{{ $shop->name }}</a>
        @endforeach
@endsection