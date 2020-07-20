<?php

$namanya = $_GET['nama'];
$nisnnya = $_GET['nisn'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Report Nilai Siswa</title>
</head>
<body>
    <center>
    <br>
    <hr width="80%">

<table width="80%">
<tr>
<td align="center"><img src="../assets/logo/psw.png" width="110" height="150"></td>
<td align="left"><h1>PEMERINTAH KABUPATEN PESAWARAN<br>DINAS PENDIDIKAN DAN KEBUDAYAAN<br>SDN 35 TEGINENENG</h1><h3>Alamat: Jl. Ponorogo, Desa Gerning, Kec. Tegineneng, Kab. Pesawaran 35363</h3></td>
</tr>
</table>
<hr width="60%"><br>

                <?php
                    $nisn  = $this->uri->segment(3);
                    $query = "SELECT tbl_kelas.* FROM tbl_siswa INNER JOIN tbl_kelas ON tbl_siswa.kd_kelas = tbl_kelas.kd_kelas WHERE tbl_siswa.nisn = $nisnnya; ";
                    $niss = $this->db->query($query)->row_array();
                ?>

        <h3 align="left" style="margin-left:20%;">Nama : <?=$namanya;?>
         | Nisn : <?=$nisnnya;?> 
         | Kelas: <?= $niss['kd_tingkatan'] ?></h3>

    <table style="margin-left:15%;" align="left" border="1" width="60%">
        <thead>
                <tr>
                    <th>NO</th>
                    <th>MAPEL</th>
                    <th>NILAI</th>
                    <th>NILAI MUTU</th>
                </tr>            
        </thead>
        <tbody>
        	<?php $no = 1; foreach ($get_data->result() as $d) {

                            if($d->nilai > 90){
                                $Keterangan = '<p class="text-black">A</p>';
                            }elseif($d->nilai > 80 and $d->nilai <= 90){
                                $Keterangan = '<p class="text-black">B</p>';
                            }elseif($d->nilai > 70 and $d->nilai <= 80){
                                $Keterangan = '<p class="text-black">C</p>';
                            }else{
                                $Keterangan = '<p class="text-black">D</p>';
                            } ?>
        	<tr>
        		<td align="center"><?= $no;?></td>
        		<td align="center"><?= $d->nama_mapel; ?></td>
        		<td align="center"><?= $d->nilai; ?></td>
        		<td align="center"><?= $Keterangan; ?></td>
        	</tr>
        	<?php $no++;}?>
        </tbody>
    </table>
    </center>
</body>
</html>

<script type="text/javascript">
     window.PPClose = false;                                     // Clear Close Flag
    window.onbeforeunload = function(){                         // Before Window Close Event
        if(window.PPClose === false){                           // Close not OK?
            return 'Leaving this page will block the parent window!\nPlease select "Stay on this Page option" and use the\nCancel button instead to close the Print Preview Window.\n';
        }
    }                   
    window.print();                                             // Print preview
    window.PPClose = true;                                      // Set Close Flag to OK.
}
</script>