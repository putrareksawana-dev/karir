<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/ikon-annamiroh.ico" type="image/ico">
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
       <!-- <div class="logo">
            <a href="<?php echo base_url('login'); ?>"><img class="image-logo" src="<?php echo base_url();?>assets/img/web22.png" type="image/png"></a>
            <a href="<?php echo base_url('login'); ?>"><img class="image-logo-hp" src="<?php echo base_url();?>assets/img/web22.png" type="image/png"></a>
        </div>
-->
        <div class="menu">
            <a href="<?php echo base_url('login'); ?>">Home</a>
        </div>
    </div>
    <div class="content">
    <form action="<?php echo base_url('Page/register'); ?>" method="post" class="regis">
            <h2>Create Your Account</h2>
            <p>Enter your personal details to create account</p>
            <div class="label">
                <label id="labelEmail" for="email">Email</label>
            </div>
            <div id="inputEmail" class="input">
                <i id="ikonEmail" class="fa-solid fa-envelope"></i>
                <input onfocus="focusEmailDaftar()" onblur="blurEmail()" class="email" type="email" name="email" id="email" required> 
            </div>
            <div class="input-label"></div>
            <div class="label">
                <label id="labelPhone" for="Phone">Phone Number</label>
            </div>
            <div id="inputPhone" class="input">
                <i id="ikonPhone" class="fa-solid fa-phone"></i>
                <input onfocus="focusPhoneDaftar()" onblur="blurPhone()" class="phone" type="text" name="phone" id="phone" required> 
            </div>
            <div class="input-label"></div>
            <div class="label">
                <label id="labelPass" for="password">Password</label>
            </div>
            <div id="inputPass" class="input">
                <i id="ikonPass" class="fa-solid fa-lock"></i>
                <input onfocus="focusPassDaftar()" onblur="blurPass()" class="password" type="password" name="password" id="password" required> 
            </div>
            <div class="input-label"></div>
            <input type="submit" value="Submit">
            <div class="input-label"></div>
            <p>Already have account? <a href="<?php echo base_url('login'); ?>">Log in</a></p>
        </form>
    </div>
    
<div class="awa">
    
    </div>
    