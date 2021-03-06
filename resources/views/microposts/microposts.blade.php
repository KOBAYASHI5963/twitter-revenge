<ul class="list-unstyled">
    @foreach ($microposts as $micropost)
        <li class="media mb-3">
            <img class="mr-2 rounded" src="https://nyaroblog.com/wp-content/uploads/2021/04/img_3790-811x1024.jpg" style="width:120px"alt="">
            <div class="media-body">
                <div>
                    <a href="{{ route('users.show',$micropost->user->id) }}"><span class="text-muted">posted at {{ $micropost->created_at }}</span></a>
                </div>
                <div>
                    <p class="mb-0">{!! nl2br(e($micropost->content)) !!}</p>
                </div>
                <div>
                    @include('user_favorite.favorite_button', ['micropost' => $micropost])
                    
                    @if (Auth::id() == $micropost->user_id)
                        <form method="post" action="{{ route('microposts.destroy', $micropost->id)}}">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">削除</button>
                        </form>
                    @endif
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $microposts->links('pagination::bootstrap-4') }}