<style>
ul {
    list-style-type: none;
    overflow: hidden;
}
li {
    float: left;
    padding: 16px;
}
</style>
@extends('layouts.app')
@section('content')
    <div class="ui vertical segment">
            <div class="ui middle aligned stackable grid container">
                <div class="row">
                    <div class="ui four special cards">
                        @foreach($courses as $courseInfo)
                        <div class="ui card">
                            <div class="blurring dimmable image">
                                    <div class="ui dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui inverted button">
                                                <a class="header" href="{{route('course.show', ['id' => $courseInfo->id])}}">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="http://wpsghalearningcenter.com/storage/185.jpg">
                            </div>
                            <div class="content">
                                <a class="header">{{ str_limit($courseInfo->name,25) }}</a>
                                <div class="meta">
                                    <span class="description"> {{ str_limit($courseInfo->description, 50) }}</span>
                                </div>
                            </div>
                            <div class="extra content">
                                <a>
                                    <i class="users icon"></i>
                                    3 seats left
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="right aligned column"> 
                        <div class="ui link list">
                            <div class="ui pagination menu">
                                <div class="ui relaxed grid">     
                                {{$courses->links()}} 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection



