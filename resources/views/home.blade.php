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
                        <div class="uk-grid uk-child-width-expand uk-text-center">
                            <div>
                                <a href="{{ route('edit', $book->id) }}">
                                    <span uk-icon="icon: file-edit"></span>
                                    <span>Edit</span>
                                </a>
                            </div>
                            <div>
                                <form method="POST" action="{{ route('delete', $book->id) }}">
                                    {{ csrf_field()}}
                                    {{  method_field('DELETE') }}
                                    <button style="text-decoration: none; background: transparent; border: none; cursor: pointer;" type="submit">
                                        <span uk-icon="icon: trash"></span>
                                        Delete
                                    </button>
                                </form>
                            </div>
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