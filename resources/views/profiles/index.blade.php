@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5 text-center">
            <img style="width:130px;" src="https://instagram.fmnl3-1.fna.fbcdn.net/v/t51.2885-19/s320x320/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=instagram.fmnl3-1.fna.fbcdn.net&oh=2d3ebd17e4a3865b8d6da1519da4f5d0&oe=5E828627" class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{$user->username}}</h1>


            <a href="/p/create">Add New Post</a>            
            </div>

            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers </div>
                <div class="pr-5"><strong>212</strong> following</div>        
            </div>

        

            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A' }} </a></div>

        </div>
    </div>








    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">

                <a href="/p/{{ $post->id}}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            
            </div>
        @endforeach
    </div>









</div>
@endsection
