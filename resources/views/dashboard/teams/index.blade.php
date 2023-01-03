@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <div class="content-body">
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">فريق العمل  </h4>
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
                                   <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#myModal">
                                        اضف فرد جديد 
                                    </button> 
                                    <br>


                                    <table class="table table-striped table-bordered zero-configuration" id="storestable">


                                        <br>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>الصورة </th>

                                                <th>الاسم </th>
                                                <th>المسمى الوظيفي </th>

                                                <th>الاجراءات </th>
                                            </tr>
                                        </thead>
                                        <tbody id="stores">
                                            @foreach ($teams as $key => $item)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td><img src="{{ asset('uploads/'.$item->image) }}" width="90" height="70" alt=""></td>
                                                    <td>{{ $item->title }} </td>
                                                    <td>{{ $item->job }} </td>

                                                    <td>
                                                        <button class="btn btn-info" data-toggle="modal"
                                                            data-target="#myModal4" onclick="make('{{ $item->id }}')"><i
                                                                class="fa fa-edit"></i></button>
                                                        <form style="display: inline"
                                                            action="{{ route('teams.destroy', $item->id) }}"
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
                                                    <h4 class="modal-title"> اضف قيم جديدة</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form action="{{ route('teams.store') }}" method="post" enctype="multipart/form-data">
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
                                                            <label for="email"> الاسم:</label>
                                                            <input type="text" name="title" class="form-control"
                                                                required placeholder="اضف العنوان" id="email">
                                                        </div>

                                                        <div class="form-group col-md-8">
                                                            <label for="email"> المسمى الوظيفي:</label>
                                                            <input type="text" name="job" class="form-control"
                                                                required placeholder="اضف المسمى الوظيفي" id="email">
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
                    <h4 class="modal-title"> تعديل الموظف</h4>
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
    
        function make(id) {
            // $("#updateStore").show();
            $('#updateStore').modal('show');
            // $('#staticBackdrop').modal();

            $.ajax({
                type: 'post',
                url: "{{ route('get_form_team') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id
                },
                beforeSend: function() {},
                success: function(data) {
                    $('#company_edit').html(data);


                }
            });

        }
    </script>
@endsection
