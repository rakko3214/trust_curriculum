@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10">
    <h2 class="text-xl mb-4">ショップ作成</h2>

    <form action="{{ route('shops.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">ショップ名</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required class="rounded">
        </div>

        <div>
            <label for="description" >説明</label>
            <textarea name="description" id="description" rows="4" class="w-full rounded">{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="underline">
            作成
        </button>
    </form>
</div>
@endsection