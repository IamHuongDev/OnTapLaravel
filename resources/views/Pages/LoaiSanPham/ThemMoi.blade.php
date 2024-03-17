@extends('Master')

@section('content')
{{-- {{ dd($data)}} --}}
    <div class="row">
        <div class="col-md-4">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Thêm mới loại sản phẩm</h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <p>Thông tin sản phẩm bạn cần thêm mới</p>
                    @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                    @endif
                  <form action="/loai-san-pham/create" method="POST">
                    @csrf
                     <div class="form-group">
                        <label >Tên loại sản phấm: </label>
                        <input type="text" class="form-control" name="TenLoaiSanPham" placeholder="Mời bạn nhập tên loại sản phẩm">
                     </div>
                     <div class="form-group">
                        <label >Trình trạng</label>
                        <select class="custom-select" name="TinhTrang">
                          <option value=1>Hoạt động</option>
                          <option value=0>Dừng hoạt động</option>
                        </select>
                      </div>

                     <button type="submit" class="btn btn-primary">Submit</button>
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
                        <th scope="col">#</th>
                        <th scope="col">Tên loại sản phẩm</th>
                        <th scope="col">Slug sản phẩm</th>
                        <th scope="col">Tình trạng</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $key => $value)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $value->TenLoaiSanPham}}</td>
                            <td>{{ $value->SlugLoaiSanPham}}</td>
                            <td>{{ $value->TinhTrang}}</td>
                            <td>{{ $value->NgayTao}}</td>
                            <td>

                              <a href="/loai-san-pham/delete/{{$value->id}}">Delete</a>
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
