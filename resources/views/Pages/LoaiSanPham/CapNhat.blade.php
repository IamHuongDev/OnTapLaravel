@extends('Master')

@section('content')
{{-- {{ dd($data)}} --}}
    <div class="row">
        <div class="col-md-4">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Cập nhật loại sản phẩm</h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <p>Thông tin sản phẩm bạn cần cập nhật</p>
                    @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                    @endif
                  <form action="/loai-san-pham/update" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$update[0]->id}}">
                     <div class="form-group">
                        <label >Tên loại sản phấm: </label>
                        <input type="text" class="form-control" name="TenLoaiSanPham" placeholder="Mời bạn nhập tên loại sản phẩm" value="{{$update[0]->TenLoaiSanPham}}">
                     </div>
                     <div class="form-group">
                        <label >Trình trạng</label>
                        <select class="custom-select" name="TinhTrang">
                            <option value=1 {{$update[0]->TinhTrang == 1 ? 'selected' : ''}}>Hoạt động</option>
                            <option value=0 {{$update[0]->TinhTrang == 0 ? 'selected' : ''}}>Dừng hoạt động</option>
                        </select>
                      </div>

                     <button type="submit" class="btn btn-primary">Cập nhật</button>
                  </form>
               </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                    <h4 class="card-title">Danh sách sản phẩm</h4>
                    @if (isset($errorDelete))
                        <div class="alert alert-danger" role="alert">
                            {{ $errorDelete }}
                        </div>
                    @endif
                  </div>
                </div>
                <div class="iq-card-body">
                  <p>Thông tin sản phẩm</p>
                  <table id="myTable" class="table">
                    <thead>
                      <tr>
                        <th class="text-center" scope="col">#</th>
                        <th class="text-center" scope="col">Tên loại sản phẩm</th>
                        <th class="text-center" scope="col">Slug sản phẩm</th>
                        <th class="text-center" scope="col">Tình trạng</th>
                        <th class="text-center" scope="col">Ngày tạo</th>
                        <th class="text-center" scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $key => $value)
                        <tr  class="{{$value->TinhTrang == 0 ? 'text-danger' : 'text-primary'}}">
                            <th class="text-center" scope="row">{{ $key + 1 }}</th>
                            <td>{{ $value->TenLoaiSanPham}}</td>
                            <td>{{ $value->SlugLoaiSanPham}}</td>
                            <td class="text-center">{{ $value->TinhTrang == 1 ? "Đang hoạt động" : "Dừng hoạt động"}}</td>
                            <td class="text-center">{{ $value->NgayTao}}</td>
                            <td>

                                <a class="btn btn-primary " style="margin-bottom: 10px; height: 100%; width: 100%;" href="/loai-san-pham/delete/{{$value->id}}">Delete</a>
                                <a class="btn btn-danger " style="height: 100%; width: 100%;" href="/loai-san-pham/edit/{{$value->id}}">update</a>

                                {{-- <span class="table-remove">
                                    <button type="button" class="btn iq-bg-success btn-rounded btn-sm my-0 ">Remove</button>
                                </span>
                                <span class="table-remove">
                                    <button type="button" class="btn iq-bg-danger btn-rounded btn-sm my-0">Remove</button>
                                </span> --}}
                            </td>
                          </tr>
                        @endforeach

                      {{-- @for ($i = 0; $i < count($data); $i++)
                      <tr>
                        <th scope="row">{{ $i + 1 }}</th>
                        <td>{{ $data[$i]->TenLoaiSanPham}}</td>
                        <td>{{ $data[$i]->SlugLoaiSanPham}}</td>
                        <td>{{ $data[$i]->TinhTrang}}</td>
                        <td>{{ $data[$i]->NgayTao}}</td>
                        <td>
                            <span class="table-remove">
                                <button type="button" class="btn iq-bg-success btn-rounded btn-sm my-0">Remove</button>
                            </span>
                            <span class="table-remove">
                                <button type="button" class="btn iq-bg-danger btn-rounded btn-sm my-0">Remove</button>
                            </span>
                        </td>
                      </tr>
                      @endfor --}}

                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection
