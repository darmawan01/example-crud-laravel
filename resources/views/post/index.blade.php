@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach ($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ route('post.show', $post) }}">{{ $post->title }}</a> <small>created_by<b> {{$post->user->name}}</b></small> - {{ $post->created_at->diffForHumans() }}

                            @if ($post->user_id == auth()->id())
                                <div class="pull-right">
                                    <a href="{{ route('post.edit', $post) }}"><span><button type="submit" class="btn btn-xs btn-primary" >Update</button></span></a>
                                </div>
                                <div class="pull-right">
                                    
                                    <form action="{{ route('post.destroy',$post)}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-xs btn-danger" >Hapus</button>&nbsp;&nbsp;
                                    </form>
                                </div>
                            @endif
                        </div>
        
                        <div class="panel-body">
                            <p>{{ str_limit($post->content, 240, '...') }}</p>
                        </div>
                    </div>
                @endforeach

                {!! $posts->render() !!}
            </div>
        </div>
    </div>
@endsection