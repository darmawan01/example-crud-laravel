@extends('layouts.app')


@section('content')
    <div class="container">
        <form action="{{ route('post.store') }}" class="" method="post">
            {{ csrf_field() }}

            <div class="form-group has-feedback{{ $errors->has('title') ? ' has-error' : '' }}">
                <label>Titel</label>
                <input type="text" class="form-control" name="title" placeholder="Post Tittle"  value="{{ old('title') }}">
                @if ($errors->has('title'))
                    <span class="help-block">
                        <p>{{ $errors->first('title') }}</p>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label>Category</label>
                <select name="kategori_id" id="" class="form-control">
                    @foreach ($category as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group has-feedback{{ $errors->has('content') ? ' has-error' : '' }}  has-feedback{{ $errors->has('title') ? ' has-error' : '' }}">
                <label>Content</label>
                <textarea name="content" rows="5" class="form-control" placeholder="Post Content"  value="{{ old('content') }}"></textarea>
                @if ($errors->has('content'))
                    <span class="help-block">
                        <p>{{ $errors->first('content') }}</p>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
@endsection