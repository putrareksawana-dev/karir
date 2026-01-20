<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="HandheldFriendly" content="true">
   <title>Putra Reksawana</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7621df2a3d.js" crossorigin="anonymous"></script>
    
</head>
<body>
<div class="container">
<div class="nav">
   
    <button id="logout-button">Log Out</button>
    <script>
document.getElementById("logout-button").addEventListener("click", function() {
    window.location.href = "<?= base_url('Dashboard/logout'); ?>";
});
</script>
</div>
<div class="content-hiring">
    <div id="sidebar" class="sidebar">
        <div id="sidebar-isi" class="sidebar-isi">
            <div class="bar-isi-nama">
                <p id="welcome">Welcome, <?= $data['email']; ?></p>
            </div>
            <div onclick="klikForm()" onmouseover="hoverForm()" onmouseout="notForm()" id="titleForm" class="bar-isi">
                <i id="ikonForm" class="fa-solid fa-pen-to-square"></i>
                <p id="teksForm">Registration Form</p>
            </div>
            <div id="titleFormGreen" class="bar-isi-green">
                <i id="ikonFormGreen" class="fa-solid fa-pen-to-square"></i>
                <p id="teksFormGreen">Registration Form</p>
            </div>
            <!--<div onclick="klikStatus()" onmouseover="hoverStatus()" onmouseout="notStatus()" id="titleStatus" class="bar-isi">
                <i id="ikonStatus" class="fa-solid fa-folder-open"></i>
                <p id="teksStatus">Registration Status</p>
            </div>
            <div id="titleStatusGreen" class="bar-isi-green">
                <i id="ikonStatusGreen" class="fa-solid fa-folder-open"></i>
                <p id="teksStatusGreen">Registration Status</p>
            </div>-->
        </div>
    </div>
    <div id="isi" class="isi">
        <div id="isi-isi" class="isi-isi">
        <?= $this->session->flashdata('message'); ?>
            <div class="jud">
                <h1>Welcome to Hiring </h1>
                <!-- <img class="image-teks" src="<?php echo base_url();?>assets/img/web22.png" type="image/png"> -->
            </div>
           <!-- <img class="image-form1" src="<?php echo base_url();?>assets/img/hiring.png"  type="image/png"> -->
        </div>
        <div id="isi-form" class="isi-form">
            <h1>Registration Form</h1>
            <form action="<?= base_url('Dashboard/tambah_pelamar'); ?>" method="post" class="form" enctype="multipart/form-data"> 

                <div class="inputLabel">
                    <label for="name">Full Name</label>
                    <input type="text" name="full_name" id="full_name" required>
                </div>
                <div class="inputLabel">
                    <label for="ktp">Identity Card<br>Number (KTP)</label>
                    <input type="number" name="no_ktp" id="no_ktp" required>
                </div>
                <div class="inputLabel">
                    <label for="tempatUltah">Place of<br>Birth</label>
                    <input type="text" name="tempat_kelahiran" id="tempat_kelahiran" required>
                </div>
                <div class="inputLabel">
                    <label for="tanggalUltah">Date of<br>Birth</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
                </div>
                <div class="inputLabel">
                    <label for="alamat">Address</label>
                    <input type="textarea" name="alamat" id="alamat" required>
                </div>
                <div class="inputLabel">
                    <label for="hp">Phone Number</label>
                    <input type="number" name="no_telp" id="no_telp" required>
                </div>
                <div class="inputLabel">
                    <label for="graduation">Year of Graduation</label>
                    <input type="text" name="tahun_kelulusan" id="tahun_kelulusan" required>
                </div>
                <div class="inputLabel">
                    <label for="kuliah">Course of Study/<br>Faculty/University</label>
                    <input type="text" name="program_studi" id="program_studi" required>
                </div>
                <div class="inputLabel">
                    <label for="pengalaman">Experience</label>
                    <input type="textarea" name="pengalaman" id="pengalaman" required>
                </div>
                <div class="inputLabel">
                    <label for="file">Attachment *KTP,<br>Ijazah, Photo in 1 pdf<br>(Max. 2 MB)</label>
                    <input type="file" name="foto" id="foto" required>
                </div>
                <div class="inputLabel">
                    <label>Gender</label>
                    <div class="jk">
                        <div class="male">
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="pria" required>
                        <label for="pria">Male</label>
                        </div>
                        <div class="female">
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="wanita">
                        <label for="wanita">Female</label>
                        </div>
                    </div>
                </div>


                <div class="inputLabel">
                    <label for="lowongan">Position</label>
                    <select name="position" id="position">
                        <option value="#">Choose Position</option>
                        <option value="Video Editor">Video Editor</option>
                        <!--<option value="Guru Daycare">Guru Daycare</option>-->
                        <!--<option value="Guru Alquran">Guru Alquran</option>-->
                        <option value="Driver">Driver</option>
                    </select>
                </div>
                <!--
                <div class="inputLabel">
                    <label for="lowongan">Unit</label>
                    <select name="unit" id="unit">
                        <option value="#">Choose Unit</option>
                        <option value="TK">TK</option>
                    </select>
                </div>
                -->
                <input type="submit" value="Submit">
              
           </form> 
        </div>
        <div id="isi-status" class="isi-status">
            <h1>Registration Status</h1>
        </div>
    </div>
</div>
