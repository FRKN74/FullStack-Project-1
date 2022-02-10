@extends('layouts.back.master')

@section('content')
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>
                Ürün giriş
            </h2>
            <a href="{{ route('index') }}" target="_blank" class="btn btn-info">Sayfaya git </a>                  
        </div>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            @endforeach
        @endif

        <div class="form-gorup">
            <form action="{{ route('admin.productPost') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-2">
                    <input type="text" name="product" id="" class="form-control text-white bg-dark border-warning"  placeholder="Ürün adı giriniz..."/>
                </div>
                <div class="input-group mb-2">
                    <input type="number" name="stock" id="" class="form-control text-white bg-dark border-warning"  placeholder="Kaç adet bulunuyor."/>
                </div>
                <div class="pb-3 mb-2">
                    <input type="file"class=" btn btn-outline-secondary" name="image" id="" />
                </div>
                <div class="button-group mb-2">
                    <button type="submit" class="btn btn-success btn-block">Ekle</button>
                </div>
            </form>
        </div>
    </div>

    <hr>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ürün adı</th>
                <th scope="col">Fotoğraf</th>
                <th scope="col">Stok</th>
                <th scope="col">İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as  $products)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $products->productName }}</td>
                <td>
                    <img src="{{ $products->image }}" class="rounded" width="50px" alt="Resim yok" srcset=""/>
                </td>
                <td class="text-center">{{ $products->stock }}</td>
                <td class="text-center">
                    <a href="{{ route('admin.productUpdate',$products->id) }}" class="btn btn-outline-info">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="{{ route('admin.productDelete',$products->id) }}" class="btn btn-outline-danger">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    

</div>
@endsection