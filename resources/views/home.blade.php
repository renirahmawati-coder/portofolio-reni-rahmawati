<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reni Rahmawati</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

<style>
html{
scroll-behavior:smooth;
}

body{
font-family:Arial, Helvetica, sans-serif;
overflow-x:hidden;
transition:.4s;
position:relative;
}

/* ================= DARK MODE ================= */
body.dark{
background:
linear-gradient(rgba(34,211,238,.08) 1px, transparent 1px),
linear-gradient(90deg, rgba(34,211,238,.08) 1px, transparent 1px),
radial-gradient(circle at top left, rgba(34,211,238,.25), transparent 35%),
radial-gradient(circle at bottom right, rgba(59,130,246,.20), transparent 30%),
linear-gradient(135deg,#020617,#0f172a,#164e63);
background-size:40px 40px,40px 40px,auto,auto,auto;
color:white;
}

body.dark::before{
content:"";
position:fixed;
inset:0;
pointer-events:none;
opacity:.15;
background:
repeating-linear-gradient(
-45deg,
transparent 0px,
transparent 35px,
rgba(34,211,238,.35) 36px,
transparent 37px
);
animation:moveLines 10s linear infinite;
z-index:-1;
}

body.dark #particles{
position:fixed;
inset:0;
z-index:-2;
overflow:hidden;
}

/* ================= LIGHT MODE ================= */
body.light{
background:
linear-gradient(rgba(100,116,139,.10) 1px, transparent 1px),
linear-gradient(90deg, rgba(100,116,139,.10) 1px, transparent 1px),
radial-gradient(circle at top left, rgba(34,211,238,.10), transparent 35%),
radial-gradient(circle at bottom right, rgba(59,130,246,.08), transparent 35%),
linear-gradient(135deg,#dbe4ee,#cbd5e1,#b8c4d4);
background-size:40px 40px,40px 40px,auto,auto,auto;
color:#0f172a;
}

body.light::before{
content:"";
position:fixed;
inset:0;
pointer-events:none;
opacity:.07;
background:
repeating-linear-gradient(
-45deg,
transparent 0px,
transparent 32px,
rgba(34,211,238,.20) 33px,
transparent 34px
);
animation:moveLines 14s linear infinite;
z-index:-1;
}

body.light #particles{
position:fixed;
inset:0;
z-index:-2;
background:
radial-gradient(circle at 25% 30%, rgba(255,255,255,.35), transparent 40%),
radial-gradient(circle at 75% 70%, rgba(255,255,255,.28), transparent 45%);
animation:cloudMove 70s linear infinite;
}

/* ================= ANIMATION ================= */
@keyframes moveLines{
from{transform:translateX(0);}
to{transform:translateX(80px);}
}

.dot{
position:absolute;
width:2px;
height:2px;
background:#22d3ee;
border-radius:50%;
opacity:.7;
animation:starMove linear infinite;
}

@keyframes starMove{
0%{transform:translateY(0);opacity:.7;}
100%{transform:translateY(-100vh);opacity:0;}
}

@keyframes cloudMove{
from{background-position:0 0;}
to{background-position:1000px 0;}
}

/* ================= CARD ================= */
.card{
background:rgba(255,255,255,.08);
backdrop-filter:blur(12px);
border:1px solid rgba(255,255,255,.08);
transition:.4s;
}

.card:hover{
transform:translateY(-10px) scale(1.03);
box-shadow:0 0 30px rgba(34,211,238,.4);
}

body.light .card{
background:rgba(255,255,255,.45);
border:1px solid rgba(255,255,255,.35);
box-shadow:0 10px 25px rgba(15,23,42,.06);
backdrop-filter:blur(14px);
}

body.light .card:hover{
box-shadow:0 18px 35px rgba(15,23,42,.10);
}

/* ================= NAVBAR ================= */
.glass{
background:rgba(0,0,0,.35);
backdrop-filter:blur(14px);
}

body.light .glass{
background:rgba(255,255,255,.45);
border-bottom:1px solid rgba(255,255,255,.35);
backdrop-filter:blur(18px);
}

