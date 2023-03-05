<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('databases.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA USAHA</label>
                                <input type="text" class="form-control @error('nama_usaha') is-invalid @enderror" name="namaUsaha" value="{{ old('nama_usaha') }}" placeholder="Masukkan Nama Usaha">
                            
                                <!-- error message untuk title -->
                                @error('nama_usaha')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA PEMILIK</label>
                                <input type="text" class="form-control @error('nama_pemilik') is-invalid @enderror" name="namaPemilik" value="{{ old('nama_pemilik') }}" placeholder="Masukkan Nama Pemilik">
                            
                                <!-- error message untuk title -->
                                @error('nama_pemilik')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TELEPON</label>
                                <input type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{ old('telepon') }}" placeholder="Masukkan Telepon">
                            
                                <!-- error message untuk title -->
                                @error('telepon')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">EMAIL</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">
                            
                                <!-- error message untuk title -->
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">ALAMAT</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat">
                            
                                <!-- error message untuk title -->
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">PRODUK</label>
                                <input type="text" class="form-control @error('produk') is-invalid @enderror" name="produk" value="{{ old('produk') }}" placeholder="Masukkan Produk">
                            
                                <!-- error message untuk title -->
                                @error('produk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">OMZET</label>
                                    <select name="omzet" id="omzet" class="form-control">
                                        <option value="--">Pilih Omzet</option>
                                        @foreach($omzets as $k)
                                        <option value="{{$k->id}}">{{$k->jenis}}</option>
                                        @endforeach
                                    </select>
                            
                                <!-- error message untuk title -->
                                @error('omzet')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">IJIN</label>
                                    <select name="ijin" id="ijin" class="form-control">
                                        <option value="--">Pilih Ijin</option>
                                        @foreach($ijins as $k)
                                        <option value="{{$k->id}}">{{$k->ijinusaha}}</option>
                                        @endforeach
                                    </select>
                            
                                <!-- error message untuk title -->
                                @error('ijin')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            

                            <div class="form-group">
                                <label class="font-weight-bold">Kapanewons</label>
                                    <select name="kapanewon" id="kapanewon" class="form-control">
                                        <option value="--">Pilih Kapanewons</option>
                                        @foreach($kapanewons as $k)
                                        <option value="{{$k->id}}">{{$k->kapanewon}}</option>
                                        @endforeach
                                    </select>
                            
                                <!-- error message untuk title -->
                                @error('kapanewon')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JUMLAH TENAGA KERJA</label>
                                <input type="text" class="form-control @error('jtk') is-invalid @enderror" name="jtk" value="{{ old('jtk') }}" placeholder="Masukkan Jumlah Tenaga Kerja">
                            
                                <!-- error message untuk title -->
                                @error('jtk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">PELATIHAN/PAMERAN</label>
                                <input type="text" class="form-control @error('pelpam') is-invalid @enderror" name="pelpam" value="{{ old('pelpam') }}" placeholder="Masukkan Pelatihan/Pameran">
                            
                                <!-- error message untuk title -->
                                @error('pelpam')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JUMLAH</label>
                                <input type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlah') }}" placeholder="Masukkan Jumlah">
                            
                                <!-- error message untuk title -->
                                @error('jumlah')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">DESKRIPSI</label>
                                <input type="text" class="form-control @error('desk') is-invalid @enderror" name="desk" value="{{ old('desk') }}" placeholder="Masukkan Deskripsi">
                            
                                <!-- error message untuk title -->
                                @error('desk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">MASALAH</label>
                                <input type="text" class="form-control @error('masalah') is-invalid @enderror" name="masalah" value="{{ old('masalah') }}" placeholder="Masukkan Masalah">
                            
                                <!-- error message untuk title -->
                                @error('masalah')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">KETERANGAN</label>
                                <input type="text" class="form-control @error('ket') is-invalid @enderror" name="ket" value="{{ old('ket') }}" placeholder="Masukkan Keterangan">
                            
                                <!-- error message untuk title -->
                                @error('ket')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>