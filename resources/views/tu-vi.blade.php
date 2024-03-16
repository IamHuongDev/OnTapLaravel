<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


      <div class="container">
        <div class="row mt-5">
          <form action="/than-so-hoc" method="post">
            @csrf
          <div class="col-md-4">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Ngày sinh</span>
              <input type="date" name="ngaysinh" class="form-control" placeholder="Mời bạn nhập ngày sinh" >

              <button type="submit" class="btn btn-success">Xem thần số học</button>

          </div>
        </form>
          </div>
            <form action="/tu-vi-new" method="post">
                @csrf
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                    <input type="text" name="hovaten" class="form-control" placeholder="Mời bạn nhập họ và tên" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">&nbsp;Year &nbsp;</span>
                    <input type="text" name="namsinh" min="1900" max="2050" class="form-control" placeholder="Mời bạn nhận vào năm sinh" required >
                </div>

                <button type="submit" class="btn btn-success">Xem tử vi</button>
            </div>
            </form>

            @if (isset($fullname) && isset($canChi))
            <div class="col-md-8">
                <h3 class="text-center">Tử vi của bạn</h3>

                <p><b>Chào bạn,</b>{{$fullname}}</p>
                <p><b>Tuổi của bạn là:</b>{{$canChi}}</p>

                <img src="../12ConGiap/{{$hinh}}.jpg" class="img-thumbnail">
            </div>
            @endif
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
