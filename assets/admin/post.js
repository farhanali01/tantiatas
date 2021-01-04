function tambah_post(base_url){
    document.getElementById("modal_title").innerHTML = "form tambah post"
    document.getElementById("form").action = base_url + 'post/tambah_post'
}

function update_post(base_url){
    document.getElementById("modal_title").innerHTML = "form update post"
    document.getElementById("form").action = base_url + 'post/update_data'
}

