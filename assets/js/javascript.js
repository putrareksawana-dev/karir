function focusEmail() {
    var inputEmail = document.getElementById('inputEmail');
    var labelEmail = document.getElementById('labelEmail');
    var ikonEmail = document.getElementById('ikonEmail');
    var inputPass = document.getElementById('inputPass');
    var labelPass = document.getElementById('labelPass');
    var ikonPass = document.getElementById('ikonPass');
    var currentColor = "#343a40";
    var targetColor = "#009B4C";
    var duration = 500;

    var startTime = null;

    function step(timestamp) {
        if (!startTime) startTime = timestamp;
        var progress = timestamp - startTime;

        var ease = easeOutCubic(progress / duration);

        var newColor = calculateColor(currentColor, targetColor, ease);

        inputEmail.style.borderColor = newColor;
        labelEmail.style.color = newColor;
        ikonEmail.style.color = newColor;
        inputPass.style.bordercolor = "#343a40";
        labelPass.style.color = "#343a40";
        ikonPass.style.color = "#343a40";

        if (progress < duration) {
            requestAnimationFrame(step);
        }
    }

    requestAnimationFrame(step);
}

function focusEmailDaftar() {
    var inputEmail = document.getElementById('inputEmail');
    var labelEmail = document.getElementById('labelEmail');
    var ikonEmail = document.getElementById('ikonEmail');
    var inputPass = document.getElementById('inputPass');
    var labelPass = document.getElementById('labelPass');
    var ikonPass = document.getElementById('ikonPass');
    var inputPhone = document.getElementById('inputPhone');
    var labelPhone = document.getElementById('labelPhone');
    var ikonPhone = document.getElementById('ikonPhone');
    var currentColor = "#343a40";
    var targetColor = "#009B4C";
    var duration = 500;

    var startTime = null;

    function step(timestamp) {
        if (!startTime) startTime = timestamp;
        var progress = timestamp - startTime;

        var ease = easeOutCubic(progress / duration);

        var newColor = calculateColor(currentColor, targetColor, ease);

        inputEmail.style.borderColor = newColor;
        labelEmail.style.color = newColor;
        ikonEmail.style.color = newColor;
        inputPass.style.bordercolor = "#343a40";
        labelPass.style.color = "#343a40";
        ikonPass.style.color = "#343a40";
        inputPhone.style.bordercolor = "#343a40";
        labelPhone.style.color = "#343a40";
        ikonPhone.style.color = "#343a40";


        if (progress < duration) {
            requestAnimationFrame(step);
        }
    }

    requestAnimationFrame(step);
}

function focusPass() {
    var inputEmail = document.getElementById('inputEmail');
    var labelEmail = document.getElementById('labelEmail');
    var ikonEmail = document.getElementById('ikonEmail');
    var inputPass = document.getElementById('inputPass');
    var labelPass = document.getElementById('labelPass');
    var ikonPass = document.getElementById('ikonPass');
    var currentColor = "#343a40";
    var targetColor = "#009B4C";
    var duration = 500;

    var startTime = null;

    function step(timestamp) {
        if (!startTime) startTime = timestamp;
        var progress = timestamp - startTime;

        var ease = easeOutCubic(progress / duration);

        var newColor = calculateColor(currentColor, targetColor, ease);

        inputPass.style.borderColor = newColor;
        labelPass.style.color = newColor;
        ikonPass.style.color = newColor;
        inputEmail.style.bordercolor = "#343a40";
        labelEmail.style.color = "#343a40";
        ikonEmail.style.color = "#343a40";

        if (progress < duration) {
            requestAnimationFrame(step);
        }
    }

    requestAnimationFrame(step);
}

function focusPassDaftar() {
    var inputEmail = document.getElementById('inputEmail');
    var labelEmail = document.getElementById('labelEmail');
    var ikonEmail = document.getElementById('ikonEmail');
    var inputPass = document.getElementById('inputPass');
    var labelPass = document.getElementById('labelPass');
    var ikonPass = document.getElementById('ikonPass');
    var inputPhone = document.getElementById('inputPhone');
    var labelPhone = document.getElementById('labelPhone');
    var ikonPhone = document.getElementById('ikonPhone');
    var currentColor = "#343a40";
    var targetColor = "#009B4C";
    var duration = 500;

    var startTime = null;

    function step(timestamp) {
        if (!startTime) startTime = timestamp;
        var progress = timestamp - startTime;

        var ease = easeOutCubic(progress / duration);

        var newColor = calculateColor(currentColor, targetColor, ease);

        inputPass.style.borderColor = newColor;
        labelPass.style.color = newColor;
        ikonPass.style.color = newColor;
        inputEmail.style.bordercolor = "#343a40";
        labelEmail.style.color = "#343a40";
        ikonEmail.style.color = "#343a40";
        inputPhone.style.bordercolor = "#343a40";
        labelPhone.style.color = "#343a40";
        ikonPhone.style.color = "#343a40";

        if (progress < duration) {
            requestAnimationFrame(step);
        }
    }

    requestAnimationFrame(step);
}

