<!DOCTYPE html>
<html>
<head>
    <title>Report Siswa</title>
</head>
<body>

<html>
<head>S
</head>
<body>
</body>
</html>




    <center>
    <br>
    <hr width="80%">

<table width="80%">
<tr>
<td align="center"><img src="../assets/logo/psw.png" width="100" height="100"></td>
<td align="center"><h1>PEMERINTAH KABUPATEN PESAWARAN<br>DINAS PENDIDIKAN DAN KEBUDAYAAN<br>SDN 35 TEGINENENG</h1></td>
<td align="center"><img src="../assets/logo/tut.png" width="100" height="100"></td>
</tr>
</table>
   
    <hr width="60%"><br>

        <h1>DAFTAR SISWA/SISWI SDN 35 TEGINENENG</h1>
    <table border="1" width="60%">
        <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nisn</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Agama</th>
                    <th>Kelas</th>
                </tr>            
        </thead>
        <tbody>
            <?php $no = 1; foreach ($get_data->result() as $d) {?>
            <tr>
                <td align="center"><?= $no;?></td>
                <td>
                    <img width="50" height="50" src="<?= base_url('uploads/').$d->foto;?>">
                </td>
                <td align="center"><?= $d->nisn; ?></td>
                <td align="center"><?= $d->nama; ?></td>
        
                <td align="center"><?php
                $d->jenis_kelamin == "L";
                if ($d->jenis_kelamin == "P") {
                    echo "Perempuan";
                } else {
                    echo "Laki -Laki";
                }
                ?>
                    
                </td>


                <td align="center"><?= $d->tanggal_lahir; ?></td>
                <td align="center"><?= $d->tempat_lahir; ?></td>
                <td align="center"><?= $d->nama_agama; ?></td>
                <td align="center"><?= $d->nama_kelas; ?></td>
            </tr>
            <?php $no++;} ?>
        </tbody>
    </table>
    </center>
</body>
</html>

<script type="text/javascript">
if(navigator.userAgent.toLowerCase().indexOf('chrome') > -1){   // Chrome Browser Detected?
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