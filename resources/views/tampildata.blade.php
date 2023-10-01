<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-5">Edit Data Pasien</h1>

    <div class="container">
        
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card">
              <div class="cardbody">
                <form style="margin: 15px;" action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="mb-3">
                      <label for="exampleInputEmail" class="form-label">Nama Lengkap</label>
                      <input type="text" name="Nama" class="form-control" id="exampleInputEmail" 
                      aria-describedby="emailHelp" value="{{ $data->Nama }}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="JenisKelamin" aria-label="Default select example">
                      <option selected>{{ $data->JenisKelamin }}</option>
                      <option value="1">Laki-Laki</option>
                      <option value="2">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail" class="form-label">Nomor Telepon/Handphone</label>
                  <input type="number" name="NomorTelepon" class="form-control" id="exampleInputEmail" 
                  aria-describedby="emailHelp" value="{{ $data->NomorTelepon }}">
              </div>
              
                  <div class="mb-3">
                      <button type="submit" class="btn btn-primary">Kirim</button>
                  </div>
              </form>
                  
              </div>
            </div>

          </div>
           
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html> 