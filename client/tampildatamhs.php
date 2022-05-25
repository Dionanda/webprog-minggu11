<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid">
        <div id="konten"></div>
    </div>
    
    <script>
        const jsondta = new XMLHttpRequest()
        jsondta.open("GET","http://localhost/webprog-minggu12/server/listdatamhs.php")
        jsondta.send()

        jsondta.onload = function(){
            const mydta = JSON.parse(this.responseText)
            let tx = '<h3>LIST DATA MAHASISWA</h3>'
            tx +='<table class="table">'
            tx +='<thead>'
            tx +='  <tr>'
            tx +='  <th scope="col">NO</th>'
            tx +='  <th scope="col">NIM</th>'
            tx +='  <th scope="col">Nama</th>'
            tx +='  <th scope="col">Jenis Kelamin</th>'
            tx +='  <th scope="col"><a class="btn btn-outline-dark" href="frmdatamhs.php">TAMBAH DATA</a></th>'
            tx +='  </tr>'
            tx +='</thead>'
            tx +='<tbody>'
            let no = 1
            for(i=0;i<mydta.length;i++){
                tx +='  <tr>'
                tx +='      <th scope="row">'+no+'</th>'
                tx +='      <td>'+mydta[i][0]+'</td>'
                tx +='      <td>'+mydta[i][1]+'</td>'
                tx +='      <td>'+mydta[i][2]+'</td>'
                tx +='      <td><a href="frmeditmhs.php?nim=">EDIT</a> <a href="frmhapusmhs.php?nim=">HAPUS</a></td>'
                tx +='  </tr>'
                no++
            }

                tx +='</tbody>'
            tx +='</table>'

            document.getElementById("konten").innerHTML = tx
        }
    </script>

</body>
</html>