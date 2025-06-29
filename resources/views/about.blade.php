<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>eNotaris</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>
<body class="font-sans text-gray-800">
  <!-- Header -->
  <header class="bg-white shadow p-4 flex justify-between items-center sticky top-0 z-50">
    <h1 class="text-2xl font-bold text-blue-700">Notaris/PPAT</h1>
    <nav class="space-x-4 text-sm md:text-base">
      <a href="#" class="hover:text-blue-600 font-medium">Home</a>
      <a href="#daftar" class="hover:text-blue-600 font-medium">About</a>
      <a href="#kontak" class="hover:text-blue-600 font-medium">Kontak</a>
    </nav>
  </header>

  <!-- Hero -->
  <section class="bg-gradient-to-r from-blue-50 to-white py-20 text-center px-4">
  <div data-aos="fade-down" data-aos-duration="1000">
    <h2 class="text-4xl md:text-5xl font-bold mb-4 text-blue-800">Layanan Notaris Online Terpercaya</h2>
  </div>
  <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
    <p class="mb-6 text-lg md:text-xl text-gray-600">Proses mudah, cepat, dan aman. Semua dokumen Anda ditangani oleh profesional.</p>
  </div>
  <div data-aos="zoom-in" data-aos-delay="400">
    <a href="#daftar" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg shadow hover:bg-blue-700 hover:scale-105 transform transition duration-300">Daftar Sekarang</a>
  </div>
</section>

  {{-- <section class="bg-gradient-to-r from-blue-50 to-white py-20 text-center px-4">
    <h2 class="text-4xl md:text-5xl font-bold mb-4 text-blue-800">Layanan Notaris Online Terpercaya</h2>
    <p class="mb-6 text-lg md:text-xl text-gray-600">Proses mudah, cepat, dan aman. Semua dokumen Anda ditangani oleh profesional.</p>
    <a href="#daftar" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg shadow hover:bg-blue-700 transition">Daftar Sekarang</a>
  </section> --}}

  <!-- Layanan -->
  <section id="layanan" class="py-20 px-6 max-w-6xl mx-auto">
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
  </section>

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

  <!-- Footer -->
  <footer id="kontak" class="bg-gray-800 text-white py-6 text-center">
    <p>&copy; 2025 eNotaris. Semua Hak Dilindungi.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
