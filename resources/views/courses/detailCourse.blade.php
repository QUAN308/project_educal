@extends('templates.layout')
@section('title')
@section('content')
    <!-- Main content -->
    <section class="content appTuyenSinh">
        <link rel="stylesheet" href="{{ asset('default/bower_components/select2/dist/css/select2.min.css')}} ">
        <style>
            .select2-container--default .select2-selection--single, .select2-selection .select2-selection--single {
                padding: 3px 0px;
                height: 30px;
            }
            .select2-container {
                margin-top: -5px;
            }

            option {
                white-space: nowrap;
            }

            .select2-container--default .select2-selection--single {
                background-color: #fff;
                border: 1px solid #aaa;
                border-radius: 0px;
            }

            .select2-container--default .select2-selection--multiple .select2-selection__choice {
                color: #216992;
            }
            .select2-container--default .select2-selection--multiple{
                margin-top:10px;
                border-radius: 0;
            }
            .select2-container--default .select2-results__group{
                background-color: #eeeeee;
            }
        </style>

        <?php //Hiển thị thông báo thành công?>
        @if ( Session::has('success') )
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>{{ Session::get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
        <?php //Hiển thị thông báo lỗi?>
        @if ( Session::has('error') )
            <div class="alert alert-danger alert-dismissible" role="alert">
                <strong>{{ Session::get('error') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
    @endif

    <!-- Phần nội dung riêng của action  -->
        <form class="form-horizontal " action="{{ route('route_BackEnd_courses_update', ['id'=>request()->route('id')]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Tên khóa học<span class="text-danger">(*)</span></label>
                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="ten_khoa_hoc" id="name" class="form-control" value="{{ $data_detail->ten_khoa_hoc }}">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-3 col-sm-4 control-label">Mô tả<span class="text-danger">(*)</span></label>
                            <div class="col-md-9 col-sm-8">
                                <textarea name="mo_ta" class="form-control" id="exampleFormControlTextarea1" rows="3" value="">{{ $data_detail->mo_ta }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-3 col-sm-4 control-label">Giá<span class="text-danger">(*)</span></label>
                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="gia" id="password" class="form-control" value="{{ $data_detail->gia }}">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-3 col-sm-4 control-label">Khuyến mãi<span class="text-danger">(*)</span></label>
                            <div class="col-md-9 col-sm-8">
                                <select name="khuyen_mai" class="form-control" aria-label="Default select example">
                                    @if($data_detail->khuyen_mai == 1)
                                        <option selected value="1">Khuyến mãi</option>
                                        <option value="0">Không khuyến mãi</option>
                                    @elseif($data_detail->khuyen_mai == 0)
                                        <option value="1">Khuyến mãi</option>
                                        <option selected value="0">Không khuyến mãi</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-3 col-sm-4 control-label">Danh mục<span class="text-danger">(*)</span></label>
                            <div class="col-md-9 col-sm-8">
                                <select name="categories_id" class="form-control" aria-label="Default select example">
                                    @foreach($cateData as $icate)
                                        @if($data_detail->categories_id == $icate->id)
                                            <option value="{{$icate->id}}">{{$icate->ten_danh_muc}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-3 col-sm-4 control-label">Bài giảng<span class="text-danger">(*)</span></label>
                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="so_luong_bai_tap" id="password" class="form-control" value="{{ $data_detail->so_luong_bai_tap }}">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-sm-4 control-label">Ảnh Khóa học</label>
                            <div class="col-md-9 col-sm-8">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <img id="anh_khoa_hoc_preview" src="{{ $data_detail->hinh_anh?''.Storage::url($data_detail->hinh_anh):'http://placehold.it/100x100' }}" alt="your image"
                                             style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid"/>
                                        <input type="file" name="anh_khoa_hoc" accept="image/*"
                                               class="form-control-file @error('anh_khoa_hoc') is-invalid @enderror" id="anh_khoa_hoc">
                                        <label for="anh_khoa_hoc">Ảnh khóa học</label><br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary"> Save</button>
                <a href="{{ route('route_BackEnd_courses_list') }}" class="btn btn-default">Cancel</a>
            </div>
            <!-- /.box-footer -->
        </form>

    </section>
@endsection
@section('script')
    <script src="{{ asset('default/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('default/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script>
        $(function(){
            function readURL(input, selector) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function (e) {
                        $(selector).attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#anh_khoa_hoc").change(function () {
                readURL(this, '#anh_khoa_hoc_preview');
            });

        });
    </script>
@endsection

