<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit data produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h3>edit data produk</h3>
    <form action="{{route('produk.update', $produk->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{$produk->nama}}">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">harga</label>
            <input type="text" name="harga" class="form-control" id="harga" value="{{$produk->harga}}">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{$produk->deskripsi}}">
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">gambar</label>
            <input type="image" name="gambar" class="form-control" id="gambar" value="{{$produk->gambar}}">
        </div>
        <button type="submit" class="btn btn-primary">Update Produk</button>
    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>