/* ================= TEXT ================= */
body.light .text-gray-300{color:#334155 !important;}
body.light .text-gray-400{color:#475569 !important;}
body.light .text-white{color:#0f172a !important;}
body.light .text-cyan-400{color:#0891b2 !important;}
body.light .text-cyan-300{color:#0ea5e9 !important;}

/* ================= CURSOR ================= */
.cursor{
width:25px;
height:25px;
background:#22d3ee;
border-radius:50%;
position:fixed;
pointer-events:none;
filter:blur(18px);
z-index:9999;
}

body.light .cursor{
background:#06b6d4;
}

/* ================= REVEAL ================= */
.reveal{
opacity:0;
transform:translateY(50px);
transition:1s;
}

.reveal.show{
opacity:1;
transform:translateY(0);
}

/* ================= TYPING ================= */
.typing{
display:inline-block;
overflow:hidden;
white-space:nowrap;
border-right:3px solid #22d3ee;
max-width:0;
animation:
typing 4s steps(50,end) forwards,
blink .7s infinite;
}

@keyframes typing{
from{max-width:0}
to{max-width:50ch;}
}

@keyframes blink{
0%,100%{border-color:transparent;}
50%{border-color:#22d3ee;}
}

/* ================= TIMELINE ================= */
.timeline{
position:relative;
margin-left:20px;
}

.timeline::before{
content:"";
position:absolute;
left:0;
top:0;
width:3px;
height:100%;
background:#22d3ee;
opacity:.4;
}

body.light .timeline::before{
background:#0891b2;
opacity:.35;
}

.timeline-item{
position:relative;
margin-bottom:40px;
padding-left:40px;
}

.timeline-dot{
position:absolute;
left:-9px;
top:10px;
width:18px;
height:18px;
background:#22d3ee;
border-radius:50%;
box-shadow:0 0 15px #22d3ee;
}

body.light .timeline-dot{
background:#06b6d4;
box-shadow:0 0 12px rgba(6,182,212,.35);
}

.timeline-content{
transition:.4s;
}

.timeline-content:hover{
transform:translateX(10px);
box-shadow:0 0 25px rgba(34,211,238,.4);
}

/* ================= CERTIFICATE (SUDAH DISESUAIKAN) ================= */
.cert-card{
display:block;
border-radius:22px;
overflow:hidden;
text-decoration:none;
transition:.35s;
backdrop-filter:blur(14px);
position:relative;
}

body.dark .cert-card{
background:rgba(255,255,255,.08);
border:1px solid rgba(255,255,255,.08);
box-shadow:0 0 20px rgba(34,211,238,.10);
}

body.light .cert-card{
background:rgba(255,255,255,.45);
border:1px solid rgba(255,255,255,.35);
box-shadow:0 10px 25px rgba(15,23,42,.06);
}

.cert-card:hover{
transform:translateY(-10px) scale(1.02);
}

body.dark .cert-card:hover{
box-shadow:0 0 30px rgba(34,211,238,.35);
}

body.light .cert-card:hover{
box-shadow:0 18px 35px rgba(15,23,42,.10);
}

.pdf-thumb{
width:100%;
height:220px;
background:#fff;
pointer-events:none;
border-bottom:1px solid rgba(148,163,184,.15);
}

.cert-card h3{
font-size:18px;
font-weight:700;
margin-bottom:6px;
line-height:1.4;
}

body.dark .cert-card h3{color:white;}
body.light .cert-card h3{color:#0f172a;}

.cert-card p{
font-size:14px;
line-height:1.6;
min-height:45px;
}

body.dark .cert-card p{color:#cbd5e1;}
body.light .cert-card p{color:#475569;}

.year{
display:inline-block;
margin:12px 0 15px;
padding:5px 13px;
border-radius:50px;
font-size:12px;
font-weight:700;
color:#22d3ee;
border:1px solid rgba(34,211,238,.30);
}

.btn-cert{
text-align:center;
padding:12px;
border-radius:14px;
font-weight:700;
transition:.3s;
}

body.dark .btn-cert{
border:1px solid rgba(34,211,238,.20);
color:#22d3ee;
background:rgba(34,211,238,.05);
}

body.light .btn-cert{
background:rgba(255,255,255,.50);
color:#0891b2;
border:1px solid rgba(8,145,178,.18);
}

.cert-card:hover .btn-cert{
background:#22d3ee;
color:black;
box-shadow:0 0 20px rgba(34,211,238,.35);
}

body.light #certificate h2{
color:#0891b2 !important;
}

body.light #certificate p{
color:#475569 !important;
}

/* ================= RESPONSIVE ================= */
@media(max-width:768px){
.pdf-thumb{
height:180px;
}

.cert-card h3{
font-size:16px;
}
}

</style>

</head>

<body class="dark">




<!-- ================= NAVBAR PREMIUM MELENGKUNG ================= -->
<nav class="fixed top-5 left-1/2 -translate-x-1/2 z-50 w-[94%] max-w-7xl">

<div class="glass px-7 py-4 rounded-full border border-cyan-400/20
shadow-[0_0_35px_rgba(34,211,238,.18)]
flex items-center justify-between gap-5">

<!-- KIRI -->
<div class="flex flex-col leading-tight">

<!-- NAMA -->
<h1 class="text-[24px] md:text-[28px] font-bold text-cyan-400 tracking-wide">
Reni Rahmawati
</h1>

</div>

<!-- MENU DESKTOP -->
<div class="hidden md:flex items-center gap-8 text-[16px] font-medium">

<a href="#about" class="hover:text-cyan-400 transition">About</a>
<a href="#skills" class="hover:text-cyan-400 transition">Skills</a>
<a href="#experience" class="hover:text-cyan-400 transition">Experience</a>
<a href="#certificate" class="hover:text-cyan-400 transition">Certificate</a>
<a href="#contact" class="hover:text-cyan-400 transition">Contact</a>

</div>

<!-- KANAN -->
<div class="flex items-center gap-3">

<!-- TOGGLE -->
<button onclick="toggleTheme()" id="themeBtn"
class="w-11 h-11 rounded-full bg-cyan-400 text-black
flex items-center justify-center text-lg
hover:scale-110 transition
shadow-[0_0_18px_rgba(34,211,238,.35)]">

<i class="fas fa-moon"></i>

</button>

<!-- MOBILE -->
<button onclick="menuToggle()"
class="md:hidden w-11 h-11 rounded-full border border-cyan-400/20
text-cyan-300 text-lg hover:bg-cyan-400/10 transition">

<i class="fas fa-bars"></i>

</button>

</div>

</div>

<!-- MOBILE MENU -->
<div id="mobileMenu"
class="hidden mt-3 glass rounded-3xl p-5 space-y-4 text-center border border-cyan-400/10">

<a href="#about" class="block hover:text-cyan-400">About</a>
<a href="#skills" class="block hover:text-cyan-400">Skills</a>
<a href="#experience" class="block hover:text-cyan-400">Experience</a>
<a href="#certificate" class="block hover:text-cyan-400">Certificate</a>
<a href="#contact" class="block hover:text-cyan-400">Contact</a>

</div>

</nav>
<!-- LOADER -->
<div id="loader"
class="fixed inset-0 bg-slate-950 flex items-center justify-center z-50">

<div class="w-16 h-16 border-4 border-cyan-400 border-t-transparent rounded-full animate-spin"></div>

</div>

<!-- PARTICLES -->
<div id="particles"></div>


<!-- HERO -->
<section class="min-h-screen flex items-center">

<div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

<div class="reveal">

<h1 class="text-6xl font-bold mb-4">
Reni Rahmawati
</h1>

<h2 class="text-2xl text-cyan-300 mb-6 typing">
Mahasiswa Teknik Informatika Politeknik Negeri Jember
</h2>

<p class="leading-8 mb-8">
Web Development, Networking,
Troubleshooting, UI Design.
</p>

<a href="{{ asset('cv/CV RENI RAHMAWATI.pdf') }}"
target="_blank"
class="bg-cyan-400 text-black px-6 py-3 rounded-full font-bold hover:scale-105 transition inline-block">
Download CV
</a>

</div>

<!-- FOTO PROFILE -->
<div class="flex justify-center reveal">

<button onclick="openPhoto()"
class="group relative w-80 h-80 rounded-full overflow-hidden border-4 border-cyan-400 shadow-2xl block">

<img src="{{ asset('images/foto-reni.jpeg') }}"
class="w-full h-full object-cover transition duration-500 group-hover:scale-110">

<!-- Overlay -->
<div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
<div class="w-14 h-14 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white text-2xl">
<i class="fas fa-search-plus"></i>
</div>
</div>

</button>

</div>

<!-- POPUP FOTO -->
<div id="photoModal"
class="fixed inset-0 bg-black/80 backdrop-blur-sm hidden z-50 flex items-center justify-center p-6">

<div class="relative">

<!-- Tombol Close -->
<button onclick="closePhoto()"
class="absolute -top-4 -right-4 w-10 h-10 rounded-full bg-cyan-400 text-black font-bold text-xl hover:scale-110 transition">
×
</button>

<!-- Foto tetap bulat -->
<img src="{{ asset('images/foto-reni.jpeg') }}"
class="w-96 h-96 max-w-[90vw] max-h-[90vw] rounded-full object-cover border-4 border-cyan-400 shadow-[0_0_40px_rgba(34,211,238,.45)]">

</div>

</div>

</section>

<!-- ABOUT -->
<section id="about" class="max-w-6xl mx-auto px-6 py-24 reveal">

<!-- HEADER -->
<div class="flex items-center gap-4 mb-10">

<div class="w-14 h-14 rounded-2xl bg-cyan-400/10 flex items-center justify-center">
<i class="fas fa-user text-cyan-400 text-2xl"></i>
</div>

<div>
<p class="text-cyan-400 font-semibold tracking-widest uppercase text-sm">
Profile
</p>

<h2 class="text-4xl font-bold text-cyan-400">
About Me
</h2>
</div>

</div>

<!-- CONTENT -->
<div class="grid md:grid-cols-2 gap-10 items-center">

<!-- TEXT -->
<div>

<p class="leading-8 text-lg text-gray-300 mb-6">
Saya mahasiswa Teknik Informatika di Politeknik Negeri Jember yang memiliki latar belakang pendidikan Teknik Komputer dan Jaringan dari SMK Negeri 1 Nganjuk. Saya memiliki kemampuan dalam bidang jaringan komputer serta pemecahan masalah teknis secara sistematis.
</p>

<p class="leading-8 text-lg text-gray-300 mb-6">
Selama menempuh pendidikan, saya terus memperdalam kompetensi di bidang pemrograman, pengembangan sistem, dan teknologi digital. Saya juga memiliki kemampuan komunikasi yang baik serta mampu bekerja secara individu maupun dalam tim.
</p>

<p class="leading-8 text-lg text-gray-300">
Saya memiliki motivasi tinggi untuk terus belajar, berkembang, dan memberikan kontribusi terbaik di dunia teknologi informasi.
</p>

</div>

<!-- SIDE CARD -->
<div class="grid gap-5">

<div class="card p-5 rounded-2xl hover:scale-105 transition">
<div class="flex items-center gap-4">
<i class="fas fa-code text-cyan-400 text-xl"></i>
<div>
<h3 class="font-bold">Programming</h3>
<p class="text-sm text-gray-400">Web Development & System Logic</p>
</div>
</div>
</div>

<div class="card p-5 rounded-2xl hover:scale-105 transition">
<div class="flex items-center gap-4">
<i class="fas fa-network-wired text-cyan-400 text-xl"></i>
<div>
<h3 class="font-bold">Networking</h3>
<p class="text-sm text-gray-400">Installation & Troubleshooting</p>
</div>
</div>
</div>

<div class="card p-5 rounded-2xl hover:scale-105 transition">
<div class="flex items-center gap-4">
<i class="fas fa-lightbulb text-cyan-400 text-xl"></i>
<div>
<h3 class="font-bold">Soft Skills</h3>
<p class="text-sm text-gray-400">Teamwork, Communication, Adaptability</p>
</div>
</div>
</div>

</div>

</div>

</section>

<!-- SKILLS -->
<section id="skills" class="max-w-7xl mx-auto px-6 py-20">

<!-- HEADER -->
<div class="text-center mb-12 reveal">

<div class="inline-flex items-center gap-3 px-4 py-2 rounded-full card mb-4">
<i class="fas fa-laptop-code text-cyan-400 text-sm"></i>
<p class="text-cyan-400 font-semibold tracking-widest uppercase text-xs">
Skills
</p>
</div>

<h2 class="text-4xl md:text-5xl font-bold mb-4">
My <span class="text-cyan-400">Skills</span>
</h2>

<p class="text-gray-300 text-sm max-w-xl mx-auto leading-7">
Keahlian yang saya kuasai dalam bidang teknologi,
komunikasi, dan pengembangan diri.
</p>

</div>

<!-- CONTENT -->
<div class="grid md:grid-cols-2 gap-5">

<!-- TECHNICAL -->
<div class="card p-7 rounded-3xl reveal h-fit">

<div class="flex items-center gap-4 mb-5">
<div class="w-14 h-14 rounded-2xl bg-cyan-400/10 flex items-center justify-center">
<i class="fas fa-microchip text-cyan-400 text-xl"></i>
</div>

<div>
<h3 class="text-xl font-bold">Technical Skills</h3>
<p class="text-sm text-gray-400">Tools & Technology</p>
</div>

</div>

<div class="grid grid-cols-2 gap-3 text-sm auto-rows-min">

<p class="card p-3 rounded-xl flex items-center gap-2">
<i class="fab fa-html5 text-orange-500"></i> HTML / CSS
</p>

<p class="card p-3 rounded-xl flex items-center gap-2">
<i class="fab fa-php text-indigo-400"></i> PHP Laravel
</p>

<p class="card p-3 rounded-xl flex items-center gap-2">
<i class="fas fa-database text-cyan-400"></i> MySQL
</p>

<p class="card p-3 rounded-xl flex items-center gap-2">
<i class="fab fa-js text-yellow-400"></i> JavaScript
</p>

<p class="card p-3 rounded-xl flex items-center gap-2">
<i class="fab fa-figma text-pink-400"></i> Figma
</p>

<p class="card p-3 rounded-xl flex items-center gap-2">
<i class="fas fa-vial text-green-400"></i> Katalon
</p>

<p class="card p-3 rounded-xl flex items-center gap-2">
<i class="fas fa-network-wired text-green-400"></i> Networking
</p>

<p class="card p-3 rounded-xl flex items-center gap-2">
<i class="fas fa-code text-cyan-400"></i> VS Code
</p>

</div>

</div>

<!-- RIGHT -->
<div class="grid gap-5">

<!-- LANGUAGE -->
<div class="card p-7 rounded-3xl reveal h-fit">

<div class="flex items-center gap-4 mb-5">
<div class="w-14 h-14 rounded-2xl bg-cyan-400/10 flex items-center justify-center">
<i class="fas fa-language text-cyan-400 text-xl"></i>
</div>

<div>
<h3 class="text-xl font-bold">Languages</h3>
<p class="text-sm text-gray-400">Communication Ability</p>
</div>

</div>

<div class="space-y-3 text-sm">

<p class="card p-3 rounded-xl flex items-center justify-between">
<span><i class="fas fa-flag text-red-400 mr-2"></i>Bahasa Indonesia</span>
<span class="text-cyan-400 font-semibold">Native</span>
</p>

<p class="card p-3 rounded-xl flex items-center justify-between">
<span><i class="fas fa-earth-asia text-blue-400 mr-2"></i>English</span>
<span class="text-cyan-400 font-semibold">Intermediate</span>
</p>

</div>

</div>

<!-- SOFT SKILL -->
<div class="card p-7 rounded-3xl reveal h-fit">

<div class="flex items-center gap-4 mb-5">
<div class="w-14 h-14 rounded-2xl bg-cyan-400/10 flex items-center justify-center">
<i class="fas fa-brain text-cyan-400 text-xl"></i>
</div>

<div>
<h3 class="text-xl font-bold">Soft Skills</h3>
<p class="text-sm text-gray-400">Personal Strength</p>
</div>

</div>

<div class="grid grid-cols-2 gap-3 text-sm auto-rows-min">

<p class="card p-3 rounded-xl flex items-center gap-2">
<i class="fas fa-lightbulb text-yellow-400"></i> Problem Solving
</p>

<p class="card p-3 rounded-xl flex items-center gap-2">
<i class="fas fa-users text-blue-400"></i> Teamwork
</p>

<p class="card p-3 rounded-xl flex items-center gap-2">
<i class="fas fa-comments text-cyan-400"></i> Communication
</p>

<p class="card p-3 rounded-xl flex items-center gap-2">
<i class="fas fa-clock text-pink-400"></i> Time Management
</p>

<p class="card p-3 rounded-xl flex items-center gap-2">
<i class="fas fa-arrows-rotate text-green-400"></i> Adaptability
</p>

<p class="card p-3 rounded-xl flex items-center gap-2">
<i class="fas fa-star text-cyan-400"></i> Leadership
</p>

</div>

</div>

</div>

</div>

</section>

<!-- ================= EXPERIENCE (VERSI ICON PREMIUM) ================= -->
<section id="experience" class="max-w-5xl mx-auto px-6 py-20">

<div class="flex items-center gap-3 mb-14 reveal">
  <div class="w-12 h-12 rounded-2xl bg-cyan-400/10 flex items-center justify-center">
    <i class="fas fa-briefcase text-cyan-400 text-xl"></i>
  </div>

  <div>
    <p class="text-cyan-400 font-semibold tracking-widest uppercase text-sm">
      Journey
    </p>
    <h2 class="text-4xl font-bold text-cyan-400">
      Experience
    </h2>
  </div>
</div>

<div class="timeline">

<!-- UIUX -->
<div class="timeline-item reveal">
<div class="timeline-dot"></div>

<div class="timeline-content card p-6 rounded-2xl">
<h3 class="font-bold text-lg text-cyan-400 flex items-center gap-2">
<i class="fas fa-pen-ruler"></i>
UI/UX Designer | Aplikasi MOKAPOS
</h3>

<p class="text-gray-300 mt-2">
Merancang flowchart, DFD sistem kasir, dan analisis kebutuhan aplikasi.
</p>
</div>
</div>

<!-- QA -->
<div class="timeline-item reveal">
<div class="timeline-dot"></div>

<div class="timeline-content card p-6 rounded-2xl">
<h3 class="font-bold text-lg text-cyan-400 flex items-center gap-2">
<i class="fas fa-bug"></i>
Quality Assurance | Aplikasi MOKAPOS
</h3>

<p class="text-gray-300 mt-2">
Menyusun test plan, test case, serta melakukan pengujian manual aplikasi.
</p>
</div>
</div>

<!-- SIKUNIR -->
<div class="timeline-item reveal">
<div class="timeline-dot"></div>

<div class="timeline-content card p-6 rounded-2xl">
<h3 class="font-bold text-lg text-cyan-400 flex items-center gap-2">
<i class="fas fa-laptop-code"></i>
UI/UX Designer | Aplikasi SI-KUNIR
</h3>

<p class="text-gray-300 mt-2">
Merancang alur sistem dan desain antarmuka menggunakan Figma.
</p>
</div>
</div>

<!-- HARDWARE -->
<div class="timeline-item reveal">
<div class="timeline-dot"></div>

<div class="timeline-content card p-6 rounded-2xl">
<h3 class="font-bold text-lg text-cyan-400 flex items-center gap-2">
<i class="fas fa-computer"></i>
Magang PKL | Maju Hardware Madiun
</h3>

<p class="text-gray-300 mt-2">
Instalasi OS, crimping LAN, troubleshooting, dan pelayanan perangkat.
</p>
</div>
</div>

<!-- BKPSDM -->
<div class="timeline-item reveal">
<div class="timeline-dot"></div>

<div class="timeline-content card p-6 rounded-2xl">
<h3 class="font-bold text-lg text-cyan-400 flex items-center gap-2">
<i class="fas fa-folder-open"></i>
Magang PKL | BKPSDM Nganjuk
</h3>

<p class="text-gray-300 mt-2">
Input data pegawai, pengarsipan, dan digitalisasi dokumen.
</p>
</div>
</div>

</div>
</section>

<!-- ================= CERTIFICATE (RAPI PREMIUM) ================= -->
<section id="certificate" class="max-w-7xl mx-auto px-6 py-24">

<!-- HEADER -->
<div class="text-center mb-14 reveal">

<div class="inline-flex items-center gap-3 px-5 py-2 rounded-full card mb-5">
<i class="fas fa-award text-cyan-400 text-sm"></i>
<p class="text-cyan-400 font-semibold tracking-widest uppercase text-xs">
Achievement
</p>
</div>

<h2 class="text-4xl md:text-5xl font-bold mb-4">
My <span class="text-cyan-400">Certificates</span>
</h2>

<p class="text-gray-400 max-w-2xl mx-auto leading-8 text-sm md:text-base">
Klik sertifikat untuk membuka file PDF.
</p>

</div>

<!-- GRID -->
<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-7">

<!-- CARD -->
<a href="cv/527_sign (2).pdf" target="_blank" class="cert-card reveal">
<embed src="cv/527_sign (2).pdf#toolbar=0" class="pdf-thumb">
<div class="p-5">
<h3>English Proficiency Test</h3>
<p>Politeknik Negeri Jember</p>
<span class="year">2025</span>
<div class="btn-cert">View Certificate</div>
</div>
</a>

<a href="cv/E41241443_Reni Rahmawati.pdf" target="_blank" class="cert-card reveal">
<embed src="cv/E41241443_Reni Rahmawati.pdf#toolbar=0" class="pdf-thumb">
<div class="p-5">
<h3>Peserta UI/UX Bootcamp</h3>
<p>Interactive Thinking</p>
<span class="year">2025</span>
<div class="btn-cert">View Certificate</div>
</div>
</a>

<a href="cv/ui ux.pdf" target="_blank" class="cert-card reveal">
<embed src="cv/ui ux.pdf#toolbar=0" class="pdf-thumb">
<div class="p-5">
<h3>Juara 3 UI/UX Bootcamp</h3>
<p>Polije Nganjuk</p>
<span class="year">2025</span>
<div class="btn-cert">View Certificate</div>
</div>
</a>

<a href="cv/Reni Rahmawati.pdf" target="_blank" class="cert-card reveal">
<embed src="cv/Reni Rahmawati.pdf#toolbar=0" class="pdf-thumb">
<div class="p-5">
<h3>Finalis UI/UX Design IT Fest</h3>
<p>Universitas Brawijaya</p>
<span class="year">2025</span>
<div class="btn-cert">View Certificate</div>
</div>
</a>

<a href="cv/Sertifikat Panitia SBD .pdf" target="_blank" class="cert-card reveal">
<embed src="cv/Sertifikat Panitia SBD .pdf#toolbar=0" class="pdf-thumb">
<div class="p-5">
<h3>Kepanitiaan SBD</h3>
<p>Use Of Technology in Business</p>
<span class="year">2025</span>
<div class="btn-cert">View Certificate</div>
</div>
</a>

<a href="cv/certificate of competency.pdf" target="_blank" class="cert-card reveal">
<embed src="cv/certificate of competency.pdf#toolbar=0" class="pdf-thumb">
<div class="p-5">
<h3>Uji Kompetensi TKJ</h3>
<p>Troubleshoosting Layanan Jaringan Pada Jaringan Client Server</p>
<span class="year">2024</span>
<div class="btn-cert">View Certificate</div>
</div>
</a>

<a href="cv/Maju Hardware madiun.pdf" target="_blank" class="cert-card reveal">
<embed src="cv/Maju Hardware madiun.pdf#toolbar=0" class="pdf-thumb">
<div class="p-5">
<h3>Magang PKL</h3>
<p>Maju Hardware Madiun</p>
<span class="year">2024</span>
<div class="btn-cert">View Certificate</div>
</div>
</a>

<a href="cv/BKPSDM Nganjuk.pdf" target="_blank" class="cert-card reveal">
<embed src="cv/BKPSDM Nganjuk.pdf#toolbar=0" class="pdf-thumb">
<div class="p-5">
<h3>Magang PKL</h3>
<p>BKPSDM Kabupaten Nganjuk</p>
<span class="year">2024</span>
<div class="btn-cert">View Certificate</div>
</div>
</a>

</div>

</section>
<!-- CONTACT ICON ONLY PREMIUM -->
<section id="contact" class="max-w-5xl mx-auto px-6 py-24">

<div class="text-center reveal mb-14">

<div class="flex justify-center mb-5">
<i class="fas fa-paper-plane text-cyan-400 text-5xl"></i>
</div>

<h2 class="text-5xl md:text-6xl font-bold text-cyan-400 mb-4">
Contact
</h2>

<p class="text-gray-300">
Klik icon di bawah untuk terhubung.
</p>

</div>

<div class="flex flex-wrap justify-center gap-6">

<!-- WhatsApp -->
<a href="https://wa.me/6285707006729"
target="_blank"
class="card w-20 h-20 rounded-2xl flex items-center justify-center text-3xl text-green-400 hover:scale-110 transition reveal hover:shadow-[0_0_25px_rgba(34,197,94,.45)]">
<i class="fab fa-whatsapp"></i>
</a>

<!-- Instagram -->
<a href="https://instagram.com/renirhm_"
target="_blank"
class="card w-20 h-20 rounded-2xl flex items-center justify-center text-3xl text-pink-400 hover:scale-110 transition reveal hover:shadow-[0_0_25px_rgba(236,72,153,.45)]">
<i class="fab fa-instagram"></i>
</a>

<!-- GitHub -->
<a href="https://github.com/renirahmawati-coder"
target="_blank"
class="card w-20 h-20 rounded-2xl flex items-center justify-center text-3xl text-white hover:scale-110 transition reveal hover:shadow-[0_0_25px_rgba(255,255,255,.25)]">
<i class="fab fa-github"></i>
</a>

<!-- Email -->
<a href="https://mail.google.com/mail/?view=cm&fs=1&to=e41241443@student.polije.ac.id"
target="_blank"
class="card w-20 h-20 rounded-2xl flex items-center justify-center text-3xl text-cyan-400 hover:scale-110 transition reveal hover:shadow-[0_0_25px_rgba(34,211,238,.45)]">
<i class="fas fa-envelope"></i>
</a>

<!-- JobStreet -->
<a href="https://id.jobstreet.com/id/profiles/reni-rahmawati-Cw6vnFd3BN"
target="_blank"
class="card w-20 h-20 rounded-2xl flex items-center justify-center text-3xl text-blue-400 hover:scale-110 transition reveal hover:shadow-[0_0_25px_rgba(59,130,246,.45)]">
<i class="fas fa-briefcase"></i>
</a>

</div>

</section>


<!-- FOOTER -->
<footer class="text-center py-8 text-gray-400">

<!-- HARI + TANGGAL + JAM -->
<div class="mb-3 text-sm text-cyan-400 flex flex-wrap items-center justify-center gap-4">

<!-- Tanggal -->
<div class="flex items-center gap-2">
<i class="fas fa-calendar-alt"></i>
<span id="footerDate">Senin, 01 Januari 2026</span>
</div>

<!-- Jam -->
<div class="flex items-center gap-2">
<i class="fas fa-clock"></i>
<span id="footerClock">00:00 WIB</span>
</div>

</div>

© 2026 Reni Rahmawati

</footer>

<!-- SCRIPT -->
<script>

/* Loader */
window.onload=function(){
document.getElementById("loader").style.display="none";
}

/* Cursor */
document.addEventListener("mousemove",function(e){
let c=document.getElementById("cursor");
c.style.left=e.clientX+"px";
c.style.top=e.clientY+"px";
});

/* Reveal */
let reveals=document.querySelectorAll(".reveal");

window.addEventListener("scroll",function(){

reveals.forEach(el=>{

let top=el.getBoundingClientRect().top;

if(top < window.innerHeight-100){
el.classList.add("show");
}

});

});

/* Theme */
function toggleTheme(){

let btn = document.getElementById("themeBtn");
let icon = btn.querySelector("i");

if(document.body.classList.contains("dark")){
document.body.classList.remove("dark");
document.body.classList.add("light");

icon.className = "fas fa-sun";

}else{
document.body.classList.remove("light");
document.body.classList.add("dark");

icon.className = "fas fa-moon";
}

}

/* Mobile */
function menuToggle(){
document.getElementById("mobileMenu").classList.toggle("hidden");
}

/* Particle */
for(let i=0;i<35;i++){

let dot=document.createElement("div");
dot.classList.add("dot");

dot.style.left=Math.random()*100+"%";
dot.style.animationDuration=(5+Math.random()*10)+"s";
dot.style.animationDelay=Math.random()*5+"s";

document.getElementById("particles").appendChild(dot);

}

/* ================= SHOOTING STAR (SMART VERSION) ================= */

function createStar(){

let star=document.createElement("div");

star.style.position="fixed";
star.style.pointerEvents="none";
star.style.zIndex="0";

/* DARK MODE = bintang */
if(document.body.classList.contains("dark")){
star.style.width="2px";
star.style.height="2px";
star.style.background="white";
star.style.boxShadow="0 0 6px white";

/* LIGHT MODE = sparkle */
}else{
star.style.width="4px";
star.style.height="4px";
star.style.background="#38bdf8";
star.style.borderRadius="50%";
star.style.boxShadow="0 0 10px #38bdf8";
}

/* mulai dari atas */
star.style.top = Math.random()*20 + "%";
star.style.left = Math.random()*100 + "%";

document.body.appendChild(star);

/* animasi */
star.animate([
{ transform:"translate(0,0)", opacity:1 },
{ transform:"translate(-300px,600px)", opacity:0 }
],{
duration: 2000 + Math.random()*1000,
easing: "ease-out"
});

/* hapus */
setTimeout(()=>star.remove(),3000);

}

/* interval beda mode */
setInterval(()=>{

if(document.body.classList.contains("dark")){
createStar(); // malam lebih sering
}else{
if(Math.random() > 0.6){
createStar(); // siang lebih jarang (biar elegan)
}
}

},1200);

/* ================= JAM WIB AUTO ================= */

function updateFooterInfo(){

const now = new Date();
const utc = now.getTime() + (now.getTimezoneOffset() * 60000);
const wib = new Date(utc + (7 * 3600000));

const hari = [
"Minggu","Senin","Selasa","Rabu",
"Kamis","Jumat","Sabtu"
];

const bulan = [
"Januari","Februari","Maret","April","Mei","Juni",
"Juli","Agustus","September","Oktober","November","Desember"
];

/* tanggal */
document.getElementById("footerDate").innerHTML =
hari[wib.getDay()] + ", " +
String(wib.getDate()).padStart(2,'0') + " " +
bulan[wib.getMonth()] + " " +
wib.getFullYear();

/* jam */
const jam = String(wib.getHours()).padStart(2,'0');
const menit = String(wib.getMinutes()).padStart(2,'0');

document.getElementById("footerClock").innerHTML =
`${jam}:${menit} WIB`;

}

setInterval(updateFooterInfo,1000);
updateFooterInfo();


function openPhoto(){
document.getElementById("photoModal").classList.remove("hidden");
}

function closePhoto(){
document.getElementById("photoModal").classList.add("hidden");
}

/* klik area gelap untuk tutup */
document.getElementById("photoModal").addEventListener("click",function(e){
if(e.target.id==="photoModal"){
closePhoto();
}
});

</script>

</body>
</html>