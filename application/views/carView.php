<!-- NAV BEGINING -->
<nav>
    <div class="tombolSamping">
        <div class="tombolClose">
            <a href="">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#ffffff" d="m6.4 18.308l-.708-.708l5.6-5.6l-5.6-5.6l.708-.708l5.6 5.6l5.6-5.6l.708.708l-5.6 5.6l5.6 5.6l-.708.708l-5.6-5.6l-5.6 5.6Z" />
                </svg>
            </a>
        </div>
        <div class="nama">
            <h1>Halo,Nama pengguna</h1>
        </div>
        <ul>
            <li><a href="">Dashboard</a></li>
            <li><a href="">Car</a></li>
            <li><a href="">Logout</a></li>
        </ul>
    </div>

    <div class="jenisMobil">
        <div class="tombolKeluar">
            <a href="carstore.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg>
            </a>
        </div>
        <div class="namaMobil">
            <h1>Merek Mobil</h1>
            <h3>Jenis Mobil</h3>
        </div>
    </div>

    <div class="tombolBurger">
        <a href="">
            <svg width="30" height="30" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M7.95 11.95h32m-32 12h32m-32 12h32" />
            </svg>
        </a>
    </div>

    <div class="lainnya">
        <div class="lokasi">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>
            <div class="namaLokasi">
                <h1>Cibodas,Tangerang</h1>
                <h3>Humam Afif</h3>
            </div>
        </div>
        <div class="kontak">
            <a href="https://wa.me/+6287788221533?text=Halo, apakah anda dapat membantu saya?" target="_blank">Customer Service</a>
        </div>
    </div>
</nav>
<!-- NAV END -->

