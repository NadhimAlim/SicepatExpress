document.querySelector(".hamburger").addEventListener("click", function () {
    document.querySelector(".navigation ul").classList.toggle("active");
  });
  
  // pengirimanpaket
  
  function hitungBiaya() {
    const jarak = document.getElementById("jarak").value;
    const biaya = jarak * 15000;
    document.getElementById(
      "hasil"
    ).textContent = `Total Biaya Pengiriman: Rp. ${biaya}`;
  
    // Mengirim data ke server
    fetch("simpan_data.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ jarak, biaya }),
    })
      .then((response) => response.text())
      .then((data) => console.log(data))
      .catch((error) => console.error("Error:", error));
  }
  
  // Ambil elemen tombol dan detail
  var button = document.querySelector('.pengirimancard2 button');
  var details = document.getElementById('details');
  
  // Tambahkan event listener untuk tombol
  button.addEventListener('click', function() {
    // Toggle class 'hidden' pada elemen detail
    details.classList.toggle('hidden');
  });
  