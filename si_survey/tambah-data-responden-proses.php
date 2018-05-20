  <?php
  include ("connection/connect.php");



      $id_responden     =$_POST['id_responden'];
      $id_surveyor      =$_POST['id_surveyor'];
      $nama_resp        =$_POST['nama'];
      $umur_resp        =$_POST['umur'];
      $jk_resp          =$_POST['jk'];
      $pendidikan_resp  =$_POST['pendidikan'];
      $pekerjaan_resp   =$_POST['pekerjaan'];
      $no_plat_resp     =$_POST['no_plat'];
      $jenis_kend_resp  =$_POST['jenis_kendaraan'];



 

          $tambahData = mysqli_query($connect, "INSERT into t_responden
            (
                id_responden,
                id_surveyor,
                nama,
                umur,
                jk,
                pendidikan,
                pekerjaan,
                no_plat,
                jenis_kendaraan

            )VALUES
            (
              '$id_responden',
              '$id_surveyor',
              '$nama_resp',
              '$umur_resp',
              '$jk_resp',
              '$pendidikan_resp',
              '$pekerjaan_resp',
              '$no_plat_resp',
              '$jenis_kend_resp'
              
            )");

    
      
        
      
      // end of cek distinct

      
        if($tambahData){
          echo'<script>alert("Terima Kasih"); document.location.href(kuesioner.php); </script>';
       
        }
        else{
        
          echo "erro";
        }
    
?>
    