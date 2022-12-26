@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <div class="content-body">
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">المنتجات </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-content collapse show">

                                <div class="card-body card-dashboard">
                                    @include('dashboard.parts._error')
                                    @include('dashboard.parts._success')
                                    <br>

                                    <a href="{{ route('products.create') }}" class="btn btn-primary" >اضف منتج</a>
                                    <br>


                                    <table class="table table-striped table-bordered zero-configuration" id="storestable">


                                        <br>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>الصورة</th>
                                                <th>اسم المنتج   </th>
                                                <th>الحالة  </th>
                                                <th>هل هي مميزة  </th>

                                                
                                                <th>الاجراءات   </th>
                                            </tr>
                                        </thead>
                                        <tbody id="stores">
                                            @foreach ($products as $key => $item)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td><img src="{{ asset('uploads/'.$item->image) }}" width="50" height="50" alt=""></td>

                                                    <td>{{ $item->title }} </td>
                                                    
                                                    <td>
                                                        <input type="checkbox" data-id="{{ $item->id }}" name="status" class="js-switch switch1" {{ $item->status == 1 ? 'checked' : '' }}>
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" data-id="{{ $item->id }}" name="is_best" class="js-switch switch2" {{ $item->is_best == 1 ? 'checked' : '' }}>
                                                    </td>

                                                    <td>
                                                        <a href="{{ route('products.edit',$item->id) }}" class="btn btn-info" ><i
                                                            class="fa fa-edit"></i></a>
                                                      
                                                        <form style="display: inline"
                                                            action="{{ route('products.destroy', $item->id) }}"
                                                            method="post">
                                                            @method('delete') @csrf
                                                            <button type="submit" class="btn btn-danger delete-confirm"><i
                                                                    class="fa fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title"> اضف فئة</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group col-md-8">
                                                            <label for="image"> الصورة:</label>
                                                            <input type="file" required name="image" class="form-control image"
                                                                required placeholder="اضف العنوان" id="image">
                                                                <div class="form-group">
                                                                    <img src="" style="width: 100px"
                                                                        class="img-thumbnail image-preview" alt="">
                                                                </div>
                                                        </div>

                                                        <div class="form-group col-md-8">
                                                            <label for="email"> العنوان:</label>
                                                            <input type="text" name="title" class="form-control"
                                                                required placeholder="اضف العنوان" id="email">
                                                        </div>


                                                        <button type="submit" class="btn btn-primary">حفظ</button>
                                                    </form>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">اغلاق</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>
    
    <div class="modal" id="updateStore">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"> تعديل الفئة</h4>
                    <button type="button" class="close"
                        data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body" id="company_edit">
                
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"
                        data-dismiss="modal">اغلاق</button>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.switch1').change(function() {
                let status = $(this).prop('checked') === true ? 1 : 0;
                let product_id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('product.update.status') }}',
                    data: {
                        'status': status,
                        'product_id': product_id
                    },
                    success: function(data) {
                        console.log(data.message);
                    }
                });
            });
            $('.switch2').change(function() {
                let is_best = $(this).prop('checked') === true ? 1 : 0;
                let product_id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('product.update.is_best') }}',
                    data: {
                        'is_best': is_best,
                        'product_id': product_id
                    },
                    success: function(data) {
                        console.log(data.message);
                    }
                });
            });
        });
       
    </script>
@endsection
