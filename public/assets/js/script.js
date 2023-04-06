// buatkan confirmasi dengan sweetalert2 ketika tombol add to cart di klik
const add_to_cart = document.querySelectorAll("#add-to-cart");
const delete_product_in_cart = document.querySelectorAll(
  "#delete-product-in-cart"
);

add_to_cart.forEach((btn) => {
  btn.addEventListener("click", function (e) {
    e.preventDefault();
    const form = this.parentElement.parentElement.parentElement.parentElement;
    const id_barang = form.querySelector("input[name=id_barang]").value;
    Swal.fire({
      title: "Apakah anda yakin?",
      text: "Anda akan menambahkan produk ini kedalam keranjang!",
      icon: "question",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Ya, Tambahkan!",
      cancelButtonText: "Batal",
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "Berhasil",
          text: "Produk berhasil ditambahkan kedalam keranjang!",
          icon: "success",
          confirmButtonColor: "#3085d6",
          showConfirmButton: false,
          confirmButtonText: "Ok",
        });
        // tunggu 5 detik
        setTimeout(function () {
          form.submit();
        }, 1000);
      } else {
        Swal.fire({
          title: "Batal",
          text: "Produk tidak ditambahkan kedalam keranjang!",
          icon: "error",
          confirmButtonColor: "#3085d6",
          confirmButtonText: "Ok",
        });
      }
    });
  });
});
