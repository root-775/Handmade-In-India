@extends('admin.layouts.app')

@push('style')
    <!-- TABLE STYLES-->
    <link href="{{ asset('admin/assets/js/dataTables/jquery.dataTables.min.css') }}" rel="stylesheet" />

    <style>
        .product-action {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .product-action i {
            cursor: pointer;
        }
        .modal-open {
            overflow: scroll;
        }
    </style>
@endpush

@section('content')
    @include('admin.layouts.page-header', ['title' => 'Product Show'])
    {{ $products }}
    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover"
                                            id="product-dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                    <th>Action</th>
                                                    <th>Action</th>
                                                    <th>Action</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $item)
                                                    <tr>
                                                        <td>{{ $item->product_name }}</td>
                                                        <td>{{ $item->product_brand }}</td>
                                                        <td>{{ $item->product_price }}</td>
                                                        <td>{{ $item->product_discount_percentage }}</td>
                                                        <td>
                                                            <i class="fa fa-eye show_property_details" item-details='{{ $item->product_short_description }}' data-toggle="modal" data-target="#property_details" style="cursor: pointer;"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-eye show_property_details" item-details='{{ $item->product_long_description }}' data-toggle="modal" data-target="#property_details" style="cursor: pointer;"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-eye show_property_details" item-details='{{ $item->product_image }}' data-toggle="modal" data-target="#property_details" style="cursor: pointer;"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-eye show_property_details" item-details='{{ $item->product_flip_image }}' data-toggle="modal" data-target="#property_details" style="cursor: pointer;"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-eye show_property_details" item-details='{{ $item->product_desc_images }}' data-toggle="modal" data-target="#property_details" style="cursor: pointer;"></i>
                                                        </td>
                                                        <td>
                                                            @foreach ($item->tags as $item)
                                                                {{ $item->tag_name }},
                                                            @endforeach
                                                            {{-- {{ $item->tags }} --}}
                                                        </td>
                                                        <td>
                                                            {{ $item->categories }}
                                                        </td>
                                                        <td>
                                                            <div class="product-action">
                                                                <a href="{{ route('admin.product.edit', ['product' => $item->uid]) }}"><i class="fa fa-pencil text-primary" aria-hidden="true"></i></a>
                                                                <form action="{{ route('admin.product.destroy', ['product' => $item->uid ]) }}" method="post" id="delete-product">
                                                                    @method('delete')
                                                                    <input type="hidden" name="uid" value="{{ $item->uid }}">
                                                                    <i class="fa fa-trash-o text-danger" onclick="document.getElementById('delete-product').submit();" aria-hidden="true"></i>
                                                                </form>
                                                            </div>
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








    <!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="property_details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">
            <span class="item-details"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



@endsection

@push('script')
    <!-- DATA TABLE SCRIPTS -->
    <script src="{{ asset('admin/assets/js/dataTables/jquery.dataTables.min.js') }}"></script>
    {{-- <script src="{{ asset('admin/assets/js/dataTables/dataTables.bootstrap.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            $('#product-dataTable').DataTable();
            // $('.show_property_details').on("click", function (event) {
            //     console.log("Asfsa");
            // });
            $(document).on('click', '.show_property_details', function (event) {
                event.preventDefault();
                var course_details = $(this).attr("item-details");
                console.log(course_details);
                $('.item-details').html(course_details);
            });
        });
    </script>
@endpush
