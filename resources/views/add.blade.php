@extends('layout.app')

@section('content')
    <div class="uk-width-1-2 uk-margin-auto@m">
        <form method="POST" action="{{ route('create') }}">
            {{ csrf_field() }}
            <fieldset class="uk-fieldset">
                <legend class="uk-legend">Add Book</legend>
                <div class="uk-margin">
                    <input class="uk-input" name="name" type="text" placeholder="Name Book" required>
                </div>
                <div class="uk-margin">
                    <input class="uk-input" type="text" name="author" placeholder="Author" required>
                </div>
                <div class="uk-margin">
                    <textarea class="uk-textarea" rows="4" name="description" placeholder="Description" required></textarea>
                </div>
                <div class="uk-margin">
                    <button type="submit" class="uk-button uk-button-primary">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
@endsection