<?php
// Fungsi untuk mencari semua file yang diubah dalam direktori dan sub-direktori
function find_recent_files($dir, $time) {
    $recent_files = [];
    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($files as $file) {
        if ($file->isFile()) {
            // Cek apakah file diubah setelah waktu yang ditentukan
            if (filemtime($file) >= $time) {
                $recent_files[] = $file->getPathname();
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
    $start_time = strtotime('today 00:00'); // Hanya file yang diubah hari ini
    $root_dir = '/home/msc2022/public_html/';   // Direktori yang akan dicek

    // Dapatkan total file untuk progres bar
    $total_files = count_files($root_dir);
    $checked_files = 0;
    $recent_files = [];
    
    // Mulai pengecekan dengan progres
    echo "<h3>Proses pengecekan berjalan...</h3>";
    ob_flush();
    flush();

    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root_dir));
    foreach ($files as $file) {
        if ($file->isFile()) {
            $checked_files++;
            // Update persentase pengecekan
            $percent_done = ($checked_files / $total_files) * 100;
            echo "<script>document.getElementById('progress').value = $percent_done;</script>";
            ob_flush();
            flush();

            // Cek apakah file diubah setelah waktu yang ditentukan
            if (filemtime($file) >= $start_time) {
                $recent_files[] = $file->getPathname();
            }
        }
    }

    // Jika pengecekan selesai, tampilkan hasilnya
    if (!empty($recent_files)) {
        echo "<h3>File yang diubah atau diunggah hari ini:</h3><ul>";
        foreach ($recent_files as $file) {
            echo "<li>" . $file . " - " . date("Y-m-d H:i:s", filemtime($file)) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<h3>Tidak ada file yang diubah hari ini.</h3>";
    }
} else {
    // Tampilkan tombol "Mulai" jika belum diklik
    echo "<form method='POST'>";
    echo "<input type='submit' name='start' value='Mulai'>";
    echo "</form>";
}
?>

<!-- Progres bar untuk menampilkan persentase -->
<progress id="progress" value="0" max="100" style="width:100%;"></progress>

