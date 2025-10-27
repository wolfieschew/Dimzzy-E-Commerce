<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <title>Dimzzy</title>
</head>

<body>
    <div class="topbar">
        <marquee direction="left" loop="" behavior=scroll class="marque" bgcolor="#000000">Dimsum + Keju = Dimzzy!  
        Setiap Gigitan Lumer, Setiap Suapan Bikin Nagih!</marquee>
    </div>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                        <div class="container">
                            <a class="navbar-brand" href="#">
                                <h1 class="logo">Dimzzy <span class="clrchange">.</span></h1>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">Tentang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#product">Produk</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#review">Tim Dimzzy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Hubungi Kami</a>
                                    </li>
                                </ul>

                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa-solid fa-heart"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa-solid fa-user"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

        </div>
    </header>

    <section class="section1" id="top">
        <div class="container">
            <div class="row" data-aos="fade-right">
                <div class="col-sm-12">
                    <h1>Dimsum + Keju = Dimzzy!</h1>
                    <h2>Goreng, Leleh, Mantap!</h2>
                    <p>Dimsum goreng keju yang renyah di luar, meleleh di dalam. Pesan sekarang dan rasakan kenikmatannya!</p>
                    <a href="#" class="links">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section2" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" data-aos="fade-down">
                    <h1 class="mainheading"><span class="clrchange">Tentang</span> Dimzzy</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" data-aos="fade-right">
                    <img src="./assets/Dimzzy Goreng.jpg" alt="Intro Image" id="img-1">
                </div>
                <div class="col-sm-6" data-aos="fade-left">
                    <h2>Kenapa Harus Cobain Dimzzy</h2>
                    <p>Di Dimzzy, kami menyajikan dimsum goreng keju yang lezat dan menggoda. Dari kampus untuk kampus, setiap gigitan penuh rasa dan keju meleleh yang bikin nagih.</p>
                    <a href="#" class="links">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section4" id="product">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" data-aos="fade-down">
                    <h1>Latest <span class="clrchange">Products</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4" data-aos="fade-right">
                    <div class="innerproductsection">
                        <img src="./assets/Dimzzy Goreng.jpg" alt="Logo Image" />
                        <div class="cartcontainer">
                            <button class="wishlist"><i class="fa-solid fa-heart"></i></button>
                            <button class="btn">Tambah ke Keranjang <i class="fa-solid fa-cart-plus"></i></button>
                            <button class="share"><i class="fa-solid fa-share"></i></button>
                        </div>
                        <h2>Dimzzy</h2>
                        <h1 class="price"><span class="clrchange">Rp 5.000</span></h1>
                    </div>
                </div>
                <div class="col-sm-4" data-aos="fade-up">
                    <div class="innerproductsection">
                        <img src="./assets/Boba.jpg" alt="Logo Image" />
                        <div class="cartcontainer">
                            <button class="wishlist"><i class="fa-solid fa-heart"></i></button>
                            <button class="btn">Tambah ke Keranjang <i class="fa-solid fa-cart-plus"></i></button>
                            <button class="share"><i class="fa-solid fa-share"></i></button>
                        </div>

                        <h2>Boba Squash</h2>
                        <h1 class="price"><span class="clrchange">Rp 15.000</span></h1>
                    </div>
                </div>
                <div class="col-sm-4" data-aos="fade-left">
                    <div class="innerproductsection">
                        <img src="./assets/Boba.jpg" alt="Logo Image" />
                        <div class="cartcontainer">
                            <button class="wishlist"><i class="fa-solid fa-heart"></i></button>
                            <button class="btn">Tambah ke Keranjang <i class="fa-solid fa-cart-plus"></i></button>
                            <button class="share"><i class="fa-solid fa-share"></i></button>
                        </div>

                        <h2>Paket Hemat</h2>
                        <h1 class="price"><span class="clrchange">Rp 17.000</span></h1>
                    </div>
                </div>
            </div>
    </section>

    <section class="section5" id="review">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" data-aos="fade-down">
                    <h1 class="mainheading">Tim <span class="clrchange">Dimzzy</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="owl-carousel client-testimonial-carousel">
                        <div class="single-testimonial-item">
                            <div class="reviewinner">
                                <ul class="ratings">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p>Memimpin Dimzzy untuk menghadirkan dimsum goreng keju yang selalu fresh, lezat, dan bikin ketagihan.</p>
                                <div class="txtwithicon">
                                    <div class="iconcol">
                                        <img src="./assets/testi1.png" alt="" class="testimg1">
                                    </div>
                                    <div class="txtcol">
                                        <h1>Alfansuri Akhyar</h1>
                                        <p>CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-item">
                            <div class="reviewinner">

                                <ul class="ratings">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p>Memastikan setiap orang tahu Dimzzy itu enak dan selalu bikin penasaran lewat strategi marketing kreatif.</p>
                                <div class="txtwithicon">
                                    <div class="iconcol">
                                        <img src="./assets/test3.png" alt="" class="testimg1">
                                    </div>
                                    <div class="txtcol">
                                        <h1>Margaretha Gratia</h1>
                                        <p>CMO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-item">
                            <div class="reviewinner">

                                <ul class="ratings">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p>Bertanggung jawab memastikan setiap produk Dimzzy punya kualitas terbaik dan konsisten di setiap gigitan.</p>
                                <div class="txtwithicon">
                                    <div class="iconcol">
                                        <img src="./assets/testi4.png" alt="" class="testimg1">
                                    </div>
                                    <div class="txtcol">
                                        <h1>Najma</h1>
                                        <p>CPO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-item">
                            <div class="reviewinner">

                                <ul class="ratings">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p>Mengatur desain & konsep Dimzzy agar tampil menarik, cozy, dan mudah diingat pelanggan </p>
                                <div class="txtwithicon">
                                    <div class="iconcol">
                                        <img src="./assets/testi2.png" alt="" class="testimg1">
                                    </div>
                                    <div class="txtcol">
                                        <h1>Nasywa Azizah K</h1>
                                        <p>CPO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-item">
                            <div class="reviewinner">

                                <ul class="ratings">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p>Bekerja menjaga kepuasan pelanggan dan komunikasi agar pengalaman menikmati Dimzzy selalu menyenangkan.</p>
                                <div class="txtwithicon">
                                    <div class="iconcol">
                                        <img src="./assets/test3.png" alt="" class="testimg1">
                                    </div>
                                    <div class="txtcol">
                                        <h1>Jasmine Xaviera</h1>
                                        <p>CCO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section6" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" data-aos="fade-down">
                    <h1 class="mainheading">
                        <span class="clrchange">
                            Hubungi
                        </span>
                        Kami
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" data-aos="fade-right">
                    <form method="post" action="#">
                        <input type="text" placeholder="nama">
                        <input type="email" placeholder="email">
                        <input type="number" placeholder="nomor telp">
                        <textarea name="message" id="#" placeholder="pesanan" cols="30" rows="10"></textarea>
                        <button class="links">Kirim Pesan</button>
                    </form>
                </div>
                <div class="col-sm-6" data-aos="fade-left">
                    <img src="./assets/Dimzzy.jpg" alt="Contact img" class="contactimg">
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
            <div class="row copy-right">
                <div class="col-sm-12">
                    <p>Dimzzy</span> | 2025</p>
                    <div class="topbtn">
                        <a href="#top" class="topbtninner"><i class="fa-solid fa-arrow-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="./app.js" defer></script>

</body>

</html>