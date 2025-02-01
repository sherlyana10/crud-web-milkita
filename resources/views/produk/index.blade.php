<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">MILKITA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">BERANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">TABLE DATA</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </head>
  <body>
    <div class="container">
    @if (session('succsess'))
        <div class="alert alert-success mt-3">
            {{session('succsess')}}
        </div>
        @endif
      </div>

      <div class=" container my-4">
      <img src="{{ asset('assets/beranda.jpg')}}" alt="gambar beranda" class="img-fluid">
      </div>

      <div class="d-flex justify-content-between align-items-center">
        <center><h2>Table Data Produk</h2></center>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Tambah produk
        </button>
      </div>
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('produk.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">NAMA</label>
            <input type="harga"  name="nama" class="form-control" id="exampleInputPassword1" aria-describedby="nama">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">HARGA</label>
            <input type="harga" name="harga" class="form-control" id="exampleInputPassword1" aria-describedby="harga">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">DESKRIPSI</label>
            <input type="deskripsi" name="deskripsi" class="form-control" id="exampleInputPassword1" aria-describedby="deskripsi">
          </div>  
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">GAMBAR</label>
            <input type="file" name="gambar" class="form-control" id="exampleInputPassword1" aria-describedby="gambar">
          </div>       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>
        <button type="submit" class="btn btn-primary">kirim data baru</button>
      </div>
    </div>
  </div>
</div>
</form>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA</th>
            <th scope="col">HARGA</th>
            <th scope="col">DESKRIPSI</th>
            <th scope="col">GAMBAR</th>
            <th scope="col">AKSI</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($masuk as $no)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>  
                <td>{{$no->nama}}</td>
                <td>{{$no->harga}}</td>
                <td>{{$no->deskripsi}}</td>
                <td><img src="{{ asset('storage/'. $no->gambar)}}" width="100"></td>
                <td>
                  <a href="{{route('produk.edit', $no->id)}}" class="btn btn-primary btn-sm">Edit</a>
                  <form action="{{route('produk.destroy', $no->id)}}" method="POST" style="display: inline-block">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-primary btn-sm">Hapus</button>
                </form>
                </td>
              </tr>      
            @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>