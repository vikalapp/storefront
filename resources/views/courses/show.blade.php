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
                        <img class="ui medium bordered image" src="http://wpsghalearningcenter.com/storage/185.jpg">
                    </div>
                    <div class="twelve wide column">
                        {!! nl2br($course->description); !!}
                    </div>

                </div>
            <div class="row">
                <div class="ui column float right">
                    <form action="{{ url('/cart') }}" method="POST" class="side-by-side">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" value="{{ $course->id }}">
                        <input type="hidden" name="name" value="{{ $course->name }}">
                        <input type="hidden" name="price" value="{{ $course->price ?? 0 }}">
                        <input type="submit" class="ui right floated button primary" value="Add to Cart">
                    </form>
                </div>

            </div>
            </div>


    </div>
@endsection