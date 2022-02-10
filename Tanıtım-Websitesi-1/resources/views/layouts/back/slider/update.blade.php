@extends('layouts.back.master')

@section('content')
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>
                Slider resim güncelle
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

        @foreach ($slider as $item)
        <div class="form-gorup">
            <form action="{{ route('admin.sliderUpdatePost',$item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-2">
                    <input type="text" name="name" id="" class="form-control text-white bg-dark border-warning" value="{{ $item->name }}"  placeholder="Fotoğraf adı giriniz..."/>
                </div>
                <div class="pb-3 mb-2">
                    <img src="{{ asset($item->image) }}" class="w-25" alt="" srcset=""><br> <br>
                    <input type="file" class=" btn btn-outline-secondary" name="image" id="imageFile" />
                </div>
                <div class="button-group mb-2">
                    <button type="submit" class="btn btn-success btn-block">Güncelle</button>
                </div>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection