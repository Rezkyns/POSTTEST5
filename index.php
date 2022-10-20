<?php
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM web");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikan Cupang</title>
    <link rel="stylesheet" href="posttest 5.CSS">           
    </style>
</head>
<body>
    <nav>
        <div class="layar-dalam">
            <diV class="logo">
                <button id="btn-info">press</button>
                <a><img src="ikan cupang.jpg"class="putih"></a>
                <p id="info" style="display: none;">ini adalah logo kami</p>
            </diV>
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <span class="garis"></span>
                    <span class="garis"></span>
                    <span class="garis"></span>
                </a>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#aboutme">About Me</a></li>
                    <li><a href="#support">Support</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <button class="tombol_terang" id="a">Select Mode</button>
            </div>

        </div>
    </nav>
    <div class="layar-penuh">
        <header id="home">

            <div class="overlay"></div>
            <video width="100%"autoplay muted loop>
                <source src="video ikan cupang.mp4" type="video/mp4" />
            </video>
            <div class="intro">
                <h3>Ikan Hias Jenis Cupang</h3>
                <p>
                    Tampilan Beberapa Gambar Ikan Cupang Serta Pengenalan Ikan Cupang
                </p>
                <p>
                    <a href="tabel.php" class="tombol">Input Data</a>
                </p>
            </div>
        </header>
        <main>
            <section id="aboutme">
                <div class="layar-dalam">
                    <h3>About Me</h3>
                    <p class="ringkasan">
                        Biodata Saya :
                    </p>
                    <div class="konten-isi">
                        <p>
                            Nama : Rezky  Nur Sya'ban <br>
                            Nim  : 2109106009 <br>
                            Prodi: Informatika A 21 <br>
                            Alamat Asal : Muara jawa Handil 2
                        </p>
                    </div>
                </div>
            </section>
            <section class="abuabu" id="support">
                <div class="layar-dalam support">
                    <div>
                        <img src="cupang.jpg">
                        <h6>Tampilan</h6>
                        <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, eveniet incidunt cum eius optio praesentium.
                        </p>
                    </div>
                    <div>
                        <img src="wadah ikan.jpg">
                        <h6>Support Me</h6>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam accusamus quam beatae molestiae ab corporis.
                        </p>
                    </div>
                    <div>
                        <img src="pakan ikan cupang.jpg">
                        <h6>Sponsor</h6>
                        <p>
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, dolores incidunt voluptates facere explicabo facilis!
                        </p>
                    </div>
                </div>
            </section>
            <section id="gallery" >
                <div><img src="cupang 1.jpg" /></div>
                <div><img src="cupang 2.jpg" /></div>
                <div><img src="cupang 3.jpg" /></div>
                <div><img src="cupang 4.jpg" /></div>
                <div><img src="cupang 5.jpg" /></div>
                <div><img src="cupang 6.jpg" /></div>
                <div><img src="cupang 7.jpg" /></div>
                <div><img src="cupang 8.jpg" /></div>
            </section>
            <section class="quote">
                <div class="layar-dalam">
                    <p>ikan cupang adalah salah satu jenis ikan hias, ikan cupang juga memiliki karakteristik dan keunggulan karena bisa beradu dengan sesama ikan cupang.
                        ikan cupang juga banyak di minati karena memiliki buntut yang cantik.
                    </p>
                </div>
            </section>
        </main>
        <footer id="contact">
            <div class="layar-dalam">
                <div>
                    <h5>Info</h5>
                    Website ini berisi pengenalan tentang ikan cupang beserta gambar
                </div>
                <div>
                    <h5>Contact</h5>
                    Hubungi Kontak Dibawah Ini Untuk Info Lebih Lanjut :
                    085162958971
                </div>
                <div>
                    <h5>Email</h5>
                    Jika Anda Ingin Menghubungi Melalui E mail, Berikut Saya Sertakan :
                    rezkysya7@gmail.com
                </div>
            </div>
            <div class="layar-dalam">
                <div class="copyright">&copy;
                2021  Ikan Hias jenis Cupang  
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
    </body>
</html>
    