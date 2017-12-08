@extends('app')
@section('title')
    @if($post)
        {{ $post->title }}
    @else
        Страница не существует
        {{ Lang::get('en.noarticle') }}
    @endif
@endsection
@section('content')
    @include('message')
    @if($post)
        <div>
            <p>{{ $post->created_at->format('d.m.Y \a\t H:i') }}</p>
            <p>{!! $post->content !!}</p>
        </div>
        <div>
            <h2>{{ Lang::get('en.commentsT') }}</h2>
            <p>{{ count($post->comments) ? count($post->comments) : 'No' }} {{ Lang::choice('en.comments',count($post->comments)) }}</p>
            @if (!$post->comments->isEmpty())
                @foreach($post->comments as $comment)
                    <div class="list-group-item">
                        <p>E-mail : {{ $comment->email }}</p>
                        <p>Comment : {{ $comment->body }}</p>
                        <p>Date : {{ $comment->created_at->format('d.m.Y \a\t H:i') }}</p>
                    </div>
                @endforeach
            @endif
        </div>
    @endif
    <div class=""></div>
    <div class="form">
        <h4>{{ Lang::get('en.commentsP') }}</h4>
        <form class="form-horizontal" id="commentform" role="form" action="{{ route('post.create') }}" method="post">
            <div class="form-group ">
                {{ csrf_field() }}
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <input type="hidden" name="slug" value="{{ $post->slug }}">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{ Request::old('email')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Comment</label>
                    <div class="col-sm-4">
                        <textarea rows="5" placeholder="Post a comment" name = "body" id="body" class="form-control">{{ Request::old('body')}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success" id="submit">Send</button>
                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                    </div>
                </div>
            </div>
        </form>

    </div><!-- form  -->
@endsection




