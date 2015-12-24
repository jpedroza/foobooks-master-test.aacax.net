@extends('layouts.master')

@section('title')
    Edit Video Book
@stop


@section('content')

    <h1>Edit</h1>

    @include('errors')

    <form method='POST' action='/books/edit'>

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <input type='hidden' name='id' value='{{ $book->id }}'>

        <div class='form-group'>
            <label>* Title (e.g., WorkingWithRoutes.mp4):</label>
            <input
                type='text'
                id='title'
                name='title'
                value='{{$book->title}}'
            >
        </div>

        <div class='form-group'>
            <label for='author'>* Content Reviewer, Contributor, Author:</label>
            <select name='author' id='author'>
                @foreach($authors_for_dropdown as $author_id => $author_name)

                    {{ $selected = ($author_id == $book->author->id) ? 'selected' : '' }}

                    <option value='{{ $author_id }}' {{ $selected }}> {{ $author_name }} </option>
                @endforeach
            </select>
        </div>

        <div class='form-group'>
            <label for='title'>* Thumbnail Image(e.g., "img/thumbnail.png"):</label>
            <input
                type='text'
                id='cover'
                name="cover"
                value='{{$book->cover}}'
                >
        </div>

        <div class='form-group'>
            <label for='Published'>Percent Complete (0 to 100):</label>
            <input
                type='text'
                id='published'
                name="published"
                value='{{$book->published}}'
                >
        </div>

        <div class='form-group'>
            <label for='title'>* Video Book Description:</label>
            <input
                type='text'
                id='purchase_link'
                name='purchase_link'
                value='{{$book->purchase_link}}'
                >
        </div>

        <div class='form-group'>
            <label for='tags'>Tags</label>
            @foreach($tags_for_checkbox as $tag_id => $tag)
                <?php $checked = (in_array($tag['name'],$tags_for_this_book)) ? 'CHECKED' : '' ?>
                <input {{ $checked }} type='checkbox' name='tags[]' value='{{$tag_id}}'> {{ $tag['name'] }}<br> 
            @endforeach
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>

@stop
