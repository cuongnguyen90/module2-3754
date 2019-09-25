@extends('master')
@section('contents')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="{{route('post.products')}}" method="post" role="form">
                @csrf
                <legend>Product Discount Calculator</legend>

                <div class="form-group">
                    <label for="">Product Description:</label>
                    <input type="text" class="form-control" name="desc" id="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">List Price:</label>
                    <input type="number" class="form-control" name="price" id="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Discount Percent: </label>
                    <input type="number" class="form-control" name="percent" id="" placeholder="" min="0" max="100">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection
