@extends('layouts.back.master')
@section('content')

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>
                Kayıt Güncelleme
            </h2>
            <a href="{{ route('index') }}" class="btn btn-info">Websiteye gözat</a>
        </div>

        <div class="form-gorup">
            @foreach ($person as $persons)
            <form action="{{ route('admin.professionUpdatePost',$persons->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-2">
                    <input type="text" name="fullname" id="" class="form-control text-white bg-dark border-warning" value="{{ $persons->fullname }}"  placeholder="Ad soyad bilgilerini giriniz."/>
                </div>
                <div class="input-group mb-2">
                    <input type="text" name="profession" id="" class="form-control text-white bg-dark border-warning" value="{{ $persons->profession}}"  placeholder="Mesleğini giriniz."/>
                </div>
                <div class="input-group mb-2">
                    <input type="text" name="job" id="" class="form-control text-white bg-dark border-warning" value="{{ $persons->job }}"  placeholder="Görevini belirtiniz."/>
                </div>
                <div class="mb-2">
                    <img src="{{ asset($persons->image) }}" class="w-25 rounded" width="50px" alt="Resim yok" srcset=""/>
                    <br>
                    <br>
                    <input type="file" class=" btn btn-outline-secondary" name="image" id="" />
                </div>
                <div class="button-group mb-2">
                    <button type="submit" class="btn btn-success btn-block">Güncelle</button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection