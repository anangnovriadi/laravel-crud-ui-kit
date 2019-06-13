@extends('layout.app')

@section('content')
    <div class="uk-width-1-2 uk-margin-auto@m">
        <form method="POST" action="{{ route('update', $books->id) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <fieldset class="uk-fieldset">
                <legend class="uk-legend">Edit Book</legend>
                <div class="uk-margin">
                    <input class="uk-input" name="name" value="{{ $books->name }}" type="text" placeholder="Name Book" required>
                </div>
                <div class="uk-margin">
                    <input class="uk-input" type="text" name="author" value="{{ $books->author }}" placeholder="Author" required>
                </div>
                <div class="uk-margin">
                    <textarea class="uk-textarea" rows="4" name="description" placeholder="Description" required>{{ $books->description }}</textarea>
                </div>
                <div class="uk-margin">
                    <button type="submit" class="uk-button uk-button-primary">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
@endsection