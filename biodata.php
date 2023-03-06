<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Profile 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <div class="sisiAtas">
            <h1>B I O D A T A - D I R I</h1>
        </div>

        <div class="sisiTengah">
            <div class="tabel1">
                <table>
                <td>
                    <h2>P R O F I L</h2>
                    <div>
                        <img class="gambar"; src="gambar.jpeg" alt="">
                    </div>

                    <?php
                        $perguruan_tinggi = "UPN \"Veteran\" Jawa Timur";
                        $prodi = "Informatika";
                        $sma = "SMAN 3 Surabaya";
                    ?>

                    <p>Saya adalah seorang mahasiswi Program Studi <?php echo $prodi; ?>, yang sedang menjalani Semester 4 di <?php echo $perguruan_tinggi; ?>.
                        Saya bergabung di kampus <?php echo $perguruan_tinggi; ?> pada tahun 2021, setelah beberapa bulan saya lulus dari sekolah saya, yaitu <?php echo $sma; ?>. </p>
                </td>
                </table>
            </div>
            
            <p></p>
            <div>
                <table class="table2">
                    <?php
                        $nama="Imeldha Elzandy";
                        $panggilan = "Imel";
                        $ttl = "Surabaya, 20 Agustus 2003";
                        $agama = "Islam";
                        $npm = "21081010039"; 
                        $kewarganegaraan = "Warga Negara Indonesia";
                        $jenis_kelamin = "Perempuan";
                        $tinggi_badan = "150 cm";
                        $berat_badan = "40 kg";
                        $status = "Mahasiswa";
                        $fakultas = "Ilmu Komputer";
                        $smp = "SMPN 29 Surabaya";
                        $sd = "SDN Sidotopo Wetan 4 Surabaya";
                        $tk = "TK Tunas Harapan Jaya";
                        $motto_hidup = "Breathe. Smile. Let It Flow.";
                        $hobi = "Mendengarkan Musik";
                        $cita_cita = "PNS";
                        $jarak_rumah_kampus = "12 KM";
                        $email = "imeldhaelzaa@gmail.com";

                        $tanggal_lahir = 20;
                        $bulan_lahir = 8;
                        $tahun_lahir = 2003;
                        $tanggal_sekarang = date("j");
                        $bulan_sekarang = date("n");
                        $tahun_sekarang = date("Y");
                        $usia = $tahun_sekarang - $tahun_lahir;
                        if ($bulan_sekarang < $bulan_lahir) {
                            $usia--;
                        } else if ($bulan_sekarang == $bulan_lahir && $tanggal_sekarang < $tanggal_lahir) {
                            $usia--;
                        }
                    ?>

                    <tr class="a"><td>Nama Lengkap</td><td>: <?php echo $nama; ?> </td></td></tr> 
                    <tr class="b"><td>Nama Panggilan</td> <td>: <?php echo $panggilan; ?> </td></tr>
                    <tr class="a"><td>Tempat & Tanggal Lahir</td> <td>: <?php echo $ttl; ?> </td></tr>
                    <tr class="b"><td>Agama</td> <td>: <?php echo $agama; ?> </td></tr>
                    <tr class="a"><td>NPM</td> <td>: <?php echo $npm; ?> </td></tr>
                    <tr class="b"><td>Kewarganegaraan</td> <td>: <?php echo $kewarganegaraan; ?> </td></tr>
                    <tr class="a"><td>Jenis Kelamin</td> <td>: <?php echo $jenis_kelamin; ?> </td></tr>
                    <tr class="b"><td>Tinggi Badan / Berat Badan</td> <td>: <?php echo $tinggi_badan. ' / '. $berat_badan; ?> </td></tr>
                    <tr class="a"><td>Status</td> <td>: <?php echo $status; ?> </td></tr>
                    <tr class="b"><td>Prodi / Jurusan</td> <td>: <?php echo $prodi; ?> </td></tr>
                    <tr class="a"><td>Fakultas</td> <td>: <?php echo $fakultas; ?> </td></tr>
                    <tr class="b"><td>Perguruan Tinggi</td> <td>: <?php echo $perguruan_tinggi; ?> </td></tr>
                    <tr class="a"><td>SMA</td> <td>: <?php echo $sma; ?> </td></tr>
                    <tr class="b"><td>SMP</td> <td>: <?php echo $smp; ?> </td></tr>
                    <tr class="a"><td>SD</td> <td>: <?php echo $sd; ?> </td></tr>
                    <tr class="b"><td>TK</td> <td>: <?php echo $tk; ?> </td></tr>
                    <tr class="a"><td>Motto Hidup</td> <td>: <?php echo $motto_hidup; ?> </td></tr>
                    <tr class="b"><td>Hobi</td> <td>: <?php echo $hobi; ?> </td></tr>
                    <tr class="a"><td>Cita-cita</td> <td>: <?php echo $cita_cita; ?> </td></tr>
                    <tr class="b"><td>Jarak Rumah ke Kampus</td> <td>: <?php echo $jarak_rumah_kampus; ?> </td></tr>
                    <tr class="a"><td>Alamat Email</td> <td>: <?php echo $email; ?> </td></tr>
                    <tr class="b"><td>Usia</td> <td>: <?php echo $usia. ' Tahun'; ?> </td></tr>
                </table>
            </div>
        </div>

        <div class="sisiBawah"></div>
    </div>
</body>
</html>