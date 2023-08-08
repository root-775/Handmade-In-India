@extends('admin.layouts.app')

@push('style')
    <!-- TABLE STYLES-->
    <link href="{{ asset('admin/assets/js/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet" />

    <style>
        .category-action {
            display: flex;
        }
        .category-action span {
            margin: 0 13px;
        }
        .category-action i {
            cursor: pointer;
        }
        .category-action form {
            margin: 0 13px;
        }
    </style>
@endpush

@section('content')
    @include('admin.layouts.page-header', ['title' => 'Product Category Create'])
    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-5">
                            <form method="POST" action="{{ route('product-category.update', ['product_category' => $single_category->uid ]) }}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id" value="{{ $single_category->uid }}">
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input class="form-control" name="category-name" value="{{ $single_category->category_name }}" />
                                </div>
                                <button type="submit" class="btn btn-default">update</button>
                            </form>
                        </div>

                        <div class="col-md-7">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover"
                                            id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($category as $item)
                                                    <tr>
                                                        <td style="width: 80%">{{ $item->category_name }}</td>
                                                        <td class="category-action">
                                                            <a href="{{ route('product-category.edit', ['product_category' => $item->uid]) }}"><i class="fa fa-pencil text-primary" aria-hidden="true"></i></a>
                                                            <form action="{{ route('product-category.destroy', ['product_category' => $item->uid ]) }}" method="post" id="delete-category">
                                                                @method('delete')
                                                                <input type="hidden" name="uid" value="{{ $item->uid }}">
                                                                <i class="fa fa-trash-o text-danger" onclick="document.getElementById('delete-category').submit();" aria-hidden="true"></i>
                                                            </form>
                                                            <a href="{{ route('product-category.destroy', ['product_category' => $item->uid ]) }}"></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>
    <!-- /. ROW  -->
@endsection

@push('script')
    <!-- DATA TABLE SCRIPTS -->
    <script src="{{ asset('admin/assets/js/dataTables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dataTables/dataTables.bootstrap.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>
@endpush
