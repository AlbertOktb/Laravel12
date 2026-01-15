@extends('layouts.dashboardlayout')

@section('title', 'OktPhoto')

@section('content')

<div>
    <div class="mb-4">
        <a href="{{ route('admin.posts.index') }}" class="text-sm inline-block px-3 py-2 bg-indigo-700 border border-indigo-800 text-white">Назад</a>
    </div>
    <div>
        <form action="{{route('admin.posts.store')}}" method="Post" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <input type="text" name="title" class="border-gray-200 p-2 text-sm w-1/2" placeholder="Заголовок">
            </div>
            <div class="mb-4">
                <textarea type="text" name="content" class="border-gray-200 p-2 text-sm w-1/2" placeholder="Контент"></textarea>
            </div>

            <div class="mb-4">
                <input type="file" name="image" class="bg-white border border-gray-200 p-2 text-sm w-1/2">
            </div>

            <div class="mb-4">
                <input type="submit" value="Добавить" class="text-sm inline-block px-3 py-2 bg-emerald-700 border border-indigo-800 text-white">
            </div>
        </form>
    </div>
</div>
@endsection