function focusPhoneDaftar() {
    var inputEmail = document.getElementById('inputEmail');
    var labelEmail = document.getElementById('labelEmail');
    var ikonEmail = document.getElementById('ikonEmail');
    var inputPass = document.getElementById('inputPass');
    var labelPass = document.getElementById('labelPass');
    var ikonPass = document.getElementById('ikonPass');
    var inputPhone = document.getElementById('inputPhone');
    var labelPhone = document.getElementById('labelPhone');
    var ikonPhone = document.getElementById('ikonPhone');
    var currentColor = "#343a40";
    var targetColor = "#009B4C";
    var duration = 500;

    var startTime = null;

    function step(timestamp) {
        if (!startTime) startTime = timestamp;
        var progress = timestamp - startTime;

        var ease = easeOutCubic(progress / duration);

        var newColor = calculateColor(currentColor, targetColor, ease);

        inputPhone.style.borderColor = newColor;
        labelPhone.style.color = newColor;
        ikonPhone.style.color = newColor;
        inputEmail.style.bordercolor = "#343a40";
        labelEmail.style.color = "#343a40";
        ikonEmail.style.color = "#343a40";
        inputPass.style.bordercolor = "#343a40";
        labelPass.style.color = "#343a40";
        ikonPass.style.color = "#343a40";

        if (progress < duration) {
            requestAnimationFrame(step);
        }
    }

    requestAnimationFrame(step);
}

function easeOutCubic(t) {
    return (t = t - 1) * t * t + 1;
}

function calculateColor(startColor, endColor, progress) {
    var startRGB = hexToRgb(startColor);
    var endRGB = hexToRgb(endColor);

    var r = Math.round(startRGB.r + (endRGB.r - startRGB.r) * progress);
    var g = Math.round(startRGB.g + (endRGB.g - startRGB.g) * progress);
    var b = Math.round(startRGB.b + (endRGB.b - startRGB.b) * progress);

    return rgbToHex(r, g, b);
}

function hexToRgb(hex) {
    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
}

function rgbToHex(r, g, b) {
    return "#" + ((1 << 24) | (r << 16) | (g << 8) | b).toString(16).slice(1);
}

function blurEmail() {
    var input = document.getElementById('inputEmail');
    input.style.borderColor = "#b0b0b0";
    var label = document.getElementById('labelEmail');
    label.style.color = "#343a40";
    var ikon = document.getElementById('ikonEmail');
    ikon.style.color = "#343a40";
}

function blurPass() {
    var input = document.getElementById('inputPass');
    input.style.borderColor = "#b0b0b0";
    var label = document.getElementById('labelPass');
    label.style.color = "#343a40";
    var ikon = document.getElementById('ikonPass');
    ikon.style.color = "#343a40";
}

function blurPhone() {
    var input = document.getElementById('inputPhone');
    input.style.borderColor = "#b0b0b0";
    var label = document.getElementById('labelPhone');
    label.style.color = "#343a40";
    var ikon = document.getElementById('ikonPhone');
    ikon.style.color = "#343a40";
}

function barMenu() {
    var bar = document.getElementById('bar');
    var xmark = document.getElementById('xmark');
    var menu = document.getElementById('menu');
    bar.style.display = "none";
    xmark.style.display = "block";
    menu.style.display = "flex";
}

function xmarkMenu() {
    var bar = document.getElementById('bar');
    var xmark = document.getElementById('xmark');
    var menu = document.getElementById('menu');
    bar.style.display = "block";
    xmark.style.display = "none";
    menu.style.display = "none";
    
}

function smoothScroll(targetId) {
    var targetElement = document.getElementById(targetId);
    var targetPosition = targetElement.getBoundingClientRect().top;
    var startPosition = window.pageYOffset;
    var distance = targetPosition - startPosition;
    var duration = 500;
    var startTime = null;

    function step(timestamp) {
        if (!startTime) startTime = timestamp;
        var progress = timestamp - startTime;

        var ease = easeOutCubic(progress / duration); // Fungsi easing (bisa diganti dengan fungsi easing lain)

        window.scrollTo(0, startPosition + distance * ease);

        if (progress < duration) {
            requestAnimationFrame(step);
        }
    }

    requestAnimationFrame(step);
}

