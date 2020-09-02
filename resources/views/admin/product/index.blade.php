@extends('layouts.backend.master')
@section('base.title', 'Product List')
@section('master.content')
<!-- Content Header (Page header) -->
<div class="section-header">
    <h1>All Products</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Product</div>
    </div>
</div>

<div class="row">
    <h3>Laravel Dynamic Dependent Filtering Using Ajax</h3>
</div>
<hr>
<div class="row">
    <div class="col-4">
        <select class="form-control" name="product" id="product">
            <option selected disabled>Select Product</option>
            @foreach($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-4">
        <select class="form-control procat" name="category" id="category">
            <option selected disabled>Select Category</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-4">
        <select class="form-control" name="brand" id="brand">
            <option selected disabled>Select Brand</option>
            @foreach($brands as $brand)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<hr>
<hr>

{{--  Test Card Section --}}
<div class="row">
    @foreach($products as $product)
    <div class="col-4">
        <div class="card">
            <div class="card-header" style="background: chocolate; color: #fff; font-size: 20px">
                {{ $product->name }}
            </div>
            <div class="card-body" style="height:14rem; text-align:center">
                <p>{{ $product->description }}</p>
                <small style="color: chocolate; font-weight:bold; font-size:60px">{{ $product->price }}</small>

                <h4 style="text-transform: capitalize">{{ $product->category->name }} <span>Category</span></h4>
            </div>
        </div>
    </div>
    @endforeach
</div>
<hr>
<hr>
<!-- /.content-header -->
{{--  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product List</h4>
                        <a href="{{ route('product.create') }}" class="btn btn-icon btn-left btn-primary"><i
                                class="fas fa-plus"></i> Add New</a>
                        <div class="card-header-form">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                class="custom-control-input" id="checkbox-all">
                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th class="p-0 text-center">ID</th>
                                    <th class="p-0 text-center">Product Name</th>
                                    <th class="p-0 text-center">Slug</th>
                                    <th class="p-0 text-center">Category</th>
                                    <th class="p-0 text-center">Description</th>
                                    <th class="p-0 text-center">Price <small>(Tk)</small></th>
                                    <th class="p-0 text-center">Image</th>
                                    <th class="p-0 text-center">Status</th>
                                    <th class="p-0 text-center">Action</th>
                                </tr>
                                @if($products->count() > 0)
                                @foreach($products as $product)
                                <tr>
                                    <td>
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup"
                                                class="custom-control-input" id="checkbox-1">
                                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <th scope="row" class="p-0 text-center">{{ $product->id }}</th>
                                    <td class="p-0 text-center">{{ $product->name }}</td>
                                    <td class="p-0 text-center">{{ $product->slug  }}</td>
                                    <td class="p-0 text-center">{{ $product->category->name }}</td>
                                    <td class="p-0 text-center">{{ $product->description }}</td>
                                    <td class="p-0 text-center">{{ $product->price }}/=</td>
                                    <td class="p-0 text-center">
                                        <div style="margin: 0 auto; width: 60px; overflow: hidden">
                                            <img class="img-fluid" src="{{ asset('images/product/'. $product->image) }}"
                                                alt="catImg">
                                        </div>
                                    </td>
                                    <td class="p-0 text-center">
                                        @if($product->status == 1) <span class="badge badge-success">Active</span>@else
                                        <span class="badge badge-danger">Inactive</span> @endif
                                    </td>
                                    <td class="p-0 text-center">
                                        <a class="btn btn-sm btn-warning btn-xs"
                                            href="{{ route('product.edit', $product->id) }}"><i
                                                class="fas fa-pen-square"></i></a>
                                        <form action="{{ route('product.destroy', $product->id) }}" method="post"
                                            style="display: inline-block">
                                            @method('DELETE')
                                            @csrf
                                            <button onclick="alert('Are You Sure to DELETE!')"
                                                class="btn btn-sm btn-danger btn-xs"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="9" style="text-align: center; color: grey">No product found</td>
                                </tr>
                                @endif
                            </table>
                            {{ $products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  --}}


@endsection

<script>
    $(document).ready(function(){
        let a ="string";
        alert(a);
        $(document).on('change','.procat',function(){
            var cat_id = $(this).val();
            alert(cat_id);

        });
    });
</script>