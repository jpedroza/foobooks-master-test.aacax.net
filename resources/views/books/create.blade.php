@extends('layouts.master')

@section('title')
    Contribute a Laravel Video Book
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    {{-- <link href="/css/books/create.css" type='text/css' rel='stylesheet'> --}}
@stop



@section('content')

    <h1>Contribute Laravel Video Books</h1>

    @include('errors')

    <form method='POST' action='/books/create'>

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <div class='form-group'>
            <label>* Title: (e.g., mp4 filename) </label>
            <input
                type='text'
                id='title'
                name='title'
                value='{{ old('title','Default Title') }}'
            >
        </div>

        <div class='form-group'>
            <label for='author'>* Content Reviewer, Contributor, Author:</label>
            <select name='author' id='author'>
                @foreach($authors_for_dropdown as $author_id => $author_name)
                    <option value='{{ $author_id }}'> {{ $author_name }} </option>
                @endforeach
            </select>
        </div>

        <div class='form-group'>
            <label for='title'>* Thumbnail Image (e.g., "img/thumbnail.png"):</label>
            <input
                type='text'
                id='cover'
                name="cover"
                value='{{ old('cover','img/DefaultThumbnail.png') }}'
                >
        </div>

        <div class='form-group'>
            <label for='Published'>Percent Complete (0 to 100):</label>
            <input
                type='text'
                id='published'
                name="published"
                value='{{ old('published','1960') }}'
                >
        </div>

        <div class='form-group'>
            <label for='title'>* Description and Notes:</label>
            <input
                type='text'
                id='purchase_link'
                name='purchase_link'
                value='{{ old('purchase_link','summary of why the lesson is valuable') }}'
                >
        </div>

        <div class='form-group'>
            <label for='tags'>Metadata</label>
            @foreach($tags_for_checkbox as $tag_id => $tag)
                <input type='checkbox' name='tags[]' value='{{$tag_id}}'> {{ $tag['name'] }}<br>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Add Video Book</button>
    </form>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    {{-- <script src="/js/books/create.js"></script> --}}
@stop
