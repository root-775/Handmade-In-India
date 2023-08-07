@extends('admin.layouts.app')

@push('style')
    <!-- TABLE STYLES-->
    <link href="{{ asset('admin/assets/js/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet" />
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
                            <form method="POST" action="{{ route('product-category.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input class="form-control" name="category-name" />
                                </div>

                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-primary">Reset Button</button>

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
                                                <tr>
                                                    <td style="width: 80%">Trident</td>
                                                    <td>
                                                        <span><i class="fa fa-pencil text-primary" aria-hidden="true"></i></span>
                                                        <span><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 80%">Trident</td>
                                                    <td>
                                                        <span><i class="fa fa-pencil text-primary" aria-hidden="true"></i></span>
                                                        <span><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></span>
                                                    </td>
                                                </tr>
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
