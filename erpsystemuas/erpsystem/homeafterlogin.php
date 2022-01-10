<!DOCTYPE html>
<html>
<head>
<title>WARMINDOOO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" type="text/css" href="homeafterlogin.css">
<link rel="icon" href="images/icon.png" type="image/ico" />
</head>
<body>


<div class="topnav">
  <a class="active"href="#" >Halaman Utama</a>
  <a href="#about" >Tentang Warmindo</a>
  <a href="#menu" >Pilihan Menu</a>
  <a href="#where" >Cari Kita!</a>
  <a href="logoutsuccess.php" class="logout">Logout</a>
  <p><a href="homeafterlogin.php" target="_blank">
<img class="top" src="images/logo.png"></a></p>
</div>


<header>

<div>
<img class="mySlides" src="images/indomie1.jpeg">
<img class="mySlides" src="images/indomie2.jpeg">
<img class="mySlides" src="images/indomie3.jpeg">
<img class="mySlides" src="images/indomie4.jpeg">
<img class="mySlides" src="images/indomie5.jpeg">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
var i;
var x = document.getElementsByClassName("mySlides");
for (i = 0; i < x.length; i++) {
  x[i].style.display = "none";
}
myIndex++;
if (myIndex > x.length) {myIndex = 1}
x[myIndex-1].style.display = "block";
setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</header>



<div class="about" id="about">
<div>
  <h5>TENTANG WARMINDO</h5>
  <p>Warmindo merupakan tempat makan Indomie yang ditemukan oleh Bapak Smith di lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <div>
    <p><i>"Menggunakan Indomie terbaik, serta jauh dari tanggal expired. hehe." Kelezatan adalah nomor 1.</i></p>
    <p>Koki andalan: Mamang Dadangg</p>
  </div>
  <img class="abg" src="images/abangindomie.jpeg">
  <p>buka 24 jam jika tidak ada kendala.</p>
  <p>Address: Kelapa Gading, Jakarta Utara</p>
</div>
</div>


<div class="menu" id="menu">
<div>
  <h5>THE MENU</h5>
<img class="menus" src="images/menuindomie.jpeg">
<br><br><br>

  <table class="makanan">
    <tr>
      <th>Makanan</th>
      <th>Harga</th>
    </tr>
    <tr>
      <td>Indomie(goreng/rebus)</td>
        <td>10.000</td>
      </tr>
      <tr>
        <td>Indomie + telur</td>
        <td> 15.000</td>
      </tr>
      <tr>
        <td>Bubur Kacang Ijo</td>
        <td> 8.000</td>
      </tr>
      <tr>
        <td>Ketan Hitam</td>
        <td> 7.000</td>
      </tr>
      <tr>
        <td>Nasi Goreng</td>
        <td> 12.000</td>
      </tr>
    </table>

<br><br>

    <table class="minuman">
      <tr>
        <th>Minuman</th>
        <th>Harga</th>
      </tr>
      <tr>
        <td>Soda gembira</td>
          <td>8.000</td>
        </tr>
        <tr>
          <td>Es teh </td>
          <td> 4.000</td>
        </tr>
        <tr>
          <td>Aqua </td>
          <td> 5.000</td>
        </tr>
        <tr>
          <td>Es jeruk</td>
          <td> 7.000</td>
        </tr>
        <tr>
          <td>Kopi</td>
          <td> 6.000</td>
        </tr>
      </table>
</div>


<div class="where" id="where">
<div>
  <h5>AYO KESINI</h5>
  <p><a href="https://www.traveloka.com/id-id/restaurants/indonesia/detail/warung-kopi-tamjog-102153" target="_blank">
<img class="map" src="images/mapindomie.jpeg"></p>
  <a> Tempat kita selalu ramai, jadi dimohon untuk semua pengunjung mengikuti segala protokol kesehatan yang ada, sehingga semua pengunjung merasa aman.</a>
</div>
</div>



<footer>
<p><a href="http://leaps.kalbis.ac.id/version"target="_blank">v0.0.10a</a></p>
</footer>



</body>

</html>
