@extends('Template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Product
                    </div>
                    <div class="card-body">
                        <div class="from-group">
                            <label for="" class="control-label">Nama</label> <br>
                            <input type="text" class="from-control" name="nama">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="from-group">
                            <label for="" class="control-label">Harga</label> <br>
                            <input type="text" class="from-control" name="harga">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="from-group">
                            <label for="" class="control-label">Berat</label> <br>
                            <input type="text" class="from-control" name="berat">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="from-group">
                            <label for="" class="control-label">Stock</label> <br>
                            <input type="text" class="from-control" name="stock">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="from-group">
                            <label for="" class="control-label">Deskripsi</label> <br>
                            <input type="text" class="from-control" name="deskripsi">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
