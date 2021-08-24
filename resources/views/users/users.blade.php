@if (count($users) > 0)
    <ul class="list-unstyled">
        @foreach ($users as $user)
            <li class="media">
                <img class="mr-2 rounded" src="https://nyaroblog.com/wp-content/uploads/2021/04/img_3790-811x1024.jpg" style="width:120px"alt="">
                <div class="media-body">
                    <div>
                        {{ $user->name }}
                    </div>
                    <div>
                        <p><a href="{{route('users.show',$user->id) }}">view profile</a></p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{ $users->links('pagination::bootstrap-4') }}
@endif