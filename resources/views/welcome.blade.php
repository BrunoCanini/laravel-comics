@extends('layouts.app')

@section('content')
<div class="container my-3">
        <div class="row">
            @foreach( $comics as $comic )
                <div class="col">
                    <div class="card d-flex" style="width: 18rem;">
                        <img src="{{$comic['thumb']}}" class="card-img-top img-fluid" alt="..." style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic['title']}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</div>
@endsection