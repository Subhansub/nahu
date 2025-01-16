<!DOCTYPE html>
<html>
<head>
  <title>Peran BLU BBIB Singosari</title>
  <link rel="stylesheet" href="css/styles.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <style>
      body.neemu-adahh {
        font-family: Arial, sans-serif;
        text-align: center;
        background-image: url('../img/1000.jpeg'); /* Ganti dengan URL gambar Anda */
        background-size: 100% 210%;
      }
    
      .container-neemu {
        margin: 50px;
      }

      .neemu-adah {
        font-size: 36px;
        margin-bottom: 10px;
        text-align: center;
      }

      h2 {
        font-size: 24px;
        margin-bottom: 20px;
      }

      h3 {
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 30px;
      }

      p {
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 30px;
      }

      .box-container-neemu {
        display: flex;
        flex-direction: column; /* Tetap vertikal */
        align-items: center;
      }

      .box-neemu {
        display: flex;
        width: 60%; /* Lebar kotak diperbesar */
        height: 120px; /* Mengurangi tinggi kotak */
        position: relative; /* Agar angka bisa diposisikan dalam kotak */
        border-radius: 50%; /* Membuat sudut sangat membulat */
      }

      .box-neemu .number-neemu {
        font-size: 48px; /* Ukuran besar untuk angka */
        font-weight: bold;
        color: #007bff;
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%); /* Memastikan nomor berada di tengah vertikal */
      }

      .box-number-right-neemu .number-neemu {
        left: auto;
        right: 10px; /* Memindahkan nomor ke sebelah kanan */
      }

      .text-section-neemu {
        width: 50%; /* Setengah dari lebar kotak untuk teks */
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-left: 10px;
        background-color: #f9f9f9; /* Warna latar teks */
        border-radius: 400px 0 0 400px; /* Hanya sudut kiri atas dan kiri bawah berbentuk bulat */
      }

      .image-section-neemu {
        width: 43%; /* Lebar gambar mengikuti setengah kotak */
      }

      .image-section-neemu img {
        width: 100%; /* Lebar gambar mengikuti lebar container */
        height: 100%; /* Tinggi gambar mengikuti tinggi container */
        object-fit: cover; /* Menjaga gambar tetap proporsional */
        opacity: 0.6;
      }

      /* Teks di kanan dan gambar di kiri untuk kotak 2, 4, 6 */
      .box-neemu:nth-child(2), .box-neemu:nth-child(4), .box-neemu:nth-child(6) {
        flex-direction: row-reverse; /* Membalik urutan kotak menjadi teks kanan, gambar kiri */
      }

      .tebe {
        font-weight: bold;
      }

      .box-neemu:nth-child(1) .text-section-neemu {
        background-color: #f9f9f9; /* Warna latar belakang kotak pertama */
      }

      .box-neemu:nth-child(2) .text-section-neemu {
        background-color: #e0f7fa; /* Warna latar belakang kotak kedua */
        border-radius: 0 400px 400px 0; /* Hanya sudut kanan atas dan kanan bawah berbentuk bulat */
      }

      .box-neemu:nth-child(3) .text-section-neemu {
        background-color: #ffecb3; /* Warna latar belakang kotak ketiga */
      }

      .box-neemu:nth-child(4) .text-section-neemu {
        background-color: #d1c4e9; /* Warna latar belakang kotak keempat */
        border-radius: 0 400px 400px 0; /* Hanya sudut kanan atas dan kanan bawah berbentuk bulat */
      }

      .box-neemu:nth-child(5) .text-section-neemu {
        background-color: #c8e6c9; /* Warna latar belakang kotak kelima */
      }

      .box-neemu:nth-child(6) .text-section-neemu {
        background-color: #ffe0b2; /* Warna latar belakang kotak keenam */
        border-radius: 0 400px 400px 0; /* Hanya sudut kanan atas dan kanan bawah berbentuk bulat */
      }
  </style>
  
</head>
<body class="neemu-adahh">



<br><div class="container-neemu">
    <h1 class="neemu-adah">PERAN BLU BBIB SINGOSARI</h1>
    <h2>DALAM MEWUJUDKAN KETAHANAN PANGAN NASIONAL</h2>
    <p>Penyediaan Semen Beku ternak berkualitas, ditunjang tenaga teknis profesional, sangat penting dalam mendukung ketersediaan 
      pangan nasional. Melalui aplikasi Inseminasi Buatan, semen beku diberikan pada ternak betina sehingga menghasilkan keturunan 
      dengan kualitas yang lebih baik. Berkontribusi pada peningkatan populasi dan produktifitas ternak.</p>

    <div class="box-container-neemu">
      <!-- Kotak 1 Dibuat seperti kotak lainnya (gambar di sebelah kanan, teks di sebelah kiri) -->
      <div class="box-neemu">
        <div class="number-neemu">1</div>
        <div class="text-section-neemu">
          <h3>Pejantan Unggul Terseleksi</h3>
        </div>
        <div class="image-section-neemu">
          <img src="../img/1001.jpeg" alt="Pejantan Unggul">
        </div>
      </div>

      <div class="box-neemu box-number-right-neemu">
        <div class="number-neemu">2</div>
        <div class="text-section-neemu">
          <div>Semen Beku Berkualitas</div>
          <p>Semen beku terbaik dengan<br>
            uji teknis yang mendalam.</p>
        </div>
        <div class="image-section-neemu">
          <img src="../img/1002.jpeg" alt="Semen Beku">
        </div>
      </div>

      <div class="box-neemu">
        <div class="number-neemu">3</div>
        <div class="text-section-neemu">
          <div class="tebe" >Aplikasi Inseminasi Buatan</div>
          <p>Efisiensi produksi melalui<br>teknologi inseminasi terkini.</p>
        </div>
        <div class="image-section-neemu">
          <img src="../img/1003.jpeg" alt="Inseminasi Buatan">
        </div>
      </div>

      <div class="box-neemu box-number-right">
        <div class="number-neemu">4</div>
        <div class="text-section-neemu">
          <div>Peningkatan Populasi</div>
          <p>Meningkatkan jumlah ternak <br>untuk kebutuhan pangan nasional.</p>
        </div>
        <div class="image-section-neemu">
          <img src="../img/1004.jpeg" alt="Peningkatan Populasi">
        </div>
      </div>

      <div class="box-neemu">
        <div class="number-neemu">5</div>
        <div class="text-section-neemu">
          <div>Peningkatan Produktivitas</div>
          <p>Memaksimalkan hasil ternak berkualitas tinggi.</p>
        </div>
        <div class="image-section-neemu">
          <img src="../img/1005.jpeg" alt="Produktivitas">
        </div>
      </div>

      <div class="box-neemu box-number-right-neemu">
        <div class="number-neemu">6</div>
        <div class="text-section-neemu">
          <div>Terpenuhi Kebutuhan Protein Hewani</div>
          <p>Memenuhi kebutuhan<br>gizi masyarakat secara luas.</p>
        </div>
        <div class="image-section-neemu">
          <img src="../img/1006.jpeg" alt="Protein Hewani">
        </div>
      </div>

    </div>
  </div>
  </div>


  


</body>
</html>
