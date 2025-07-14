@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10">
    <h2 class="text-xl font-bold mb-4">ショップ作成</h2>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('shops.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="block font-semibold">ショップ名</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label for="description" class="block font-semibold">説明</label>
            <textarea name="description" id="description" rows="4" class="w-full border rounded px-3 py-2">{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-700">
            作成
        </button>
    </form>
</div>
@endsection
