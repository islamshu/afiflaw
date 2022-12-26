@extends('layouts.backend')
@section('content')
    <div class="content-body">
        <section id="configuration">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control">  طلب مراسلة خاص ب {{ $contact->name }} </h4>
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
                            <div class="card-body">
                                @include('dashboard.parts._error')
                                @include('dashboard.parts._success')
    
                                
                                    <div class="form-body">
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>اسم المرسل  </label>
                                                <input type="text" value="{{ $contact->name }}" readonly name="title" class="form-control"  >
                                            </div>
                                            <div class="col-md-6">
                                                <label>رقم الهاتف   </label>
                                                <input type="text" value="{{ $contact->phone }}" readonly name="title" class="form-control"  >
                                            </div>
                                            <div class="col-md-6">
                                                <label>البريد الاكتروني    </label>
                                                <input type="text" value="{{ $contact->email }}" readonly name="title" class="form-control"  >
                                            </div>
                                        </div>
                                        <br>
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>الرسالة</label>
                                                <textarea name="" class="form-control " readonly  >{{  $contact->message  }}</textarea>

                                            </div>
                                            
                                        </div>
                                        <br>
                                        
                                        <br>
                                      
                                       
                                        <br>
                                        
                                       
                                    </div>
                                   
    
    
                                  
    
    
                                </form>
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
@endsection
