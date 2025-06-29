<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>eNotaris</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  

</head>

<a href="https://wa.me/62895361541169?text=Hallo"
   class="whatsapp-float"
   target="_blank"
   title="Chat WhatsApp">
   <i class="fab fa-whatsapp"></i>
</a>

<body class="font-sans text-gray-800">
  <!-- Header -->
  <header class="bg-blue-900 shadow p-3 flex justify-between items-center sticky top-0 z-50">
    <div class="flex items-center space-x-4"><img src="images/not.png" alt="Pendirian PT" class="h-20 w-auto">
    <h1  class="text-2xl font-bold text-white"><a href="#">Notaris/PPAT</a></h1>
</div>
    <nav class="space-x-4 text-white text-sm md:text-base">
      <a href="#" class="hover:text-blue-600 font-medium">Home</a>
      <a href="#daftar" class="hover:text-blue-600 font-medium">Tentang</a>
      <a href="#daftar" class="hover:text-blue-600 font-medium">layanan</a>
      <a href="#kontak" class="hover:text-blue-600 font-medium">Kontak</a>
    </nav>
  </header>

  <!-- Hero -->
  <section class="relative h-screen flex items-center justify-center text-center overflow-hidden px-4">
  <!-- Video Background -->
  <video autoplay muted loop playsinline class="absolute w-auto min-w-full min-h-full max-w-none z-[-1] object-cover">
    <source src="images/videoplayback.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <!-- Konten Hero -->
  <div class="z-10 max-w-3xl mx-auto text-center" data-aos="fade-down" data-aos-duration="1000">
  <!-- Logo dan Judul Sejajar -->
  <div class="flex items-center justify-center space-x-4 mb-4">
    {{-- <img src="images/not.png" alt="Pendirian PT" class="h-24 w-auto"> --}}
    <h2 class="text-3xl md:text-5xl font-bold text-gold drop-shadow-lg">
      Layanan Notaris Online Terpercaya
    </h2>
  </div>

  <!-- Deskripsi -->
  <p class="mb-6 text-lg md:text-xl text-white drop-shadow-lg" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
    Proses mudah, cepat, dan aman. Semua dokumen Anda ditangani oleh profesional.
  </p>

  <!-- Tombol -->
  <div data-aos="zoom-in" data-aos-delay="400">
    <a href="#daftar" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg shadow hover:bg-blue-700 hover:scale-105 transform transition duration-300">
      Daftar Sekarang
    </a>
  </div>
</div>

</section>

  {{-- <section class="bg-gradient-to-r from-blue-50 to-white py-20 text-center px-4">
    <h2 class="text-4xl md:text-5xl font-bold mb-4 text-blue-800">Layanan Notaris Online Terpercaya</h2>
    <p class="mb-6 text-lg md:text-xl text-gray-600">Proses mudah, cepat, dan aman. Semua dokumen Anda ditangani oleh profesional.</p>
    <a href="#daftar" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg shadow hover:bg-blue-700 transition">Daftar Sekarang</a>
  </section> --}}

  <!-- Layanan -->
  <section id="layanan" class="py-20 px-6 max-w-6xl mx-auto">
  <h3 class="text-3xl font-semibold text-center mb-12 text-blue-700" data-aos="fade-down">Layanan Kami</h3>
  <div class="grid md:grid-cols-3 gap-8">

    <!-- Layanan 1 -->
    <div class="bg-white shadow-lg rounded-2xl p-6 transition transform hover:-translate-y-2 hover:shadow-2xl duration-300">
      <img src="images/notaris.jpg" alt="Pendirian PT" class="w-full mb-4 rounded-lg object-cover shadow transition-shadow hover:shadow-2xl">
      <h4 class="text-xl font-bold mb-2 text-blue-700">Pendirian PT</h4>
      <p class="text-gray-600">Kami bantu Anda mendirikan badan usaha secara legal dan cepat.</p>
    </div>

    <!-- Layanan 2 -->
    <div class="bg-white shadow-lg rounded-2xl p-6 transition transform hover:-translate-y-2 hover:shadow-2xl duration-300">
      <img src="images/notaris.jpg" alt="Pendirian PT" class="w-full mb-4 rounded-lg object-cover shadow transition-shadow hover:shadow-2xl">
      <h4 class="text-xl font-bold mb-2 text-blue-700">Pembuatan CV</h4>
      <p class="text-gray-600">Layanan cepat dan sah untuk mendirikan Commanditaire Vennootschap.</p>
    </div>

    <!-- Layanan 3 -->
    <div class="bg-white shadow-lg rounded-2xl p-6 transition transform hover:-translate-y-2 hover:shadow-2xl duration-300">
     <img src="images/notaris.jpg" alt="Pendirian PT" class="w-full mb-4 rounded-lg object-cover shadow transition-shadow hover:shadow-1xl">
      <h4 class="text-xl font-bold mb-2 text-blue-700">Perjanjian Kerjasama</h4>
      <p class="text-gray-600">Dokumen kerja sama yang sah secara hukum untuk usaha Anda.</p>
    </div>
  </div>
