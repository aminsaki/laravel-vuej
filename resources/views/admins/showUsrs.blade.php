@extends('layouts.admin')
@section('content')
    <!--*********Header********/-->
    @include('admins.templates.headerTopAdmin')

    <!--*********menune_right********/-->
    <div class="row">
        <div class="col-md-3 myma_right">
            @include('admins.templates.rightMuneAdmin')
        </div>
        <div class="col-md-8">
          <users></users>
        </div>

    </div>


@endsection