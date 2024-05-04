$(document).ready(function() {
    const products = $('.Product');
    let index = 1;

    function showProduct() {
        products.hide().removeClass('active'); // Sembunyikan semua produk dan hapus class 'active'
        products.eq(index).addClass('active').fadeIn(500); // Tampilkan hanya produk aktif
        index = (index + 1) % products.length; // Update index untuk produk berikutnya
    }

    setInterval(showProduct, 5000); // Ganti produk setiap 5 detik
});