@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
          <div class="col-3 p-5">
              <img src="/logo/png/witch.png" class="rounded-circle" style="height: 250px; width: 250px">
          </div>

           <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                     <h1>{{$user->username}}</h1>  {{-- You can use {{Auth::user()->username}} too --}}
                     <p><a href="#">Add New Post</a></p>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>154</strong> Posts</div>
                    <div class="pr-5"><strong>23k</strong> Followers</div>
                    <div class="pr-5"><strong>212</strong> Following</div>
                </div>

                <div>
                    <div class="pt-4 font-weight-bold">{{$user->profile->url}}</div>
                    <div>{{$user->profile->description}}</div>
                      <div><a href="{{$user->profile->url}}" target="_blank">{{$user->profile->url}}</a></div>
                </div>
           </div>
      </div>

      <div class="row pt-4 pl-5 pr-5">
           <div class="col-4">
              <img src="/images/doggo.jpg" class="w-100">
           </div>
           <div class="col-4">
              <img src="/images/doggo.jpg" class="w-100">
           </div>
           <div class="col-4">
              <img src="/images/doggo.jpg" class="w-100">
           </div>
      </div>
</div>
@endsection
