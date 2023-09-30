<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-5">Data Pasien</h1>

    <div class="container">
        <a href="/tambahpasien" class="btn btn-success">Tambah +</a>
        
        <div class="row">   
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Nomor Telepon/Handphone</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th scope="col">Pada</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($data as $row)
                  <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->Nama }}</td>
                    <td>{{ $row->JenisKelamin }}</td>
                    <td>{{ $row->NomorTelepon }}</td> 
                    <td>{{ $row->created_at->format('D M Y')}}</td>   
                    <td>{{ $row->created_at->diffForHumans()}}</td>               
                    <td>
                    <button type="button" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                    </td>
                    </tr>

                  @endforeach       
                    
                </tbody>
            </table>
        </div>
        @if ($message = Session::get('sukses'))
          <div class="alert alert-warning" role="alert">
              {{ $message }}
          </div>                   
        @endif
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html> 