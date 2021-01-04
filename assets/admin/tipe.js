function tambah_type(base_url)
{
    document.getElementById("modal_title").innerHTML = "form tambah type";
    document.getElementById("nama_type").value = "";
    document.getElementById("id_type").value = "";
    document.getElementById("form").action = base_url + 'type/tambah_type';
    
}

function update_type(nama,id,base_url)
{
    document.getElementById("modal_title").innerHTML = "form update type";
    document.getElementById("nama_type").value = nama;
    document.getElementById("id_type").value = id;
    document.getElementById("form").action = base_url;
    document.getElementById("button").innerHTML = 'update_type';
}

function delete_type(base_url)
{
    document.getElementById("buttondelete").href = base_url
}

function tambah_kategori(base_url)
{
    document.getElementById("modal_title").innerHTML = "form tambah kategori";
    document.getElementById("nama_kategori").value = "";
    document.getElementById("id_kategori").value = "";
    document.getElementById("form").action = base_url + 'kategori/tambah_kategori';
}

function update_kategori(nama,id,base_url)
{
    document.getElementById("modal_title").innerHTML = "form update kategori";
    document.getElementById("nama_kategori").value = nama;
    document.getElementById("id_kategori").value = id;
    document.getElementById("form").action = base_url;
    document.getElementById("button").innerHTML = 'update_kategori';
}

function delete_kategori(base_url)
{
    document.getElementById("buttondelete").href = base_url
}

function tambah_user(base_url)
{
    document.getElementById("modal_title").innerHTML = "form tambah user";
    document.getElementById("username").value = "";
    document.getElementById("email").value = "";
    document.getElementById("form").action = base_url + 'user/tambah_user';
    
}