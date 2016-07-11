@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- Buttons --}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a class="btn btn-default" role="button" data-toggle="collapse" href="#search" aria-expanded="false" aria-controls="collapseExample">Search products</a>
                <a class="btn btn-primary" role="button" href="">New category</a>
                <a class="btn btn-success" role="button" href="">New product</a>

                {{-- Search Well --}}
                <div class="collapse" id="search">
                </div>
                {{-- End search well --}}
            </div>
        </div>
        {{-- End content --}}

        {{-- Main content --}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @if (count($products) > 0)
                    {{-- Products table --}}
                        <table class="table table-condensed table-hover">
                            <thead>
                                <th>#</th>
                                <th>Category:</th>
                                <th>Product name:</th>
                                <th>Created at:</th>
                                <th></th> {{-- Options --}}
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td><code>#P{{ $product->id }}</code></td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        
                                        {{-- Options --}}
                                            <td>
                                                <a class="label label-default" href="">Edit</a>
                                                <a class="label label-primary" href="">Show</a>
                                                <a class="label label-danger" href="">Delete</a>
                                            </td>
                                        {{-- END options --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    {{-- END products table --}}

                    {{-- Products pagination --}}
                        {{ $products->render() }}
                    {{-- End products pagination --}}
                @else
                    <div class="alert alert-danger">
                        There are no products registered. You can create one if you want.
                    </div>
                @endif
            </div>
        </div>
        {{-- End main content --}}
    </div>
@endsection