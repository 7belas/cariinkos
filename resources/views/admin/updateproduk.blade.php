@extends('layouts.admin')

@section('title', 'Update Data Produk')

@section('content')
<div class="card">
    <div class="card-header">Update Data Produk</div>
        <form action="{{ url('/produk/'.$produk->produk_id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-6 col-xl-5">
                        <label for="nama">Nama Produk</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-white">
                                    <i class="fas fa-address-card"></i>
                                </span>
                            </div>
                            <input required class="form-control" type="text" id="nama" name="nama" value="{{ $produk->produk_nama }}" />
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-6 col-xl-5">
                        <label for="kategori">Kategori Produk</label>
                        <div class="input-group">
                            <select required class="form-control" name="kategori" id="kategori">
                                <option disabled selected>--Pilih Kategori Produk--</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->kategori_id }}">{{ $item->kategori_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-6 col-xl-5">
                        <label for="kemasan">Kemasan Produk</label>
                        <div class="input-group">
                            <select required class="form-control" name="kemasan" id="kemasan">
                                <option disabled selected>--Pilih Kategori Kemasan Produk--</option>
                                @foreach ($kemasan as $item)
                                    <option value="{{ $item->kemasan_id }}">{{ $item->kemasan_kode }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-6 col-xl-5">
                        <label for="harga">Harga Produk</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-white">
                                    Rp.
                                </span>
                            </div>
                            <input min="0" step="2500" required class="form-control" type="number" id="harga" name="harga" value="{{ $produk->produk_harga }}"/>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-6 col-xl-5">
                        <label for="stok">Stok Produk</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-white">
                                    Qty
                                </span>
                            </div>
                            <input min="0" step="1" required class="form-control" type="number" id="stok" name="stok" value="{{ $produk->produk_stok }}"/>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-6 col-xl-5">
                        <label for="deskripsi">Deskripsi Produk (Optional)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-white">
                                    &nbsp;
                                </span>
                            </div>
                            <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $produk->produk_deskripsi }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-6 col-xl-5">
                        <label for="gambar">Gambar Produk</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-white">
                                    &nbsp;
                                </span>
                            </div>
                            <input accept="image/*" class="form-control" type="file" id="gambar" name="gambar" />
                        </div>
                        <p class="text-danger">{{ $errors->first('gambar') }}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    <span>Simpan Perubahan</span>
                </button>
                <button type="reset" class="btn btn-danger">
                    <i class="fas fa-trash"></i>
                    <span>Bersihkan Form</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#kategori').val('{{ $produk->produk_kategori }}')
        $('#kemasan').val('{{ $produk->produk_kemasan }}')
    })
</script>
@endsection
