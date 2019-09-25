
@extends('master')
@section('contents')
    <div class="col-md-4 col-md-offset-4">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>Discount Amount:</p>{{$result}}
    </div>
    </div>
@endsection
