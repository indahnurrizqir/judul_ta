<!DOCTYPE html>
<html>
<head>
<title>Penggunaan Tag Tabel</title>
</head>
<body>
<h1>Judul Penelitian</h1>
<table border="1">
    <tr>
        <td>Id Penelitian</td>
        <td>NIP</td>
        <td>Judul Penelitian</td>
        <td>Kuota</td>
        <td>Opsi</td>
    </tr>
   
     <?php
       
        foreach ($penelitian as $row) : ?>
        <tr>
            <td><?php echo $row->id_penelitian; ?></td>
            <td><?php echo $row->nip; ?></td>
            <td><?php echo $row->judul_penelitian;?></td>
            <td><?php echo $row->kuota;?></td>
            <td><a href="<?php echo base_url(); ?>Penelitian_dosen/delete/<?php echo $row->id_penelitian;?>">Hapus</a></td>
            
        </tr>
        <?php endforeach;?>
</table><br>
     <button>Insert</button>
</body>
</html>