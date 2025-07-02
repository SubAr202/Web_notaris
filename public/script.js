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


function toggleText(id, btn) {
  const text = document.getElementById(id);
  if (text.classList.contains("hidden")) {
    text.classList.remove("hidden");
    btn.innerText = "Read Less ←";
  } else {
    text.classList.add("hidden");
    btn.innerText = "Read More →";
  }
}
