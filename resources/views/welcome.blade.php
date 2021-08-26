@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ Auth::user()->name }}</h3>
                    </div>
                    <div class="card-body">
                        <img class="mr-2 rounded" src="https://nyaroblog.com/wp-content/uploads/2021/04/img_3790-811x1024.jpg" style="width:120px"alt="">
                    </div>
                </div>
            </aside>
            <div class="col-sm-8">

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
    @else
     <div class="center jumbotron">
        <div class="text-center">
            <h1>Let's Tweet！</h1>
            <a href="{{ route('signup.get')}}">sign up now!!</a>
        </div>
     </div>
    @endif
@endsection