<div class="panel panel-default">
 <div class="panel-heading">

         TAMBAH DATA
 </div>
 <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    

                                    <form method="POST" onsubmit="return validasi(this)">

                                   

                                        <div class="form-group">
                                            <label>NIM</label>
                                            <input class="form-control" name="nim" />
                                        
                                        </div>
                                            <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" />
                                        </div>

                                            <div class="form-group">
                                            <label>Tempat lahir</label>
                                            <input class="form-control" name="tempat_lahir" />
                                         </div>

                                         <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control"type="date" name="tgl_lahir" />
                                         </div>

                                         <div class="form-group">
                                            <label>Jenis Kelamin</label><br/>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value = "L" name ="jk"/> Laki-laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value ="P" name ="jk"/> Wanita
                                            </label>
                                            
                                        </div>

                                         <div class="form-group">
                                            <label>Jurusan</label>
                                            <select class="form-control" name="jurusan">
                                                <option value="a">Ilmu Pengetahuan Alam</option>
                                                <option value="s">Ilmu Pengetahuan Sosial</option>
                                                
                                            </select>
                                        </div>
                                       
                                        
                                        
                                        <div>
                                            <input type ="submit" name="simpan" value="Simpan" class="btn btn-primary">
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
    
    $sql = $koneksi -> query("insert into tb_anggota(nim, nama,tempat_lahir, tgl_lahir, jk, jurusan)
    values('$nim ', '$nama', '$tempat_lahir', '$tgl_lahir','$jk', '$jurusan')");

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