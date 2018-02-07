@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update {{ $post->title }}</div>
                    <div class="panel-body">
                        <form action="{{ route('post.update', $post) }}" class="" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label>Titel</label>
                                <input type="text" class="form-control" name="title" placeholder="Post Tittle" value="{{ $post->title }}">
                            </div>
                        
                            <div class="form-group">
                                <label>Category</label>
                                <select name="kategoris_id" id="" class="form-control">
                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}" @if ($post->kategoris_id == $cat->id)
                                            selected
                                        @endif >{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" rows="5" class="form-control" placeholder="Post Content">{{ $post->content }}</textarea>
                            </div>
                    
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection