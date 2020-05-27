<?php

    $nim = $_GET['id'];
    $sql = $koneksi->query("select * from tb_anggota where nim = '$nim'");
    $tampil= $sql->fetch_assoc();
    $jkl = $tampil['jk'];
    $jurusan = $jurusan['jk'];
?>

<div class="panel panel-default">
 <div class="panel-heading">

         UBAH DATA
 </div>
 <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form method="POST" >
                                        <div class="form-group">
                                            <label>NIM</label>
                                            <input class="form-control" name="nim" value= "<?php echo $tampil ['nim']?>" readonly/>
                                        
                                        </div>
                                            <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value= "<?php echo $tampil ['nama']?>"/>
                                        </div>

                                            <div class="form-group">
                                            <label>Tempat lahir</label>
                                            <input class="form-control" name="tempat_lahir" value= "<?php echo $tampil ['tempat_lahir']?>" />
                                         </div>

                                         <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control"type="date" name="tgl_lahir"value= "<?php echo $tampil ['tgl_lahir']?>" />
                                         </div>

                                         <div class="form-group">
                                            <label>Jenis Kelamin</label><br/>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value = "L" name ="jk" <?php echo ($jkl==L)?"checked":"";?> /> Laki-laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value ="P" name ="jk" <?php echo ($jkl==P)?"checked":"";?>/> Wanita
                                            </label>
                                            
                                        </div>

                                         <div class="form-group">
                                            <label>Jurusan</label>
                                            <select class="form-control" name="jurusan">
                                                <option value="a" <?php if ($jurusan==a) {
                                                    echo "selected";
                                                }?>>Ilmu Pengetahuan Alam</option>
                                                <option value="s" <?php if ($jurusan==s) {
                                                    echo "selected";
                                                }?>>Ilmu Pengetahuan Sosial</option>
                                                
                                            </select>
                                        </div>
                                       
                                        
                                        
                                        <div>
                                            <input type ="submit" name="simpan" value="Ubah" class="btn btn-primary">
                                    </div>
                                    </div>

                                    </form>
                                </div>
                                
</div>
</div>
</div>

<?php

    $nim = $_POST ['nim'];
    $nama = $_POST ['nama'];
    $tempat_lahir = $_POST ['tempat_lahir'];
    $tgl_lahir = $_POST ['tgl_lahir'];
    $jk = $_POST ['jk'];
    $jurusan = $_POST ['jurusan'];

    $simpan = $_POST ['simpan'];

if ($simpan) {
    
    $sql = $koneksi -> query("update tb_anggota set nama='$nama', tempat_lahir='$tempat_lahir',  tgl_lahir=
    '$tgl_lahir', jk='$jk', jurusan='$jurusan' where nim='$nim'");
   
    if ($sql) {
        ?>
            <script type = "text/javascript">

            alert ("Data Berhasil Disimpan");
            window.location.href="?page=anggota";
        </script>
        <?php
    }
}


?>