</section>

  {{-- <section id="layanan" class="py-20 px-6 max-w-6xl mx-auto">
    <h3 class="text-3xl font-semibold text-center mb-12 text-blue-700">Layanan Kami</h3>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white shadow-lg rounded-2xl p-6 hover:shadow-xl transition">
        <h4 class="text-xl font-bold mb-2 text-blue-700">Pendirian PT</h4>
        <p class="text-gray-600">Kami bantu Anda mendirikan badan usaha secara legal dan cepat.</p>
      </div>
      <div class="bg-white shadow-lg rounded-2xl p-6 hover:shadow-xl transition">
        <h4 class="text-xl font-bold mb-2 text-blue-700">Pembuatan CV</h4>
        <p class="text-gray-600">Layanan cepat dan sah untuk mendirikan Commanditaire Vennootschap.</p>
      </div>
      <div class="bg-white shadow-lg rounded-2xl p-6 hover:shadow-xl transition">
        <h4 class="text-xl font-bold mb-2 text-blue-700">Perjanjian Kerjasama</h4>
        <p class="text-gray-600">Dokumen kerja sama yang sah secara hukum untuk usaha Anda.</p>
      </div>
    </div>
  </section> --}}

  <!-- Form Pendaftaran -->
  <section id="daftar" class="bg-gray-100 py-20 px-4">
    <h3 class="text-3xl font-semibold text-center mb-10 text-blue-700">Formulir Pendaftaran</h3>
    <form id="formDaftar" class="max-w-xl mx-auto space-y-5 bg-white p-8 shadow-lg rounded-xl">
      <input type="text" id="nama" placeholder="Nama Lengkap" class="form-input" required />
      <input type="email" id="email" placeholder="Email" class="form-input" required />
      <input type="tel" id="telepon" placeholder="Nomor HP" class="form-input" required />
      <textarea id="pesan" placeholder="Kebutuhan Anda" class="form-input" rows="4" required></textarea>
      <button type="submit" class="w-full bg-blue-600 text-white px-4 py-3 rounded hover:bg-blue-700 transition">Kirim</button>
    </form>
  </section>



  <script src="script.js"></script>



  <!-- Logo & Deskripsi -->
  <footer class="bg-gradient-to-r from-blue-900 via-blue-800 to-gray-900 text-white shadow-inner py-10 px-6 " id="kontak" >
  <div div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">
  <div>
      <h2 class="text-2xl font-bold mb-2 text-blue-300">eNotaris</h2>
      <p class="text-gray-300 text-sm">Layanan notaris online yang cepat, aman, dan profesional di seluruh Indonesia.</p>
    </div>

    <!-- Navigasi -->
    <div>
      <h3 class="font-semibold mb-3 text-white">Navigasi</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#hero" class="hover:text-blue-300 transition">Beranda</a></li>
        <li><a href="#layanan" class="hover:text-blue-300 transition">Layanan</a></li>
        <li><a href="#daftar" class="hover:text-blue-300 transition">Daftar</a></li>
        <li><a href="#kontak" class="hover:text-blue-300 transition">Kontak</a></li>
      </ul>
    </div>

    <!-- Kontak & Sosial Media -->
    <div>
      <h3 class="font-semibold mb-3 text-white">Kontak</h3>
      <p class="text-sm text-gray-300 mb-1">Tasikmalaya, Indonesia</p>
      <p class="text-sm text-gray-300 mb-1">info@enotaris.com</p>
      <p class="text-sm text-gray-300 mb-4">0812-3456-7890</p>

      <div class="flex space-x-4">
        <!-- Icon WhatsApp -->
        <a href="#" class="text-white hover:text-green-400 transition" aria-label="WhatsApp">
          <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
            <path d="M20.5 3.5a11.5 11.5 0 0 0-17 14.6L2 22l4.1-1.3a11.5 11.5 0 0 0 14.4-17.2zM12 21a9 9 0 0 1-4.6-1.2L7 20l.2-2.1A9 9 0 1 1 12 21zm4.1-6.2l-1.3-.6c-.2-.1-.4-.1-.6.1l-.7.8a6.5 6.5 0 0 1-3.3-3.3l.8-.7c.2-.2.2-.4.1-.6l-.6-1.3c-.2-.5-.7-.8-1.2-.6A5.1 5.1 0 0 0 8 11.3a7.5 7.5 0 0 0 4.7 4.7c.7.2 1.4.1 2-.2a5.1 5.1 0 0 0 1.4-1.2c.3-.5 0-1-.5-1.3z"/>
          </svg>
        </a>

        <!-- Icon Instagram -->
        <a href="#" class="text-white hover:text-pink-400 transition" aria-label="Instagram">
          <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
            <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5A4.25 4.25 0 0 0 20.5 16.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7zm4.75-2a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5z"/>
          </svg>
        </a>
      </div>
    </div>
  </div>

  <div class="text-center text-xs text-gray-400 mt-10 border-t border-gray-700 pt-4">
    &copy; 2025 eNotaris. Seluruh hak cipta dilindungi.
  </div>
</footer>

</body>
</html>
