function tambah_produk(base_url)
{
    document.getElementById("modal_title").innerHTML = "form tambah produk";
    document.getElementById("nama_produk").value = "";
    document.getElementById("id_produk").value = "";
    document.getElementById("harga").value = "";
    document.getElementById("deskripsi").value = "";
    document.getElementById("kategori").value = "";
    document.getElementById("foto").innerHTML = "";
    document.getElementById("berat").value = "";
    document.getElementById("bahan").value = "";
    document.getElementById("form").action = base_url + 'produk/tambah_produk';
}

function update_produk(nama_produk,id_produk,harga,deskripsi,id_kategori,foto,berat,bahan,base_url)
{
    console.log(nama_produk);
    document.getElementById("modal_title").innerHTML = "form update produk";
    document.getElementById("nama_produk").value = nama_produk;
    document.getElementById("id_produk").value = id_produk;
    document.getElementById("harga").value = harga;
    document.getElementById("deskripsi").value = deskripsi;
    document.getElementById("kategori").value = id_kategori;
    document.getElementById("foto").innerHTML = foto;
    document.getElementById("berat").value = berat;
    document.getElementById("bahan").value = bahan;
    document.getElementById("form").action = base_url;
    
}

function delete_produk(base_url)
{
document.getElementById("buttondelete").href = base_url
}
function update_pemesanan (base_url){
    document.getElementById('btn_update').href = base_url;
}

function minimalWeight(){
    var berat = document.getElementById("berat").value;
    var convertBerat = parseInt(berat);
    if(convertBerat < 100){
        document.getElementById("notif_min").hidden = false;
        document.getElementById("notif_max").hidden = true;
    }else if(convertBerat > 700){
        document.getElementById("notif_max").hidden = false;
        document.getElementById("notif_min").hidden = true;
    }else if(convertBerat > 100 || convertBerat < 700){
        document.getElementById("notif_max").hidden = true;
        document.getElementById("notif_min").hidden = true;
    }
}