<?php
    $submit = isset ($_POST['submit']) ? $_POST['submit'] :'';
    $naleng = isset ($_POST['naleng']) ? $_POST['naleng'] :'';
    $matkul = isset ($_POST['matkul']) ? $_POST['matkul'] :'';
    $nilai_uts = isset($_POST['nilai-uts']) ? $_POST['nilai-uts'] :'';
    $nilai_uas = isset($_POST['nilai-uas']) ? $_POST['nilai-uas'] : '';
    $nilai_tugas = isset($_POST['nilai-tugas']) ? $_POST['nilai-tugas'] :'';

    if($nilai_tugas < 50){
        echo "lulus";
    }else{
        echo "tidak lulus";
    }

    if($nilai_uas = 100){
        $nilai_uas = "A";
    }else if($nilai_uas > 80){
        $nilai_uas = "B";
    }else if ($nilai_uas > 60){
        $nilai_uas = "C";
    }else if($nilai_uas > 40){
      $nilai_uas = "D";
    }else if($nilai_uas > 20){
      $nilai_uas = "E";
    }

    switch ($nilai_uts) {
        case 'A':
          $info = "Sangat Memuaskan";
          break;
         case 'B':
           $info = "Memuaskan";
           break;
         case 'C':
           $info = "Cukup";
           break;
         case 'D':
           $info = "Kurang";
           break;
         case 'E':
           $info = "Sangat Kurang";
           break;
    }
    echo '<br/>Nama Lengkap : '.$naleng;
    echo '<br/>Mata Kuliah : '.$matkul;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas : '.$nilai_uas;
?>