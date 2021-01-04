function tambah_kriteria(base_url)
{
    document.getElementById("modal_title").innerHTML = "From Tambah Kriteria"
    document.getElementById("kriteria").value = "";
    document.getElementById("bobot").value = "";
    document.getElementById("tipe_kriteria").value = "";
    document.getElementById("form").action = base_url + 'kriteria/addKriteria';
    document.getElementById("id_kriteria").value = "";
    
    
}


function update_kriteria(kriteria,id_kriteria,bobot,tipe_kriteria,base_url)
{
    document.getElementById("modal_title").innerHTML = "From Update Kriteria"
    document.getElementById("kriteria").value = kriteria;
    document.getElementById("id_kriteria").value = id_kriteria;
    document.getElementById("bobot").value = bobot;
    document.getElementById("tipe_kriteria").value = tipe_kriteria;
    document.getElementById("form").action = base_url;
}

function delete_kriteria(base_url)
{
    document.getElementById("buttondelete").href = base_url
}