@extends('layouts.back.master')

@section('content')
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>
                Slider resim ekle
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
            <form action="{{ route('admin.sliderCreate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-2">
                    <input type="text" name="name" id="" class="form-control text-white bg-dark border-warning"  placeholder="Fotoğraf adı giriniz..."/>
                </div>
                <div class="pb-3 mb-2">
                    <input type="file" class=" btn btn-outline-secondary" name="image" id="imageFile" />

                </div>
                <div class="button-group mb-2">
                    <button type="submit" class="btn btn-success btn-block">Ekle</button>
                </div>
            </form>
        </div>
    </div>

    <hr>
    <table class="table table-dark rounded">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fotoğraf</th>
                <th scope="col">Aktif/Pasif</th>
                <th scope="col">İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($slider as $item)
                
            
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>
                    <img src="{{ $item->image }}" class="rounded" width="50px" alt="Resim yok" srcset=""/>
                </td>
                <td>
                    <input type="checkbox" class="switch" slider-id="{{ $item->id }}" data-toggle="toggle" data-on="Aktif" data-off="Pasif" 
                    data-onstyle="outline-success" data-offstyle="outline-danger"
                    @if ($item->status == 1 )checked  @endif>    
                </td>
                <td class="text-center">
                    <a href="{{ route('admin.sliderUpdate',$item->id) }}" class="btn btn-outline-info">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="{{ route('admin.sliderDelete',$item->id) }}" class="btn btn-outline-danger">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    

</div>
@endsection