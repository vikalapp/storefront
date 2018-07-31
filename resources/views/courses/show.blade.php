@extends('layouts.app')
@section('content')
    <div class="ui vertical segment">

        <div class="ui grid container">
                <div class="row">
                    <div class="ui column header">
                        {{ $course->name }}
                    </div>
                </div>
                <div class="row">
                    <div class="four wide column">
                        <img class="ui medium bordered image" src="http://wpsghalelearningcenter.com/storage/185.jpg">
                    </div>
                    <div class="twelve wide column">
                        {!! nl2br($course->description); !!}
                    </div>

                </div>
            <div class="row">
                <div class="ui column float right">
                    <add-to-cart></add-to-cart>
                </div>

            </div>
            </div>


    </div>
@endsection