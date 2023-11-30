<div class="login-session" id="login">
    <div class="login-layout">
        <div class="form-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-lg login-close-button" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
            </svg>
        </div>
        <div class="login-left">
            <h1>login</h1>
            <div class="main-login">
                <form action="<?= base_url('member'); ?>" method="POST" class="form-login">
                    <table>
                        <tr>
                            <td class="input-label">Email :</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td class="input-label">Password :</td>
                            <td><input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="button">
                                <div class="button-tengah">
                                    <button name="login">Login</button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

        <div class="register-right">
            <div class="form-content">
                <div class="contentForm">
                    <h1>Pengguna Baru?</h1>
                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff" fill-rule="evenodd" d="M1 10a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H2a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                    </svg>
                    <p>Daftarkan akun anda agar bisa melihat berbagai promo yang menarik!</p>
                    <a href="" class="keterangan-form-login">Daftar</a>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="register-session">
    <div class="register-layout">
        <div class="register-form">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-lg register-close-button" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
            </svg>
        </div>
        <div class="register-left">
            <div class="register-content">
                <h1>Register</h1>
                <form action="<?= base_url('member/daftar'); ?>" method="POST">
                    <table>
                        <tr>
                            <td class="input-label">Nama </td>
                            <td><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td class="input-label">Email </td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td class="input-label">Alamat </td>
                            <td><input type="text" name="alamat"></td>
                        </tr>
                        <tr>
                            <td class="input-label">Password </td>
                            <td><input type="password" name="password1"></td>
                        </tr>
                        <tr>
                            <td class="input-label">Password Confirmation </td>
                            <td><input type="password" name="password2"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="button">
                                <div class="button-tengah2">
                                    <button name="register" type="submit">Daftar</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="keterangan-register"> <label for="">Sudah memiliki akun? klik <a href="" class="keterangan-form-register">Login</a> untuk Login</label></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="background" id="1">
    <?= $this->session->flashdata('pesan'); ?>
    <nav id="navbar">
        <!-- <h1>Nero store</h1> -->
        <img id="img-logo" src="<?= base_url(); ?>assets/img/logo/nerostore-logo-white.png" width="250" height="250" alt="">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list side-bar-button" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>

        <div class="side-bar">
            <div class="tombol">
                <a href="">
                    <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff" d="m6.4 18.308l-.708-.708l5.6-5.6l-5.6-5.6l.708-.708l5.6 5.6l5.6-5.6l.708.708l-5.6 5.6l5.6 5.6l-.708.708l-5.6-5.6l-5.6 5.6Z" />
                    </svg>
                </a>
            </div>

            <div class="sapa-sidebar">
                <h1>Hallo!,Nama pengguna</h1>
            </div>
            <div class="list-tombol">
                <li><a href="">Beranda</a></li>
                <li><a href="">Car</a></li>
                <li><a href="" class="loginSidebar">Login</a></li>

            </div>

        </div>

        <div class="tombolBurger">
            <a href=""><svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                        <path d="M7.94971 11.9497H39.9497" />
                        <path d="M7.94971 23.9497H39.9497" />
                        <path d="M7.94971 35.9497H39.9497" />
                    </g>
                </svg></a>
        </div>

        <div class="side-bar-button">
            <div class="tombol-buka">
                <svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                        <path d="M7.94971 11.9497H39.9497" />
                        <path d="M7.94971 23.9497H39.9497" />
                        <path d="M7.94971 35.9497H39.9497" />
                    </g>
                </svg>
            </div>
        </div>

        <?php
        if (!empty($this->session->userdata('email'))) {
        ?>
            <ul class="navigasi">
                <li><a href="#1">Beranda</a></li>
                <li><a href="<?= base_url('booking'); ?>">Booking <b><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> Mobil</a></li>
                <li><a href="#2">Belanja</a></li>
                <li><a href="#3">Kontak</a></li>
            </ul>
            <div class="profile">
                <a href="<?= base_url('member/myprofil'); ?>">
                    <div class="pic">
                        <img src="<?= base_url(); ?>assets/img/profile/profile.jpg" alt="">
                    </div>
                </a>
                <div class="logout">
                    <a href="<?= base_url('member/myprofil'); ?>">
                        <h1>Nama user</h1>
                    </a>
                    <span><a href="<?= base_url('member/logout'); ?>">Logout</a></span>
                </div>

            </div>
        <?php } else { ?>
            <ul class="navigasi">
                <li><a href="#1">Beranda</a></li>
                <li><a href="#2">Belanja</a></li>
                <li><a href="#3">Kontak</a></li>
                <li class="beda"><a href="">Login</a></li>
            </ul>
        <?php } ?>
    </nav>
    <div class="container">
        <div class="content1">
            <div class="maincontent">
                <h1 class="belum-muncul1">HYPER CAR</h1>
                <h2 class="belum-muncul">AVENTADOR</h2>
                <h5 class="belum-muncul2">LAMBORGHINI</h5>
                <div class="showcar">
                    <a href="" id="tombol1">
                        < </a>
                            <img src="<?= base_url(); ?>assets/img/car/aventadorr.png" alt="" class="belum-muncul4" />
                            <a href="" id="tombol2"> > </a>
                </div>
                <p class="belum-muncul3">

                    Selamat datang di Dealer Kami: Pilihan Rental Profesional Anda!

                    Nikmati pengalaman berkendara tanpa kesulitan dengan layanan rental terbaik kami. Armada terbaru, harga bersaing, dan pelayanan profesional menanti Anda. Pesan sekarang dan jadikan setiap perjalanan Anda istimewa!
                </p>
                <br />
                <div class="button">
                    <a href="">Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container2" id="2">
    <div class="choice-button ">
        <div class="button-area">
            <div class="show-all">
                <a href="<?= base_url('/home#2'); ?>">Show All</a>
            </div>
            <a href="<?= base_url('home/filterByKategori?kategori=Ferrari#2'); ?>" class="company-logo">
                <img src="<?= base_url(); ?>assets/img/logo/ferrari-logo.png" alt="">
            </a>
            <a href="<?= base_url('home/filterByKategori?kategori=Koenigsegg#2'); ?>" class="company-logo">
                <img src="<?= base_url(); ?>assets/img/logo/koenigsegg-logo.png" alt="">
            </a>
            <a href="<?= base_url('home/filterByKategori?kategori=Lamborghini#2'); ?>" class="company-logo">
                <img src="<?= base_url(); ?>assets/img/logo/lamborghini-logo.png" alt="">
            </a>
            <a href="<?= base_url('home/filterByKategori?kategori=Porsche#2'); ?>" class="company-logo">
                <img src="<?= base_url(); ?>assets/img/logo/porsche-logo.png" alt="">
            </a>
        </div>
    </div>

    <div class="car-content">
        <?php foreach ($mobil as $mobil) : ?>
            <div class="card hilang">
                <header>
                    <img src="<?= base_url(); ?>assets/img/car/<?= $mobil->image ?>" alt="" />
                </header>
                <div class="content">
                    <h1><?= $mobil->kategori ?> - <?= $mobil->nama_mobil ?></h1>
                    <br>
                    <h3><?= $mobil->harga ?></h3>
                    <p>
                        <?= $mobil->deskripsi ?>
                    </p>
                    <div class="button2">
                        <a href="<?= base_url('home/detailMobil/' . $mobil->id); ?>">Lihat Detail</a>
                        <?php
                        if ($mobil->stok < 1) {
                            echo "<i class='btn btn-outline-primary fas fw fa-shopping-cart'> Booking&nbsp;&nbsp 0</i>";
                        } else {
                            echo "<a class='btn btn-outline-primary fas fw fa-shopping-cart' href='" . base_url('booking/tambahBooking/' . $mobil->id) . "'> Booking</a>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<div class="subscribe" id="3">
    <div class="container-subscribe">
        <h1>Mau Mendapatkan Penawaran <br>
            Menarik juga?</h1>
        <p>Silahkan hubungi klik tombol dibawah jika anda ingin mendapatkan penawaran spesia,terbatas!</p>

        <div class="form-subscribe">
            <table>
                <tr>
                    <td>
                        <span>
                            <svg width="40" height="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ffffff" d="M4 20q-.825 0-1.413-.588T2 18V6q0-.825.588-1.413T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.588 1.413T20 20H4Zm8-7L4 8v10h16V8l-8 5Zm0-2l8-5H4l8 5ZM4 8V6v12V8Z" />
                            </svg>
                        </span>
                    </td>
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('Home/sendEmailSubscriber'); ?>
                    <td>
                        <input type="text" size="50" name="recipient_email" id="recipient_email" value="<?php echo set_value('recipient_email'); ?>">
                    </td>
                </tr>
            </table>
        </div>

        <div class="tombol-subscribe">
            <button type="submit" class="subscribe-button">subscribe</button>
        </div>
        <?php echo form_close(); ?>

        <?= $this->session->flashdata('pesan'); ?>

    </div>
</div>

<div class="container1">
    <div class="keterangan1">
        <div class="header-keterangan1">
            <h3>WHY</h3>
            <h1>PEOPLE CHOOSE US?</h1>
        </div>

        <div class="keterangan">
            <div class="keterangan-box">
                <div class="keterangan-header">
                    <svg width="128" height="128" viewBox="0 0 2048 2048" xmlns="http://www.w3.org/2000/svg" class="logo-keterangan">
                        <path fill="rgb(33, 33, 33)" d="M384 1152q27 0 50 10t40 27t28 41t10 50q0 27-10 50t-27 40t-41 28t-50 10q-27 0-50-10t-40-27t-28-41t-10-50q0-27 10-50t27-40t41-28t50-10zm1280 0q27 0 50 10t40 27t28 41t10 50q0 27-10 50t-27 40t-41 28t-50 10q-27 0-50-10t-40-27t-28-41t-10-50q0-27 10-50t27-40t41-28t50-10zm347-256l-66 65q2 5 10 30t19 59t25 73t24 71t18 54t7 22v650q0 27-10 50t-27 40t-41 28t-50 10h-128q-27 0-50-10t-40-27t-28-41t-10-50H384q0 27-10 50t-27 40t-41 28t-50 10H128q-27 0-50-10t-40-27t-28-41t-10-50v-650l7-21l18-54l24-72q13-39 24-73t20-59t10-30l-66-65H0V768h91l57 58l74-223q16-49 46-89t71-69t87-45t100-16h996q52 0 99 16t88 44t70 69t47 90l74 223l57-58h91v128h-37zM526 512q-63 0-112 36t-70 95l-85 253h1530l-85-253q-20-59-69-95t-113-36H526zm882 1231l-104-207H744l-104 207v49h768v-49zm512 49v-502l-6-18q-6-18-15-47t-21-61t-21-63t-17-51t-9-26H217q-2 5-9 26t-17 50t-21 63t-20 62t-16 46t-6 19v502h384v-79l152-305h720l152 305v79h384z" />
                    </svg>
                    <h1>Pelayanan Terbaik</h1>
                </div>
                <keterangan class="keterangan-content">
                    <p>
                        Temukan kenyamanan maksimal dalam setiap perjalanan Anda dengan armada terbaik kami. Mobil-mobil terbaru dan terawat dengan baik, memberikan pengalaman berkendara tanpa khawatir. Pilih kualitas, pilih kepuasan – hanya di Dealer Kami!
                    </p>
                </keterangan>
            </div>

            <div class="keterangan-box">
                <div class="keterangan-header">
                    <svg width="128" height="128" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="logo-keterangan">
                        <path fill="rgb(33, 33, 33)" d="M6.75 3.5a2.25 2.25 0 1 0 0 4.5a2.25 2.25 0 0 0 0-4.5ZM3.5 5.75a3.25 3.25 0 1 1 6.5 0a3.25 3.25 0 0 1-6.5 0Zm0 4.25a2 2 0 0 0-2 2v.084a1.717 1.717 0 0 0 .012.175a3.948 3.948 0 0 0 .67 1.806C2.883 15.08 4.237 16 6.75 16c.946 0 1.727-.13 2.371-.347a5.6 5.6 0 0 1-.12-1.02c-.564.222-1.297.367-2.251.367c-2.237 0-3.258-.799-3.745-1.503a2.948 2.948 0 0 1-.498-1.336a1.608 1.608 0 0 1-.006-.083l-.001-.017V12a1 1 0 0 1 1-1H10c.08 0 .16.01.235.028c.227-.28.48-.535.758-.765A1.991 1.991 0 0 0 10 10H3.5Zm11-5a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3ZM12 6.5a2.5 2.5 0 1 1 5 0a2.5 2.5 0 0 1-5 0ZM14.5 19a4.5 4.5 0 1 0-3.937-2.318l-.544 1.789a.41.41 0 0 0 .51.51l1.79-.544A4.48 4.48 0 0 0 14.5 19ZM12 13.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5Zm.5 2.5a.5.5 0 0 1 0-1h2a.5.5 0 0 1 0 1h-2Z" />
                    </svg>
                    <h1>Memberikan Solusi</h1>
                </div>
                <keterangan class="keterangan-content">
                    <p>
                        Kami memberikan solusi lengkap untuk kebutuhan mobil Anda. Dengan armada terbaru dan terawat, kami hadir untuk memastikan pengalaman berkendara tanpa stres. Pilih layanan terbaik, pilih kenyamanan. Dealer Kami - solusi terbaik untuk perjalanan Anda.
                    </p>
                </keterangan>
            </div>

            <div class="keterangan-box">
                <div class="keterangan-header">
                    <svg width="128" height="128" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="logo-keterangan">
                        <path fill="rgb(33, 33, 33)" d="M12 12.5a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7ZM10.5 16a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0Z" />
                        <path fill="rgb(33, 33, 33)" d="M17.526 5.116L14.347.659L2.658 9.997L2.01 9.99V10H1.5v12h21V10h-.962l-1.914-5.599l-2.098.715ZM19.425 10H9.397l7.469-2.546l1.522-.487L19.425 10ZM15.55 5.79L7.84 8.418l6.106-4.878l1.604 2.25ZM3.5 18.169v-4.34A3.008 3.008 0 0 0 5.33 12h13.34a3.009 3.009 0 0 0 1.83 1.83v4.34A3.009 3.009 0 0 0 18.67 20H5.332A3.01 3.01 0 0 0 3.5 18.169Z" />
                    </svg>
                    <h1>Harga Terjangkau</h1>

                </div>
                <keterangan class="keterangan-content">
                    <p>

                        Nikmati kualitas tanpa merusak anggaran Anda! Harga mobil terjangkau dari Dealer Kami memberikan kesempatan untuk menjelajahi dengan gaya tanpa beban. Temukan keseimbangan sempurna antara nilai dan kenyamanan. Harga terbaik untuk pengalaman berkendara optimal!
                    </p>
                </keterangan>
            </div>

        </div>
    </div>
</div>

<div class="footer">
    <div class="content-3">
        <div class="footer-logo">
            <div class="ft-logo">
                <img src="<?= base_url(); ?>assets/img/logo/ferrari-logo.png" alt="">
            </div>
            <div class="ft-logo">
                <img src="<?= base_url(); ?>assets/img/logo/koenigsegg-logo.png" alt="">
            </div>
            <div class="ft-logo">
                <img src="<?= base_url(); ?>assets/img/logo/lamborghini-logo.png" alt="">
            </div>
            <div class="ft-logo">
                <img src="<?= base_url(); ?>assets/img/logo/porsche-logo.png" alt="">
            </div>
        </div>
        <div class="footer-text">
            <div class="footer-text1">
                <div class="logo">
                    <h1>NEROSTORE</h1>
                    <h5>Rental mobil terpercaya, berdiri sejak tahun 2013. Kami memiliki berbagai macam supercar yang bisa anda pakai untuk berbagai kebutuhan anda.</h5>
                </div>
            </div>
            <div class="footer-text2">
                <h1>Perusahaan</h1>
                <ul>
                    <li>Tentang Kami</li>
                    <li>Mobil</li>
                    <li>Riwayat</li>
                    <li>Belanja</li>
                </ul>
            </div>
            <div class="footer-text3">
                <h1>Informasi</h1>
                <ul>
                    <li>Dapatkan Penawaran</li>
                    <li>Dealer terdekat</li>
                    <li>Hubungi Kami</li>
                    <li>Servis</li>
                </ul>
            </div>
            <div class="footer-text4">
                <h1>Ikuti Kami!</h1>
                <div class="logo-app">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook mleft" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram mleft" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter-x mleft" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url(); ?>assets/js/scriptStyle.js"></script>