<?php
  session_start();
?>
<html>
<head>
</head>
<body>
  <center>
    <div>
      <table id="par_pembuka">
        <span class="masuk_alinea">&nbsp;</span><table width="800px" border="10" >
          <tr>
            <tr bgcolor='aquamarine'>
              <td colspan="2">
                <img src="img/logo1.jpg" style="float:left;">
              </td>
              <td><b>PT PLN (Persero) <br /> P3B Sumatera</b></td>
              <td><b>FORMULIR <BR> JOB SAFETY ANALYSIS (JSA)</b></td>
              <td rowspan="1" colspan="3"><b>SISTEM MANAJEMEN MUTU <br> ISO 9001 : 2015</b></td>
            </tr>
          <tr>
      		<tr bgcolor='aquamarine'>
            <td colspan="2" rowspan="2"><b>No. Dokumen <br> Revisi</b></td>
            <td rowspan="2"><b>FR-TRS-LKK-012 <BR> 1</b></td>
            <td colspan="1"><b>Tanggal</b></td>
            <td colspan="2"><b>30 Oktober 2017</b></td>
          </tr>
      		<tr bgcolor='aquamarine'>
            <td><b>Halaman<b></td>
            <td ><b>Halaman 1 dari 1</b></td>
          </tr>
          <tr>
            <td rowspan="1" id="content_surat"><b>Pekerjaan</b></td>
            <td>:</td>
            <td><?= isset($_SESSION['pekerjaan']) ? $_SESSION['pekerjaan'] : ''; ?></td>
          </tr>
          <tr>
            <td><b>Deskripsi Pekerjaan</b></td>
            <td rowspan="1" colspan="4">Kegiatan bertujuan untuk memeriksa kondisi peralatan gardu induk terkini  dalam kondisi padam dengan melakukan pengukuran dan pengujian  sehingga didapatkan data yang akan digunakan sebagai dasar assesment, melakukan pembersihan isolator peralatan sehingga nilai isolasinya terjaga serta melakukan pengencangan dan penggantian mur baut  pada konektor antara konduktor dan peralatan untuk mengurangi potensi hotspot pada konektor.<br>
      		</tr>
          <tr>
            <td rowspan="1" colspan="4"><b>Peralatan Kerja dan Alat K2</b></td>
            <td rowspan="1" colspan="4"><b>Alat Pelindung Diri (APD) yang digunakan</b></td>
      		</tr>
          <tr>
            <td rowspan="1" colspan="4">-Insulation Tester  -Transformer Test Set  -Tangga<br>-Resistance Contact Meter  -Multi Tester  -Steger<br>-Circuit Breaker Analyzer  -Tool Set + Kunci  -Voltage detector<br>-CT Analyzer  -Material : Kain majun + Pembersih  -Stick Ground</td>
            <td rowspan="1" colspan="4">-Helm<br>-Sepatu Safety<br>-Wearpack<br>-Full Body Harness + Accecories</td>
          </tr>
          <tr>
            <td colspan="5"><b>Keterangan  T: </b><i>Risiko Tinggi, <b>M:</b><i>Risiko Menengah, <b>R:</b><i>Risiko Rendah</i></td>
          </tr>
          <tr>
            <td rowspan="1"><b>No</b></td>
            <td rowspan="1"><b>Langkah Kerja</b></td>
            <td><b>Potensi Bahaya</b></td>
            <td><b>APD yang digunakan<b></td>
      		  <td><b>Prosedur Bekerja Aman yang Direkomendasikan</b></td>
          </tr>
          <tr>
            <td rowspan="1">1</td>
    		    <td rowspan="1">Persiapan K3</td>
            <td>Personil belum siap secara fisik dan mental</td>
            <td>Helm, Sepatu safety, Wearpack</td>
      		  <td>Melakukan Briefing K3, penjelasan area kerja dan batasan area kerja, instruksi pekerjaan, memastikan kondisi fisik dan mental para pengawas dan pelaksana serta memakai APD sebelum memasuki area kerja.</td>
      	</tr>
          <tr>
            <td rowspan="1">2</td>
      		  <td rowspan="1">Memasuki area lokasi kerja</td>
            <td>Induksi Tegangan di Switch Yard</td>
            <td>Helm, Sepatu safety, Wearpack</td>
      		  <td>Pastikan papan tanda bahaya (tagging) dan rambu- rambu K3 telah terpasang sesuai serta mendengarkan instruksi dari pengawas K3.</td>
          </tr>
          <tr>
            <td rowspan="1">3</td>
      		  <td rowspan="1">Memasang Grounding lokal (stick ground)</td>
            <td>Terkena Tegangan Busbar di Switch Yard</td>
            <td>Helm, Sepatu safety, Wearpack,bodyharness</td>
      		  <td>Melakukan pemeriksaan tegangan dengan voltage detector dan memasang stick ground dengan benar.</td>
      	  </tr>
          <tr>
            <td rowspan="1">4</td>
    		    <td rowspan="1">Pengujian dan pengukuran peralatan(TRAFO,PMT,CT,LA)</td>
            <td>Terjatuh<hr>Terkena induksi</td>
            <td>Helm, Sepatu safety, Wearpack,bodyharness</td>
    		    <td>Memakai body harness dan dikaitkan pada tempat yang kuat dan aman<hr>Harus sudah dipastikan bay Trafo sudah bebas tegangan<hr>Grounding lokal</td>
      	  </tr>
          <tr>
            <td rowspan="1">5</td>
      		  <td rowspan="1">Membersikan isolator, melepas dan memasang  konektor</td>
            <td>Terjatuh<hr>Terkena induksi</td>
            <td>Helm, Sepatu safety, Wearpack,bodyharness</td>
      		    <td>Memakai body harness dan dikaitkan pada tempat yang kuat dan aman<hr>Harus sudah dipastikan bay Trafo sudah bebas tegangan<hr>Grounding lokal</td>
      	  </tr>
          <tr>
            <td rowspan="1" colspan="4"><b>Keterangan Lain-Lain :</b></td>
            <td rowspan="1"><B>Sketsa/Gambar Lokasi Kerja :<B></td>
          </tr>
          <tr>
            <td><b>Penunjukan Pengawas K3 No</b></td>
      		  <td colspan="3">
      		  <td rowspan="3" colspan="1"><img src="img/hartrafo.jpg"></td>
          </tr>
          <tr>
            <td><b>Dokumen Ijin Kerja No : </b></td>
      		  <td colspan="3">
          </tr>
          <tr>
            <td rowspan="1"><b>Tanda Tangan dan Nama Terang</b></td>
            <td>Dibuat Oleh : <br> Pengawas Pekerjaan<br><br><br><br><b>Fandi Aro Simanjuntak</b></td>
            <td>Diperiksa : <br> Pengawas K3 <br><br><br><br><br><br></td>
            <td>Disetujui: <br> Penanggung Jawab Pekerjaan <br><br><br><br><b>Sugandhi</b></td>
      	  </tr>
          <tr>
            <td colspan="5"><b>*)  Asman. pemeliharaan, MTRAGI/mitra kerja</b></td>
          </tr>
        	<tr>
        	</tr>
      </table>
    </div>
  </center>
</body>
</html>
