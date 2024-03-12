<?php
    include_once 'header.php';
?>

<form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="POST" action="form_nilai.php">
<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
          require_once 'libfungsi.php';
          if (isset($_POST['kirim'])) {
              $nama = $_POST['nama'];
              $mataKuliah = $_POST['mataKuliah'];
              $uts = $_POST['nialiUts'];
              $uas = $_POST['nilaiUas'];
              $tugas = $_POST['nilaiTugas'];
              
              $rerata = calculateRerata($uts, $uas, $tugas);
              $grade = getGrade($rerata);
              $predikat = getPredikat($grade);
              $keterangan = getKeterangan($grade);

              echo "<tr>";
              echo "<td></td>"; // You may want to replace this with an appropriate student number
              echo "<td>$nama</td>";
              echo "<td>$mataKuliah</td>";
              echo "<td>$uts</td>";
              echo "<td>$uas</td>";
              echo "<td>$tugas</td>";
              echo "<td>$rerata</td>";
              echo "<td>$grade</td>";
              echo "<td>$predikat</td>";
              echo "<td>$keterangan</td>";
              echo "</tr>";
          } 
          ?>
      </tbody>
  </table>
</div>

<?php
    include_once 'footer.php';
?>
