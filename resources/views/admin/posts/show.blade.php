@extends('layouts.dashboardlayout')

@section('title', 'OktPhoto')

@section('content')


<div >
    <div class="mb-4">
        <a href="{{ route('admin.posts.index') }}" class="text-sm inline-block px-3 py-2 bg-indigo-700 border border-indigo-800 text-white">Назад</a>
    </div>
    <div>
        <div>
            <div>
                <h3>{{$post['title']}}</h3>
            </div>
            <div class="w-1/2">
                <img src="{{$post['image_url']}}" alt="{{$post['title']}}">
            </div>
            <div>
                <p>{{$post['content']}}</p>
            </div>
            <div>
                <p>{{$post['created_at']}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
