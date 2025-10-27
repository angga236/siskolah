<?php
require_once "./library/koneksi.php";
require_once "./library/dompdf/autoload.inc.php";

use Dompdf\Dompdf;
use Dompdf\Options;

// Ambil data dari database
$query = "
    SELECT p.id_pengaduan, p.nisn, s.nama_lengkap, p.tanggal_pengaduan, 
           p.judul, p.isi_pengaduan, p.status, p.tanggapan, p.tanggal_tanggapan
    FROM pengaduan p
    LEFT JOIN siswa s ON p.nisn = s.nisn
    ORDER BY p.id_pengaduan DESC
";
$result = mysqli_query($koneksi, $query);

// Siapkan HTML untuk PDF
$html = '
    <h2 style="text-align:center;">Laporan Data Pengaduan</h2>
    <table border="1" width="100%" cellspacing="0" cellpadding="6">
        <thead>
            <tr style="background-color:#f2f2f2;">
                <th>ID Pengaduan</th>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Tanggal Pengaduan</th>
                <th>Judul</th>
                <th>Isi Pengaduan</th>
                <th>Status</th>
                <th>Tanggapan</th>
                <th>Tanggal Tanggapan</th>
            </tr>
        </thead>
        <tbody>';

while ($row = mysqli_fetch_assoc($result)) {
    $html .= '
        <tr>
            <td>' . $row['id_pengaduan'] . '</td>
            <td>' . $row['nisn'] . '</td>
            <td>' . htmlspecialchars($row['nama_lengkap']) . '</td>
            <td>' . $row['tanggal_pengaduan'] . '</td>
            <td>' . htmlspecialchars($row['judul']) . '</td>
            <td>' . htmlspecialchars($row['isi_pengaduan']) . '</td>
            <td>' . $row['status'] . '</td>
            <td>' . htmlspecialchars($row['tanggapan']) . '</td>
            <td>' . $row['tanggal_tanggapan'] . '</td>
        </tr>';
}

$html .= '
        </tbody>
    </table>
';

// Konfigurasi Dompdf
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();

// Tampilkan ke browser
$dompdf->stream("Laporan_Pengaduan.pdf", array("Attachment" => false));
exit;
?>
