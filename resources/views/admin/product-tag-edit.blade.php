@extends('admin.layouts.app')

@push('style')
    <!-- TABLE STYLES-->
    <link href="{{ asset('admin/assets/js/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet" />

    <style>
        .tag-action {
            display: flex;
        }
        .tag-action span {
            margin: 0 13px;
        }
        .tag-action i {
            cursor: pointer;
        }
        .tag-action form {
            margin: 0 13px;
        }
    </style>
@endpush

@section('content')
    @include('admin.layouts.page-header', ['title' => 'Product Tag Update'])
    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-5">
                            <form method="POST" action="{{ route('product-tag.update', ['product_tag' => $single_tag->uid ]) }}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id" value="{{ $single_tag->uid }}">
                                <div class="form-group">
                                    <label>tag Name</label>
                                    <input class="form-control" name="tag-name" value="{{ $single_tag->tag_name }}" />
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
                                                @foreach ($tag as $item)
                                                    <tr>
                                                        <td style="width: 80%">{{ $item->tag_name }}</td>
                                                        <td class="tag-action">
                                                            <a href="{{ route('product-tag.edit', ['product_tag' => $item->uid]) }}"><i class="fa fa-pencil text-primary" aria-hidden="true"></i></a>
                                                            <form action="{{ route('product-tag.destroy', ['product_tag' => $item->uid ]) }}" method="post" id="delete-tag">
                                                                @method('delete')
                                                                <input type="hidden" name="uid" value="{{ $item->uid }}">
                                                                <i class="fa fa-trash-o text-danger" onclick="document.getElementById('delete-tag').submit();" aria-hidden="true"></i>
                                                            </form>
                                                            <a href="{{ route('product-tag.destroy', ['product_tag' => $item->uid ]) }}"></a>
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
