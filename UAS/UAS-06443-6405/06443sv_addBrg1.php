<?php
    // panggil koneksi database
    require "koneksi.php";

    //memindahkan data kiriman dari form ke var biasa
    $kode=$_POST["kode"];
    $nama=$_POST["nama"];
    $harga=$_POST["harga"];

    //pengujian jika tombol upload di klik
    if(isset($_POST['simpan']))
    {
        //ekstensi file yang diperbolehkan
        $ekstensi_diperbolehkan = array('png', 'jpg', 'gif', 'jpeg');
        $foto = $_FILES['foto']['name']; //untuk mendapatkan nama file yang diupload
        //menangkap nama file untuk ekstensi (nama_file.jpg)
        $x = explode('.', $foto);
        //mengambil ekstensi pada nama file
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['foto']['size']; //untuk mendapatkan ukuran file yang diupload
        $file_tmp = $_FILES['foto']['tmp_name']; //untuk mendapatkan temporary file yang akan di upload

        //uji jika ekstensi file yang diupload sesuai
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
        {
            //boleh upload file
            //uji jika ukuran file dibawah 1mb
            if($ukuran < 1044070)
            {
                //jika ukuran sesuai
                //pindahkan file yang di upload ke folder foto
                move_uploaded_file($file_tmp, 'foto/'.$foto);

                //simpan data ke dalam database
                $simpan = mysqli_query($koneksi, "Insert into data_barang Values ('', '$kode', '$nama', '$harga', '$foto')");

                if($simpan)
                {
                    echo "<script>alert('Data Berhasil Disimpan'); document.location='06443addBarang.php'</script>";
                }
                else
                {
                    echo "<script>alert('Data Gagal Disimpan'); document.location='06443addBarang.php'</script>";
                }
            }
            else
            {
                //ukuran tidak sesuai
                echo "<script>alert('Ukuran File Terlalu Besar, Max. 1 Mb'); document.location='06443addBarang.php'</script>";
            }
        }
        else
        {
            //ekstensi file yang diupload tidak sesuai
            echo "<script>alert('Ekstensi File Yang Di Upload Tidak Sesuai'); document.location='06443addBarang.php'</script>";
        }
    }
?>