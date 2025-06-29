document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("formDaftar");
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      alert("Terima kasih telah mendaftar! Kami akan menghubungi Anda segera.");
      form.reset();
    });
  }
});


AOS.init({
  duration: 800,
  once: true, // animasi hanya terjadi sekali
});



