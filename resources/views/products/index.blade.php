@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- Buttons --}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a class="btn btn-default" role="button" data-toggle="collapse" href="#search" aria-expanded="false" aria-controls="collapseExample">Search products</a>
                <a class="btn btn-primary" role="button" href="" data-toggle="modal" data-target="#newCat">New category</a>
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

        {{-- Models --}}

            {{-- New category modal --}}
            <div class="modal fade" id="newCat" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">New category</h4>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="" class="form-horizontal">
                                {{-- CSRF token --}}
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="zipcode">
                                        Category: <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input value="" type="text" id="category" name="category" placeholder="Category name" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="description">
                                        Description: <span class="text-danger">*</span>
                                    </label>

                                    <div class="col-sm-9">
                                        <textarea name="description" class="form-control" placeholder="description" id="description" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>{{-- /.modal-content --}}
                </div>{{-- /.modal-dialog --}}
            </div>{{-- /.modal --}}
            {{-- End new category modal --}}

        {{-- END modals --}}
    </div>
@endsection