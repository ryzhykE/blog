@extends('app')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container">
        <div class="row">
        @include('message')
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                @if ( !$posts->count() )
                    No posts!
                @else
                <!-- Blog Post -->
                    @foreach( $posts as $post )
                <div class="list-group-item">
                    <div class="card-body">
                        <h2 class="card-title">{!! $post->title !!}</h2>
                        <p>{{ count($post->comments) ? count($post->comments) : 'No' }} {{ Lang::choice('en.comments',count($post->comments)) }}</p>
                        <a class="btn btn-primary" href="{{ route('post',['id' => $post->slug]) }}">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on {{ $post->created_at->format('d.m.Y \a\t H:i') }}
                    </div>
                </div>
                @endforeach
                {!! $posts->links() !!}
                @endif
                <!-- Pagination -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection




