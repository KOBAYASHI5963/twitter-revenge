@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    <img class="rounded img-fluid" src="https://nyaroblog.com/wp-content/uploads/2021/04/img_3790-811x1024.jpg" style="width:120px" alt="">
                </div>
            </div>
        </aside>
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified mb-3">
                <li class="nav-item"><a href="{{ route('users.show', $user->id) }}" class="nav-link">TimeLine</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Followings</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Followers</a></li>
            </ul>
            @if (Auth::id() == $user->id)
                  <form class="mb-4" method="post" action="{{ route('microposts.store') }}">
                 @csrf
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">ツイートする</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='content'></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">投稿する</button>
                  </form>
            @endif

            @if (count($microposts) > 0)
                @include('microposts.microposts', ['microposts' => $microposts])
            @endif
        </div>
    </div>
@endsection