<?php 
        include 'koneksi.php';
        
        if(isset($_POST['submit'])) {
         
      
              $nama =$_POST['nama'];
     $email = $_POST['email'];   
    
        $tanggal =$_POST['tanggal'];  
        $bulan =$_POST['bulan']; 
        $tahun =$_POST['tahun'];
        $jk =$_POST['jk'];
  $pass = $_POST['pass'];
          
            $query = "INSERT INTO tbluser VALUES (NULL, '$nama', '$pass', '$email', '$jk', '$tanggal', '$bulan', '$tahun')";
            $input = mysqli_query($dbconnect, $query);
            
            if(!$input) {
                die ("query gagal dijalankan: ".mysqli_errno($dbconnect). " - ".mysqli_error($dbconnect));
            }
          header("location:register.php");
        } 
?>