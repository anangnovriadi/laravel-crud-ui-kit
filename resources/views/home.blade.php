@extends('layout.app')

@section('content')
    <div class="uk-container uk-margin-medium">
        <div class="uk-margin-bottom">
            <button class="uk-button uk-button-primary"><span uk-icon="icon: plus-circle"></span> Add Book</button>
        </div>
        <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                    <h3 class="uk-card-title">Default</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="uk-flex-center">
                        <a href="" uk-icon="icon: file-edit"></a>
                        <a href="" uk-icon="icon: trash"></a>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                    <h3 class="uk-card-title">Default</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="uk-flex-center">
                        <a href="" uk-icon="icon: file-edit"></a>
                        <a href="" uk-icon="icon: trash"></a>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                    <h3 class="uk-card-title">Default</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="uk-flex-center">
                        <a href="" uk-icon="icon: file-edit"></a>
                        <a href="" uk-icon="icon: trash"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection