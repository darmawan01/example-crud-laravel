@extends('layouts.app')


@section('content')
    <div class="container">
        <form action="{{ route('post.store') }}" class="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Titel</label>
                <input type="text" class="form-control" name="title" placeholder="Post Tittle">
            </div>

            <div class="form-group">
                <label>Category</label>
                <select name="kategori_id" id="" class="form-control">
                    @foreach ($category as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Content</label>
                <textarea name="content" rows="5" class="form-control" placeholder="Post Content"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
@endsection