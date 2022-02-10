@extends('layouts.back.master')
@section('content')

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>
                Ekip Kayıtları girişi
            </h2>
            <a href="{{ route('index') }}" target="_blank" class="btn btn-info">Websiteye gözat</a>
        </div>

        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            @endforeach
        @endif

        <div class="form-gorup">
            <form action="{{ route('admin.professionCreate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-2">
                    <input type="text" name="fullname" id="" class="form-control text-white bg-dark border-warning" value="{{ old('fullname') }}"  placeholder="Ad soyad bilgilerini giriniz."/>
                </div>
                <div class="input-group mb-2">
                    <input type="text" name="profession" id="" class="form-control text-white bg-dark border-warning" value="{{ old('profession') }}"  placeholder="Mesleğini giriniz."/>
                </div>
                <div class="input-group mb-2">
                    <input type="text" name="job" id="" class="form-control text-white bg-dark border-warning" value="{{ old('job') }}"  placeholder="Görevini belirtiniz."/>
                </div>
                <div class="pb-3 mb-2">
                    <input type="file" class=" btn btn-outline-secondary" name="image" id="" />
                </div>
                <div class="button-group mb-2">
                    <button type="submit" class="btn btn-success btn-block">Ekle</button>
                </div>
            </form>
        </div>

        <hr>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ad Soyad</th>
                    <th scope="col">Fotoğraf</th>
                    <th scope="col">Meslek</th>
                    <th scope="col">Görevi</th>
                    <th scope="col">İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($person as  $persons)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $persons->fullname }}</td>
                    <td>
                        <img src="{{ $persons->image }}" class="rounded" width="50px" alt="Resim yok" srcset=""/>
                    </td>
                    <td>{{ $persons->profession }}</td>
                    <td>{{ $persons->job }}</td>
                    <td>
                        <a href="{{ route('admin.professionUpdate',$persons->id) }}" class="btn btn-outline-info">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{ route('admin.professionDelete',$persons->id) }}" class="btn btn-outline-danger">
                            <i class="fa fa-user-slash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        

    </div>
</div>
@endsection