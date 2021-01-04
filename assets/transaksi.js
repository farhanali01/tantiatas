function update_pemesanan(base_url){
   document.getElementById("btn_update").href = base_url
}
function confirm_transaksi(base_url){
   document.getElementById("buttonproses").href = base_url
   
}
function deleteTransaksi(base_url){
   document.getElementById("modal_title").innerHTML = "Hapus Transaksi";
   document.getElementById("buttondelete").href = base_url;
}
function delete_pemesanan(base_url){
   document.getElementById("btn_delete").href = base_url
}
function delete_order(base_url)
{
   document.getElementById("modal_title").innerHTML = "Hapus Transaksi";
   document.getElementById("buttondelete").href = base_url;
}
function detail_transaksi(nama,hp,alamat){
   document.getElementById("modal_title").innerHTML = "Detail Pemesan";
   document.getElementById("nama").innerHTML = nama;
   document.getElementById("hp").innerHTML = hp;
   document.getElementById("alamat").innerHTML = alamat;
}

function detailPesanan(id,base_url){
   clearTable();
   $.ajax({
      type     : 'GET',
      dataType : 'html',
      url      :  base_url +'transaksi/getDataTransaksi/'+id,
      success  : function(response){
         var data = JSON.parse(response);
         var total = 0;
         var k = 1;
         for(i = 0; i < data.length; i++){
            
            var tr = $("<tr>");
            tr.append("<td>" + k++ + "</td>");
				tr.append("<td>" + data[i].nama_produk + "</td>");
				tr.append(
					"<td> Rp " +
						data[i].harga.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") +
						"</td>"
				);
				tr.append("<td>" + data[i].qty + "</td>");
				tr.append(
					"<td> Rp " +
						(data[i].qty * data[i].harga)
							.toString()
							.replace(/\B(?=(\d{3})+(?!\d))/g, ".") +
						"</td>"
				);
				$("#table_data").append(tr);
				total += data[i].qty * data[i].harga;
            document.getElementById("sub_total").innerHTML = "Rp " +  total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") ;
         }
      }
   })
}

function clearTable(){
   $("#table_data tbody").empty();
}