<div class="container">
    <div class="kontenKiri">
        <div class="kontenKiri-dalam">
            <div class="kontenMobil">
                <img src="<?= base_url(); ?>assets/img/car/jesko1.png" alt="" />
            </div>
            <div class="kontenSpesifikasi">
                <ul>
                    <li class="mesin">
                        <svg width="48" height="48" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#ffffff" d="M8 10h8v8h-5l-2-2H7v-5m0-7v2h3v2H7l-2 2v3H3v-3H1v8h2v-3h2v3h3l2 2h8v-4h2v3h3V9h-3v3h-2V8h-6V6h3V4H7Z" />
                        </svg>
                        <div class="spek mesin">
                            <div class="logoSpek">
                                <svg width="64" height="64" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#ffffff" d="M8 10h8v8h-5l-2-2H7v-5m0-7v2h3v2H7l-2 2v3H3v-3H1v8h2v-3h2v3h3l2 2h8v-4h2v3h3V9h-3v3h-2V8h-6V6h3V4H7Z" />
                                </svg>
                            </div>
                            <div class="keteranganSpek">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Tempora, ad aut natus possimus debitis itaque esse a quis
                                    nesciunt sapiente.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="transmisi">
                        <svg width="48" height="48" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="#ffffff">
                                <path d="M2 4a2 2 0 1 1 2.75 1.855v5.395h6.5V5.855a2 2 0 1 1 1.5 0v5.395H16c.964 0 1.612-.002 2.095-.066c.461-.063.659-.17.789-.3c.13-.13.237-.328.3-.79c.064-.482.066-1.13.066-2.094V5.855a2 2 0 1 1 1.5 0v2.197c0 .898 0 1.648-.08 2.242c-.084.628-.27 1.195-.726 1.65c-.455.456-1.022.642-1.65.726c-.594.08-1.343.08-2.242.08H12.75v5.395a2 2 0 1 1-1.5 0V12.75h-6.5v5.395a2 2 0 1 1-1.5 0V5.855A2 2 0 0 1 2 4Z" />
                                <path fill-rule="evenodd" d="M17.25 15a.75.75 0 0 1 .75-.75h2.286c1.375 0 2.464 1.134 2.464 2.5a2.502 2.502 0 0 1-1.641 2.358l1.53 2.5a.75.75 0 1 1-1.279.784l-1.923-3.142h-.687V22a.75.75 0 0 1-1.5 0v-7Zm1.5 2.75h1.536c.518 0 .964-.433.964-1s-.446-1-.964-1H18.75v2Z" clip-rule="evenodd" />
                            </g>
                        </svg>
                        <div class="spek transmisi">
                            <div class="logoSpek">
                                <svg width="64" height="64" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="#ffffff">
                                        <path d="M2 4a2 2 0 1 1 2.75 1.855v5.395h6.5V5.855a2 2 0 1 1 1.5 0v5.395H16c.964 0 1.612-.002 2.095-.066c.461-.063.659-.17.789-.3c.13-.13.237-.328.3-.79c.064-.482.066-1.13.066-2.094V5.855a2 2 0 1 1 1.5 0v2.197c0 .898 0 1.648-.08 2.242c-.084.628-.27 1.195-.726 1.65c-.455.456-1.022.642-1.65.726c-.594.08-1.343.08-2.242.08H12.75v5.395a2 2 0 1 1-1.5 0V12.75h-6.5v5.395a2 2 0 1 1-1.5 0V5.855A2 2 0 0 1 2 4Z" />
                                        <path fill-rule="evenodd" d="M17.25 15a.75.75 0 0 1 .75-.75h2.286c1.375 0 2.464 1.134 2.464 2.5a2.502 2.502 0 0 1-1.641 2.358l1.53 2.5a.75.75 0 1 1-1.279.784l-1.923-3.142h-.687V22a.75.75 0 0 1-1.5 0v-7Zm1.5 2.75h1.536c.518 0 .964-.433.964-1s-.446-1-.964-1H18.75v2Z" clip-rule="evenodd" />
                                    </g>
                                </svg>
                            </div>
                            <div class="keteranganSpek">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Tempora, ad aut natus possimus debitis itaque esse a quis
                                    nesciunt sapiente.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="bensin">
                        <svg width="48" height="48" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#ffffff" d="M9.07 7L6 11.606V20h12V7H9.07ZM8 5h11a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V11l4-6Zm5-4h5a1 1 0 0 1 1 1v2h-7V2a1 1 0 0 1 1-1ZM8 12h2v6H8v-6Z" />
                        </svg>
                        <div class="spek bensin">
                            <div class="logoSpek">
                                <svg width="64" height="64" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#ffffff" d="M3 2h3c.28 0 .53.11.71.29l2.08 2.09l.8-.79C10 3.2 10.5 3 11 3h6c.5 0 1 .2 1.41.59l1 1C19.8 5 20 5.5 20 6v13a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8c0-.5.2-1 .59-1.41l.79-.8L5.59 4H3V2m8 3v2h6V5h-6m.41 6l-2-2H8v1.41l2 2v3.18l-2 2V19h1.41l2-2h3.18l2 2H18v-1.41l-2-2v-3.18l2-2V9h-1.41l-2 2h-3.18m.59 2h2v2h-2v-2Z" />
                                </svg>
                            </div>
                            <div class="keteranganSpek">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Tempora, ad aut natus possimus debitis itaque esse a quis
                                    nesciunt sapiente.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="kecepatan">
                        <svg width="48" height="48" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#ffffff" d="M10.45 15.5q.6.6 1.55.588t1.4-.688L19 7l-8.4 5.6q-.675.45-.712 1.375t.562 1.525ZM12 4q1.475 0 2.838.413T17.4 5.65l-1.9 1.2q-.825-.425-1.712-.637T12 6Q8.675 6 6.337 8.337T4 14q0 1.05.288 2.075T5.1 18h13.8q.575-.95.838-1.975T20 13.9q0-.9-.213-1.75t-.637-1.65l1.2-1.9q.75 1.175 1.188 2.5T22 13.85q.025 1.425-.325 2.725T20.65 19.05q-.275.45-.75.7t-1 .25H5.1q-.525 0-1-.25t-.75-.7q-.65-1.125-1-2.388T2 14q0-2.075.788-3.888t2.15-3.174Q6.3 5.575 8.124 4.787T12 4Zm.175 7.825Z" />
                        </svg>
                        <div class="spek kecepatan">
                            <div class="logoSpek">
                                <svg width="64" height="64" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#ffffff" d="M10.45 15.5q.625.625 1.575.588T13.4 15.4L19 7l-8.4 5.6q-.65.45-.712 1.362t.562 1.538ZM5.1 20q-.55 0-1.012-.238t-.738-.712q-.65-1.175-1-2.438T2 14q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 4q2.05 0 3.85.775T19 6.888q1.35 1.337 2.15 3.125t.825 3.837q.025 1.375-.313 2.688t-1.037 2.512q-.275.475-.738.713T18.875 20H5.1Z" />
                                </svg>
                            </div>
                            <div class="keteranganSpek">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Tempora, ad aut natus possimus debitis itaque esse a quis
                                    nesciunt sapiente.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="kontenKanan">
        <div class="kontenKanan-dalam">
            <div class="detailKendaraan">
                <div class="deskripsi">
                    <h1>Deskripsi</h1>
                    <table>
                        <tr>
                            <td>Harga :</td>
                            <td>Rp.4.300.000.000</td>
                        </tr>
                        <tr>
                            <td>Kondisi :</td>
                            <td>Layak Jalan</td>
                        </tr>
                        <tr>
                            <td>Surat Menyurat:</td>
                            <td>Lengkap</td>
                        </tr>
                        <tr>
                            <td>Warna :</td>
                            <td>Putih</td>
                        </tr>
                    </table>
                </div>
                <div class="logo">
                    <img src="<?= base_url(); ?>assets/img/logo/lamborghini-logo.png" alt="" />
                </div>
            </div>
            <div class="form">
                <div class="judulForm">
                    <h1>TABEL PENGAJUAN RENTAL</h1>
                    <p>
                        Dengan ini saya menyadari pengisian form untuk <br />
                        Mengajukan Perentalan Mobil dengan data diri sebagai Berikut
                    </p>
                </div>

                <div class="tableForm">
                    <form action="">
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td><input type="text" /></td>
                            </tr>
                            <tr>
                                <td>Foto KTP</td>
                                <td><input type="file" /></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" /></td>
                            </tr>
                            <tr>
                                <td>No Telepon</td>
                                <td><input type="text" /></td>
                            </tr>
                            <tr>
                                <td class="button" colspan="2">
                                    <a href="">Rental</a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url(); ?>assets/js/tampilan-mobil.js"></script>