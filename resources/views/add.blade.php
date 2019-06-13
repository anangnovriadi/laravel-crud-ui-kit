@extends('layout.app')

@section('content')
    <div class="uk-width-1-2 uk-margin-auto@m">
        <form>
            <fieldset class="uk-fieldset">
                <legend class="uk-legend">Add Book</legend>
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Name Book">
                </div>
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Author">
                </div>
                <div class="uk-margin">
                    <textarea class="uk-textarea" rows="4" placeholder="Description"></textarea>
                </div>
                <div class="uk-margin">
                    <button class="uk-button uk-button-primary">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
@endsection