function klikArrow() {
    var sbar = document.getElementById('sidebar');
    var isi = document.getElementById('isi');
    var wel = document.getElementById('welcome');
    var arrow = document.getElementById('arrow');
    var bars = document.getElementById('bars');
    var tform = document.getElementById('teksForm');
    //var tstatus = document.getElementById('teksStatus');
    //var tstatusg = document.getElementById('teksStatusGreen');
    var tformg = document.getElementById('teksFormGreen');
    arrow.style.display = "none";
    bars.style.display = "block";
    isi.style.width = "93%";
    sbar.style.width = "7%";
    wel.style.display = "none";
    tform.style.display = "none";
    //tstatus.style.display = "none";
    //tstatusg.style.display = "none";
    tformg.style.display = "none";
}

function klikBars() {
    var sbar = document.getElementById('sidebar');
    var isi = document.getElementById('isi');
    var wel = document.getElementById('welcome');
    var arrow = document.getElementById('arrow');
    var bars = document.getElementById('bars');
    var tform = document.getElementById('teksForm');
    //var tstatus = document.getElementById('teksStatus');
    //var tstatusg = document.getElementById('teksStatusGreen');
    var tformg = document.getElementById('teksFormGreen');
    arrow.style.display = "block";
    bars.style.display = "none";
    isi.style.width = "75%";
    sbar.style.width = "25%";
    wel.style.display = "block";
    tform.style.display = "block";
    //tstatus.style.display = "block";
    //tstatusg.style.display = "block";
    tformg.style.display = "block";
}

function klikForm() {
    var isii = document.getElementById('isi-isi');
    var isif = document.getElementById('isi-form');
    var isis = document.getElementById('isi-status');
    var titlef = document.getElementById('titleForm');
    var titlefg = document.getElementById('titleFormGreen');
    var ikonfg = document.getElementById('ikonFormGreen');
    var teksfg = document.getElementById('teksFormGreen');
    //var titlesg = document.getElementById('titleStatusGreen');
    //var titles = document.getElementById('titleStatus');

    isii.style.display = "none";
    isif.style.display = "block";
    titlefg.style.display = "flex";
    ikonfg.style.color = "#009B4C";
    teksfg.style.color = "#009B4C";
    titlef.style.display = "none";
    isis.style.display = "none";
    //titles.style.display = "flex";
    //titlesg.style.display = "none";
}

function hoverForm() {
    var jform = document.getElementById('titleForm');
    var iform = document.getElementById('ikonForm');
    var tform = document.getElementById('teksForm');
    jform.style.backgroundColor = "#d7ffea";
    iform.style.color = "#009B4C";
    tform.style.color = "#009B4C";
}

function notForm() {
    var jform = document.getElementById('titleForm');
    var iform = document.getElementById('ikonForm');
    var tform = document.getElementById('teksForm');
    jform.style.backgroundColor = "white";
    iform.style.color = "#343a40";
    tform.style.color = "#343a40";
}

/*function klikStatus() {
    var sisi = document.getElementById('sidebar-isi');
    var isii = document.getElementById('isi-isi');
    var isif = document.getElementById('isi-form');
    //var isis = document.getElementById('isi-status');
    var titlef = document.getElementById('titleForm');
    //var titles = document.getElementById('titleStatus');
    var titlefg = document.getElementById('titleFormGreen');
    //var titlesg = document.getElementById('titleStatusGreen');
    //var ikonsg = document.getElementById('ikonStatusGreen');
    //var tekssg = document.getElementById('teksStatusGreen');
    
    isii.style.display = "none";
    isif.style.display = "none";
    titlefg.style.display = "none";
    titlesg.style.display = "flex";
    ikonsg.style.color = "#009B4C";
    tekssg.style.color = "#009B4C";
    titlef.style.display = "flex";
    titles.style.display = "none";
    isis.style.display = "block";
}*/

/*function hoverStatus() {
    var jstatus = document.getElementById('titleStatus');
    var istatus = document.getElementById('ikonStatus');
    var tstatus = document.getElementById('teksStatus');
    jstatus.style.backgroundColor = "#d7ffea";
    istatus.style.color = "#009B4C";
    tstatus.style.color = "#009B4C";
}

function notStatus() {
    var jstatus = document.getElementById('titleStatus');
    var istatus = document.getElementById('ikonStatus');
    var tstatus = document.getElementById('teksStatus');
    jstatus.style.backgroundColor = "white";
    istatus.style.color = "#343a40";
    tstatus.style.color = "#343a40";
}*/

console.log("JavaScript terhubung!");

function checkViewportWidth() {
    if (window.innerWidth < 420) {
      console.log("Lebar viewport kurang dari 420 piksel");
    } else {
      console.log("Lebar viewport lebih besar atau sama dengan 420 piksel");
    }
}
  
// Cek saat halaman dimuat
checkViewportWidth();
  
// Cek saat lebar viewport diubah
 window.addEventListener("resize", checkViewportWidth);
