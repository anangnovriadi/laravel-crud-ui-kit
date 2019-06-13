@extends('layout.app')

@section('content')
    <div class="uk-margin-bottom">
        <a href="{{ route('add') }}" class="uk-button uk-button-primary"><span uk-icon="icon: plus-circle"></span> Add Book</a>
    </div>
    <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
        @if (count($books) > 0)
            @foreach ($books as $book)
                <div>
                    <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                        <h3 class="uk-card-title">{{ $book->name }}</h3>
                        <p>{{ $book->description }}</p>
                        <div class="uk-flex-center">
                            <a href="" uk-icon="icon: file-edit"></a>
                            <a href="" uk-icon="icon: trash"></a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div>
                Data is empty.
            </div>
        @endif
    </div>
@endsection