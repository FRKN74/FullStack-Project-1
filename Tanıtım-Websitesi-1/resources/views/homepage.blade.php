@extends('layouts.front.master')

@section('content')
    <!-- Container -->
    <div class="container">
        <label class="lblCenter">Çalışmalarımızdan bazı görüntüler</label>
        <section id="slider" class="slider mt-5">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($sliders as $slider)
                        @if ($slider->status == 1)
                        <div class="swiper-slide"><img src="{{ asset($slider->image) }}" alt="" srcset=""></div>
                        @endif
                    @endforeach
                    
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <section class="fadein">
            <div class="row mt-5 sectionOne">
                <div class="col-md-8 content-left">
                    <img src="{{ asset('template/image/wp2.jpg') }}" class="mt-3 w-100 img-responsive rounded" height="700px" alt="resim yok">
                </div>
                <div class="col-md-4 content-right h-100">
                    <label class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis reiciendis assumenda doloribus facere illo. Rem modi ipsum, dolore quidem esse nam delectus possimus aperiam, quod architecto, in voluptas sed ducimus?
                    Incidunt, sit ut placeat esse animi nesciunt? Sapiente voluptatibus possimus blanditiis ipsam sunt minima dolorum molestiae doloremque fuga cumque aliquam labore dolores, voluptatem architecto incidunt cum a totam illum ipsa.
                    Ex laboriosam qui illum consequatur iusto voluptas ut, harum repudiandae a perferendis voluptatem voluptatibus sit dignissimos maxime! Vitae voluptas at nihil ut ratione repudiandae? Ad quia expedita voluptates impedit sapiente.
                    </label>
                </div>
            </div>
        </section>

        <section class="fadein">
            <label class="lblCenter">Ürünler</label>

            <div class="row sectionTwo mt-3 position-relative">
                <div class="col-md-12 products justify-content-center align-content-center d-flex flex-wrap">
                    @foreach ($products as $product )
                    <div id="product-content" class="product-content position-relative m-2 ">
                        <img src="{{ $product->image}}" class="mt-1 mb-1 img-responsive rounded" width="300px" height="300px" alt="resim yok">
                        <label class="lblCenter2">{{ $product->productName }}</label>
                        <label class="lblCenter2">
                            Stok:
                            <small class="text-muted">{{ $product->stock }}</small>
                        </label>
                    </div>
                    @endforeach 
                </div>
            </div>
        </section>


        <section class="fadein">
            <div class="row mt-5 sectionOne">
                <div class="col-md-8 content-left">
                    <label class="text-center mt-5"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti non voluptatibus quaerat fugiat! Perspiciatis, soluta doloribus porro fuga iusto recusandae, autem ratione hic unde eaque, atque eveniet ipsum maiores quibusdam.
                    Veritatis itaque iusto ex totam similique. Animi alias vero praesentium nostrum, quaerat hic aliquam, ex deleniti odit quam, quidem quibusdam. Ipsam, sed animi. Quo nulla nisi quos a inventore deleniti?</label>
                </div>
                <div class="col-md-4 content-right h-100">
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </div>
                            <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>
                            <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="abouts fadein">
            <button id="btnAbouts" class="btn btn-success btn-block mt-5">Neler yapıyoruz?(TIKLA)</button>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <label class="lblCenter2">Misyonumuz</label>
                            </div>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, id recusandae eius esse cumque iure quisquam ipsam quo dolore quaerat repellendus, alias omnis obcaecati sapiente animi hic voluptatibus adipisci dolores!
                        </div>
                    </div>
                    <div class="card mt-1">
                        <div class="card-header">
                            <div class="card-title">
                                <label class="lblCenter2">Vizyonumuz</label>
                            </div>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, id recusandae eius esse cumque iure quisquam ipsam quo dolore quaerat repellendus, alias omnis obcaecati sapiente animi hic voluptatibus adipisci dolores!
                        </div>
                    </div>
                    <div class="card mt-1">
                        <div class="card-header">
                            <div class="card-title">
                                <label class="lblCenter2">Hedefimiz</label>
                            </div>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, id recusandae eius esse cumque iure quisquam ipsam quo dolore quaerat repellendus, alias omnis obcaecati sapiente animi hic voluptatibus adipisci dolores!
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="employees fadein">
            <label class="lblCenter mt-5">Ekip arkadaşlarımız</label>
            <div class="row justify-content-center">

                @foreach ($person as $persons)
                <div class="col-md-3 m-2 person mr-3">
                    <img src="{{ $persons->image }}" class="w-100 rounded mt-2" alt="resim yok" srcset="">
                    <label class="lblPerson">{{ $persons->fullname }}</label>
                    <label class="lblPersonJob">{{ $persons->profession }}/{{ $persons->job }}</label>
                </div>
                @endforeach
            </div>
        </section>
    </div> 
@endsection