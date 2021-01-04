function bukti_pembayaran(base_url,total_harga,foto,id_transaksi){
    document.getElementById("model_title").innerHTML = "Form Bukti Pembayaran";
    document.getElementById("total_harga").value = total_harga;
    document.getElementById("form").action = base_url;
    document.getElementById("id_transaksi").value = id_transaksi;

}
function cancel_pembayaran(base_url){
    document.getElementById("buttoncancel").href = base_url
}
