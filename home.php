<?php
session_start();
if ($_SESSION["login"] == false)
    header("Location:login.php");
else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Memleketim</title>

        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/fontawesome.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/bootstrap-customize.css">

        <link rel="stylesheet" href="/css/style.css">


    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-warning shadow fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="home.php">MEMLEKETİM</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Hakkımda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home.php#ozgecmisim">Özgeçmişim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home.php#sehrim">Şehrim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home.php#mirasimiz">Mirasımız</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home.php#iletisim">İletişim</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

    <?php

    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Hoşgeldiniz! </strong>b191210381
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
    ?>

    <div class="container mb-3">
        <div class="profile-container">
            <div class="top-area">
                <img class="profile-bg" src="http://www.eregli.bel.tr/ShowImage.aspx?img=ERegli(2).jpg&w=582&h=327&cr=false" alt="">
            </div>
            <div class="bottom-area">
                <div class="profile-avatar">
                    <img class="profile-img" src="img/pp.jpg">
                </div>
                <div class="text-area">
                    <h1 class="text-warning">Selinnur <b class="text-secondary">GÖL</b></h1>
                    <p>
                        İsmim Selinnur Göl. 24 nisan 1999’da İstanbul’da doğdum.İstanbul’da yaşıyorum.Aslen Konya
                        Ereğliliyim. Bir ablam ve bir abim var..Onlardan farklı okullarda eğit im aldım. Anaokuluna
                        gitmedim bu yüzden ilkokula başlamak için çok heyecanlanırdım. Kemal kaya ilköğretim okuluna
                        başladım ve orada 8 yılımı tamamladım. Ortaokul yıllarımda hep bir müzik aleti çalmak isterken
                        uda başlamaya karar verdim. Birkaç yıl ud eğitimi aldım. Fakat bazı sebeplerden ötürü yarıda
                        bıraktım. Lise hayatım benim için karmaşık bir dönemdi. 3 farklı lise de eğitim aldım. Ve lise
                        hayatımı birincilikle tamamlayıp Yıldız Teknik Üniversitesi Matematik Mühendisliğini kazandım. 2
                        yıl orada eğitim aldıktan sonra bölümümü değiştirerek Sakarya Üniversitesinde Bilgisayar
                        Mühendisliği okumaya karar verdim.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-3" id="ozgecmisim">
        <div class="box">
            <h4 class="text-warning">ÖZGEÇMİŞ</h4>

            <table class="table">
                <thead class="bg-warning text-light">
                    <tr>
                        <th scope="col">Okul Adı</th>
                        <th scope="col">Eğitim Yılları</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sakarya Üniversitesi</td>
                        <td>2019-Günümüz</td>
                    </tr>
                    <tr>
                        <td>Uğur Lisesi</td>
                        <td>2016-2017</td>
                    </tr>
                    <tr>
                        <td>Kemal Kaya İlköğretim Okulu</td>
                        <td>2005-2013</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container mb-3" id="sehrim">
        <div class="box">
            <h4 class="text-warning">ŞEHRİM</h4>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="http://www.eregli.bel.tr/tr-407946456-a407517562/Kwangjin-Parki" target="_blank">
                            <img src="img/kwangjin.jpg" class="d-block w-100">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="http://www.eregli.bel.tr/tr-407946456-a407962410/Ivriz-Kaya-Aniti" target="_blank">
                            <img src="img/ivriz.jpg" class="d-block w-100">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="http://www.eregli.bel.tr/tr-407946456-a407964460/Eregli-Muzesi" target="_blank">
                            <img src="img/muze.jpg" class="d-block w-100">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="http://www.eregli.bel.tr/tr-407946456-a407955056/Ulu-Cami" target="_blank">
                            <img src="img/uluCami.jpg" class="d-block w-100">
                        </a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <br>
            <div class="profile-container h-auto" style="margin: 0;">
                <div class="top-area h-400">
                    <img class="profile-bg" src="img/ivriz.jpg" alt="">
                </div>
                <div class="bottom-area">
                    <div class="text-area text-area-center">
                        <h3 class="text-warning">İvriz Kaya Anıtı</h3>
                        <p>
                            İvriz Kaya Anıtı (Hitit Kabartması) Ereğli ilçemizin 17 km. uzağındaki İvriz Köyü'nde
                            bulunmaktadır. Çay başlangıcının biraz ilerisinde, kaya üzerine kabartma olarak
                            (M.Ö.1180-700) Geç Hitit Çağı’nda yapılmıştır. Tuvana ülkesinin en görkemli krallarından
                            Varpalawas tarafından yaptırılmıştır. XIX.yüzyılda gezginlerin yazıları ile Hititoloji
                            literatürüne girmiştir. Geç Hitit sanatının en önemli yapıtlarından biri olan İvriz Kaya
                            Anıtı 4.20 - 4.20 m. ölçülerindedir.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="profile-container h-auto" style="margin: 0;">
                <div class="top-area h-400">
                    <img class="profile-bg" src="img/kwangjin.jpg" alt="">
                </div>
                <div class="bottom-area">
                    <div class="text-area text-area-center">
                        <h3 class="text-warning">Kwangjin Parkı</h3>
                        <p>
                            Kwangjin Parkı veya Kwangjin Dostluk Parkı, Konya İli'nin Ereğli ilçesinde kentsel bir
                            rekreasyon alanıdır. Park, 16 Ekim 2002 tarihinde Ereğli belediyeleri ve Güney Koreli kız
                            kardeşi Gwangjin tarafından ortaklaşa kuruldu.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="profile-container h-auto" style="margin: 0;">
                <div class="top-area h-400">
                    <img class="profile-bg" src="img/muze.jpg" alt="">
                </div>
                <div class="bottom-area">
                    <div class="text-area text-area-center">
                        <h3 class="text-warning">Ereğli Müzesi</h3>
                        <p>
                            1968 yılında kurulan Ereğli Müzesi'nde M.Ö. 7000 yılından başlayarak Neolotik dönemden
                            itibaren bütün medeniyetlere ait eserler yer almaktadır. Neolitik Döneme ait Can Hasan'dan
                            çıkan el baltaları, duvar freskleri, pişmiş toprak kaplar; Kalkolitik Döneme ait polikrom
                            pişmiş kaplar, ağırşaklar; Eski Tunç Çağı'na ait hayvan ve insan figürleri, damga mühürler;
                            Asur Ticaret Koloni Çağı'na ait bulleli testiler, idoller; Hitit Çağına ait pişmiş toprak
                            meyvelikler, silindir ve damga mühürler,hiyoroglif ve çivi yazılı heykel kaideleri; Frig
                            Çağına ait fibulalar, gaga ağızlı testiler; Helenistik Döneme ait Lekythos'lar Athena
                            sikkeleri, altın varaklar; Roma Dönemine ait mimari parçalar, mezar stelleri; Bizans Çağına
                            ait mimari parçalar; Selçuklu ve Karamanoğlu Dönemlerine ait sırlı kaseler, alçı süslemeler;
                            Osmanlı Dönemine ait el yazması Kur'an-ı Kerim'ler, silahlar, halı ve kilimler
                            sergilenmektedir.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="profile-container h-auto" style="margin: 0;">
                <div class="top-area h-400">
                    <img class="profile-bg" src="img/uluCami.jpg" alt="">
                </div>
                <div class="bottom-area">
                    <div class="text-area text-area-center">
                        <h3 class="text-warning">Ulu Camii</h3>
                        <p>
                            Cami Kebir Mahallesinde yer alan Ulu Cami plan olarak kufe tipindedir. 26*39 metre
                            ölçülerinde, Karamanoğlu Mehmet Bey adına 1426 yılında yaptırılan Ulu Camii en önemli kültür
                            varlıklarından biridir. Orjinal olarak sadece minaresi kalmıştır. Kuzey – güney yönünde
                            uzanan sekiz sıra kemer üzeri kirişlerle kapatılarak oluşturulan düz çatıyla kaplanmıştır.
                            32 adet sütun üzerine oturan kemerler beyaz taştandır, sütunlardan sekiz tanesi yığma
                            diğerleri devşirme malzemedir. Geriye kalan yirmi dört sütun ve başlıklar Roma ve Bizans
                            dönemine aittir. Minareye yakın kapı üzerinde ve yanında onarım kitabeleri vardır. Mihrap
                            1940 onarımında yeniden yapılmıştır.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-3" id="mirasimiz">
        <div class="profile-container h-auto" style="margin: 0;">
            <div class="top-area h-400">
                <img class="profile-bg" src="img/mirasimiz.jpg" alt="">
            </div>
            <div class="bottom-area">
                <div class="text-area text-area-center">
                    <h3 class="text-warning">MİRASIMIZ</h3>
                    <p>
                        Ereğli'nin gezilebilecek yerlerinden ve mesire alanlarından birisi olan Atatürk Kültür Merkezi,
                        Konya-Adana Karayolunun hemen yanıbaşında, Ersu Fabrikasının olduğu bölümün ise hemen kuzey
                        tarafında yer almaktadır. Atatürk Kültür Parkı Ereğli'ye özgü yeşil dokuyla kaplanmış çevre il
                        ve ilçelerden bir çok ziyaretçiyi karşılayan nadide bir yerdir. Park içerisinde suni gölet, anfi
                        tiyatro, basketbol, voleybol sahası, bisiklet parkuru ve piknik alanları barındırır.Atattürk
                        Kültür Parkı Ereğlilinin nefes almasını sağlayan önemli bir yeşil alandır...
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-3" id="iletisim">
        <div class="box">
            <h4 class="text-warning">İLETİŞİM</h4>
            <form action="iletisim2.php" method="post">
                <div class="form-group">
                    <label class="text-success">Ad Soyad:</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label class="text-success">Mail:</label>
                    <input type="email" class="form-control" name="mail" required>
                </div>
                <div class="form-group">
                    <label class="text-success">Mesaj:</label>
                    <input type="text" class="form-control" name="message" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-warning text-light">GÖNDER</button>
                    <button class="btn btn-danger text-light ml-2" id="clearForm">TEMİZLE</button>
                </div>
            </form>
        </div>
    </div>
    <div class="footer-area bg-success">
        <footer class="container">
            <div class="copyright">©2020 Selinnur Göl - Tüm Hakları Saklıdır.</div>
            <div class="social-media">
                <div class="items">
                    <a href="https://tr-tr.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                </div>
                <div class="items">
                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="items">
                    <a href="https://www.instagram.com/?hl=tr"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="items">
                    <a href="https://tr.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        $('#clearForm').click(() => {
            var item = $(".form-control");
            item.val("");
        });
    </script>
    </body>

    </html>