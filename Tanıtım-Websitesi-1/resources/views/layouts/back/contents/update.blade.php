@extends('layouts.back.master')

@section('content')
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>
                Ürün giriş
            </h2>
            <a href="#" class="btn btn-info">Sayfaya git </a>                  
        </div>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            @endforeach
        @endif

        @foreach ($products as $product)
        <div class="form-gorup">
            <form action="{{ route('admin.productUpdatePost',$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-2">
                    <input type="text" name="product" id="" class="form-control text-white bg-dark border-warning" value="{{ $product->productName }}" }}  placeholder="Ürün adı giriniz..."/>
                </div>
                <div class="input-group mb-2">
                    <input type="number" name="stock" id="" class="form-control text-white bg-dark border-warning" value="{{ $product->stock }}" }}  placeholder="Kaç adet bulunuyor."/>
                </div>
                <div class="pb-3 mb-2">
                    <img src="{{ asset($product->image) }}" class="w-25" alt="resim yok" srcset="">
                    <br>
                    <br>
                    <input type="file" class=" btn btn-outline-secondary" name="image" id="" />
                </div>
                <div class="button-group mb-2">
                    <button type="submit" class="btn btn-success btn-block">Güncelle</button>
                </div>
            </form>
        </div>
        @endforeach
    </div>
    <hr>
</div>
@endsection