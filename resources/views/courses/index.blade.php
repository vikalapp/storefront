@extends('layouts.admin')

@section('content')
    <div class="containerli">
        <div class="ui equal width left aligned padded grid stackable">

            <div class="row">
                <div class="sixteen wide column">
                    <div class="ui segments">
                        <div class="ui segment">
                            <h5 class="ui header">
                                Available Courses
                            </h5>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                        <div class="ui segment">

                            <table id="data_table" class="ui compact selectable striped celled table" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>For Sale</th>
                                    <th>Active</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($courses as $courseInfo)
                                <tr>
                                    <td>{{$courseInfo->name}}</td>
                                    <td>{!! $courseInfo->description !!}</td>
                                    <td>{{$courseInfo->price}}</td>
                                    <td>{{$courseInfo->for_sale ? 'Yes':'No'}}</td>
                                    <td>{{$courseInfo->active ? 'Yes':'No'}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection