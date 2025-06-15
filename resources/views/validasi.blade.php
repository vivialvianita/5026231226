<html>
    <head>
        <title>
Input Data Mahasiswa
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Tambahin SweetAlert2 biar kepanggil swal firenya-->
        <script
            src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
        


    <body>
<div class="container">
    <!-- ditambahin onsubmit biar manggil bagian funct validatenya -->
    <form action="https://google.co.id" method="get" onsubmit="return validasi()">
        <b3>Form Pendaftaran</b3>
NRP :
<input type="text" name="nrp" id="nrp" class="form-control" placeholder="Silahkan diisi 10 digit NRP, harus angka, harus diisi">
<br>
Nama : 
<input type="text" name="nama" id="nama" class="form-control" placeholder="Isikan nama peserta yang valid">
<input type="submit" class="btn btn-success" value="Daftar">
    </form>
</div>


<script>
    function validasi() {
        var nrp = document.getElementById("nrp").value;
        var nama = document.getElementById("nama").value;

        // cek nrp harus angka
        if(isNaN(nrp))
            {
            Swal.fire({
                title: "Oops! terdapat kesalahan",
                text: "NRP harus berisi angka!",
                icon: "error"
                });
            document.getElementById("nrp").focus();
            return false;
            }
        
        // cek panjang nrp harus 10
        if(nrp.length!=10)
            {
            Swal.fire({
                title: "Oops! terdapat kesalahan",
                text: "NRP harus berisi 10 digit angka!",
                icon: "error"
                });
            document.getElementById("nrp").focus();
            return false;
            }

        // cek nama minimal 2 huruf
        if(nama.length<2)
            {
            Swal.fire({
                title: "Oops! terdapat kesalahan",
                text: "Nama terlalu pendek!",
                icon: "error"
                });
            document.getElementById("nama").focus();
            return false;
            }
            
        // cek nama gaboleh ada angka
        if (/\d/.test(nama)) {
            Swal.fire({
                title: "Oops! terdapat kesalahan",
                text: "Nama tidak boleh mengandung angka!",
                icon: "error"
            });
            document.getElementById("nama").focus();
            return false;
            
        }
    }
        
</script>

    </body>
</html>