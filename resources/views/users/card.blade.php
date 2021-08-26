<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>
    <div class="card-body">
    <img class="rounded img-fluid" src="https://nyaroblog.com/wp-content/uploads/2021/04/img_3790-811x1024.jpg" style="width:120px" alt="">
</div>
@include('user_follow.follow_button', ['user' => $user])