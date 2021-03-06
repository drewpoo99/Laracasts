@extends('simplelayout');

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
@endsection

@section('content')
<div class="wrapper">
    <div class="container" id="page">
        <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>
        
        <form method="POST" action="/articles">
            @csrf
            <div class="field">
                <label for="title" class="label">Title</label>

                <div class="control">
                    <input type="text" 
                    class="input @error('title') is-danger @enderror" 
                    name="title" 
                    id="title"
                    value="{{ old('title') }} ">

                    @error('title')
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="excerpt" class="label">Excerpt</label>

                <div class="control">
                    <textarea name="excerpt" 
                    id="excerpt" 
                    class="textarea @error('excerpt') is-danger @enderror"
                     >{{ old('excerpt') }}</textarea>
                   
                    @error('excerpt')
                        <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>

                <div class="control">
                    <textarea name="body" 
                    id="body" 
                    class="textarea @error('body') is-danger @enderror"
                   >{{ old('body') }}</textarea>

                    @error('body')
                        <p class="help is-danger">{{$errors->first('body')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>  
    </div>
</div>
@endsection