<?php
// Fungsi untuk mencari file yang diubah pada tanggal tertentu
function find_files_modified_today($dir, $target_date) {
    $recent_files = [];
    $total_files = count_files($dir); // Mendapatkan jumlah total file untuk progres
    $checked_files = 0;

    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($files as $file) {
        if ($file->isFile()) {
            $checked_files++;
            // Update progres bar
            $percent_done = ($checked_files / $total_files) * 100;
            echo "<script>document.getElementById('progress').value = $percent_done;</script>";
            ob_flush();
            flush();

            // Cek apakah file diubah pada tanggal target
            $file_modified_time = date("Y-m-d", filemtime($file));
            if ($file_modified_time == $target_date) {
                $recent_files[] = $file->getPathname(); // Tambahkan file ke hasil jika diubah di tanggal target
            }
        }
    }

    return $recent_files;
}

// Fungsi untuk menghitung total file dalam direktori (untuk progres bar)
function count_files($dir) {
    $file_count = 0;
    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($files as $file) {
        if ($file->isFile()) {
            $file_count++;
        }
    }
    return $file_count;
}

// Jika tombol "Mulai" di-klik
if (isset($_POST['start'])) {
    $target_date = '2024-09-12'; // Tanggal yang ingin dicari file yang diubah
    $root_dir = '/var/www/edos/assets/';   // Direktori yang ingin diperiksa

    // Dapatkan total file untuk progres bar
    $total_files = count_files($root_dir);
    echo "<h3>Proses pengecekan berjalan...</h3>";
    ob_flush();
    flush();

    // Cari file yang diubah pada tanggal target
    $recent_files = find_files_modified_today($root_dir, $target_date);

    // Menampilkan hasil pengecekan
    echo "<h3>Hasil Pengecekan:</h3>";
    if (!empty($recent_files)) {
        echo "<ul>";
        foreach ($recent_files as $file) {
            echo "<li>" . $file . " - Terakhir diubah pada: " . date("Y-m-d H:i:s", filemtime($file)) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Tidak ada file yang diubah pada tanggal $target_date.</p>";
    }
} else {
    // Tampilkan tombol "Mulai" jika belum diklik
    echo "<form method='POST'>";
    echo "<input type='submit' name='start' value='Mulai'>";
    echo "</form>";
}
?>

<!-- Progres bar untuk menampilkan persentase pengecekan -->
<progress id="progress" value="0" max="100" style="width:100%;"></progress>
