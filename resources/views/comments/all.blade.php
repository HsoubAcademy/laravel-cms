@foreach($post->comments as $comment)
<div class="row bg-white mt-3" >
    <div class="col-lg-1 p-3">
        <img class="avatar" src="{{ asset('/storage/avatars/avatar.png') }}" alt="">
    </div>

    <div class="col-lg-11 p-3">
            {{$comment->body}}
    </div>
</div>
@endforeach
