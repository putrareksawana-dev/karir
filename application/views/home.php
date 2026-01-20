<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="icon" href="<?php echo base_url(); ?>/assets/img/ikon-annamiroh.ico" type="image/ico">
    <title>Yayasan An Namiroh - Creating World Class Leader</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7621df2a3d.js" crossorigin="anonymous"></script>
    
</head>
<body>
<div class="container">
    <div class="nav">
       
        <div class="i-menu">
            <i onclick="barMenu()" id="bar" class="fa-solid fa-bars fa-2x"></i>
            <i onclick="xmarkMenu()" id="xmark" class="fa-solid fa-xmark fa-2x"></i>
        </div>
        <div id="menu" class="menu">
            <a class="hr" href="<?php echo base_url('login'); ?>">Home</a>
            <a href="#step" onclick="smoothScroll('step')">Step by Step</a>
            <a href="<?php echo base_url('register'); ?>"><button>Sign Up</button></a>
        </div>
    </div>
    <div class="content">
        <div class="content-isi">
            <div class="head-left">
                <form class="login" method="post" action="<?= base_url('login'); ?>">
                    <h2>Login your Account</h2>
                    <p>Enter your Email & password to login</p>
                    
                    <?= $this->session->flashdata('message'); ?>
                    <div class="label">
                        <label id="labelEmail" for="email">Email</label>
                    </div>
                    <div id="inputEmail" class="input">
                        <i id="ikonEmail" class="fa-solid fa-envelope"></i>
                        <input onfocus="focusEmail()" onblur="blurEmail()" class="email" type="email" name="email" id="email" required> 
                    </div>
                    <div class="input-label"></div>
                    <div class="label">
                        <label id="labelPass" for="password">Password</label>
                    </div>
                    <div id="inputPass" class="input">
                        <i id="ikonPass" class="fa-solid fa-lock"></i>
                        <input onfocus="focusPass()" onblur="blurPass()" class="password" type="password" name="password" id="password" required> 
                    </div>

                    <span>Don't have account? <a href="<?php echo base_url('register'); ?>">Click Here!</a></span>

                    <input type="submit" value="Submit">
                </form>                 
                <!--<span>Ir. H. Muji Sutrisno</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
            </div>
            <div  class="head-right">
                <img class="image-web1" src="<?php echo base_url();?>/assets/img/3x2.png" alt="An Namiroh" type="image/png">
            </div>
        </div>
        <h1 id="step">Step by <c>Step</c></h1>
        <div class="content-end">
            <div class="end-left">
                <img class="image-web2" src="<?php echo base_url();?>/assets/img/web22.png" alt="An Namiroh" type="image/png">
            </div>
            <div class="end-right">
                <div class="end-isi">
                    <div class="dot"></div>
                </div>
                <div class="end-isi">
                    <div class="dot1"></div>
                    <div class="step">
                        <h1>01</h1>
                        <div class="text-p">
                        <p>Login terlebih dahulu, jika belum memiliki akun silahkan daftar terlebih dahulu.</p>
                        </div>
                    </div>
                </div>
                <div class="end-isi">
                    <div class="dot1"></div>
                    <div class="step">
                        <h1>02</h1>
                        <div class="text-p">
                        <p>Pilih lowongan yang tersedia.</p>
                        </div>
                    </div>
                </div>
                <div class="end-isi">
                    <div class="dot1"></div>
                    <div class="step">
                        <h1>03</h1>
                        <div class="text-p">
                            <p>
                            Siapkan dokumen seperti :
                            <ul>
                                <li>KTP</li>
                                <li>Foto 3x4</li>
                                <li>CV</li>
                                <li>Ijazah Terakhir</li>
                                <li>Transkrip Nilai</li>
                                </ul>
                            buat dalam satu file dengan format "pdf" dengan ukuran maksimal 2MB.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="end-isi">
                    <div class="dot1"></div>
                    <div class="step">
                        <h1>04</h1>
                        <div class="text-p">
                        <p>Masukkan data diri sesuai dengan inputan yang telah tersedia.</p>
                        </div>
                    </div>
                </div>
                <div class="end-isi">
                    <div class="dot1"></div>
                    <div class="step">
                        <h1>05</h1>
                        <div class="text-p">
                        <p>Silahkan di klik "Submit" selamat anda berhasil mendaftar.</p>
                        </div>
                    </div>
                </div>
                <div class="end-isi">
                    <div class="dot2"></div>
                </div>
            </div>
        </div>
    </div>
