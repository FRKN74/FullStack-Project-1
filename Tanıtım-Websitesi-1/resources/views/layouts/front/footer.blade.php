<footer class="mt-5" style="background:black">
    <div class="footer">
        <div class="row">
            <div class="col-md-6 text-center mt-5">
                <div class="social-media">
                    <a href="#">
                        <i class="fab fa-instagram fa-3x"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-github fa-3x"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin fa-3x"></i>
                    </a>
                </div>
                <hr>
                <label class="footerText">Adres: Merkez/Bartın</label>
                <br>
                <label class="footerText">Telefon: +955 555 55 55</label>
            </div>
            <div class="col-md-6 mt-3 justify-content-center align-content-center d-flex">
                <form action="#">
                    <div class="row">
                        <div class="input-group  mb-2 mr-1 ">
                            <input type="text" class="form-control border-primary" placeholder="Ad Soyad">
                        </div>
                        <div class="input-group  mb-2">
                            <input type="text" class="form-control border-primary" placeholder="Konu">
                        </div>
                    </div>
                    <div class="input-group text-center">
                        <input type="text" class="form-control border-primary" placeholder="Konu">
                    </div>
                    <textarea name="" id="" class="form-control border-primary mt-2 " rows="2" placeholder="Açıklama"></textarea>

                    <button type="submit" class="btn btn-outline-success mt-2">Gönder</button>
                </form>
            </div>
    </div>
</footer>
<script src="{{ asset('template/js/app.js') }}"></script>
<!-- Swipper.js -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    });
</script>
<script>
    var swiper = new Swiper(".mySwiper2", {
    effect: "cube",
    grabCursor: true,
    cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    });
</script>
</body>
</html>