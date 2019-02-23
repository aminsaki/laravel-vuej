@extends('layouts.app_admin')
@section('content')
    <!--*********Header********/-->
    @include('admins.templates.headerTopAdmin')
    <!--*********menune_right********/-->
    <div class="row"  id="app">
            @include('admins.templates.rightMuneAdmin')
        <router-view></router-view>
    </div>

@endsection