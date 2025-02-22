<?php
    require ('Petshop.php');
    $llist = array();
    $newItem = new Petshop("1A", "Sisir", "Alat", "10000", "default.png");
    $llist[] = $newItem;
?>

<!DOCTYPE html>
<html lang="en">
<!-- Tabel Data -->
<table border="1" style="border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr>
            <th style="padding: 10px;">ID</th>
            <th style="padding: 10px;">Nama</th>
            <th style="padding: 10px;">Kategori</th>
            <th style="padding: 10px;">Harga</th>
            <th style="padding: 10px;">Gambar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // session_start();
        if (isset($llist)) {
            foreach($llist as $item) {
                echo "<tr>";
                echo "<td style='padding: 10px;'>" . $item->getId() . "</td>";
                echo "<td style='padding: 10px;'>" . $item->getNama() . "</td>";
                echo "<td style='padding: 10px;'>" . $item->getKategori() . "</td>";
                echo "<td style='padding: 10px;'>Rp " . number_format($item->getHarga(), 0, ',', '.') . "</td>";
                echo "<td style='padding: 10px;'>";
                if(!empty($item->getGambar())) {
                    echo "<img src='" . $item->getGambar() . "' style='max-width: 100px;'>";
                }
                echo "</td>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>
<h1>Add Item</h1>
<?php
    $newItem = new Petshop("2A", "Gunting", "Alat", "5000", "default.png");
    $llist[] = $newItem;
?>
<table border="1" style="border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr>
            <th style="padding: 10px;">ID</th>
            <th style="padding: 10px;">Nama</th>
            <th style="padding: 10px;">Kategori</th>
            <th style="padding: 10px;">Harga</th>
            <th style="padding: 10px;">Gambar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // session_start();
        if (isset($llist)) {
            foreach($llist as $item) {
                echo "<tr>";
                echo "<td style='padding: 10px;'>" . $item->getId() . "</td>";
                echo "<td style='padding: 10px;'>" . $item->getNama() . "</td>";
                echo "<td style='padding: 10px;'>" . $item->getKategori() . "</td>";
                echo "<td style='padding: 10px;'>Rp " . number_format($item->getHarga(), 0, ',', '.') . "</td>";
                echo "<td style='padding: 10px;'>";
                if(!empty($item->getGambar())) {
                    echo "<img src='" . $item->getGambar() . "' style='max-width: 100px;'>";
                }
                echo "</td>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>
<h1>Mencari Item</h1>
<?php
    function searchById($llist, $id) {
        $result = array();
        foreach($llist as $item) {
            if(strtolower($item->getId()) === strtolower($id)) {
                $result[] = $item;
            }
        }
        return $result;
    }
    $search = searchById($llist, "1A");
?>
<table border="1" style="border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr>
            <th style="padding: 10px;">ID</th>
            <th style="padding: 10px;">Nama</th>
            <th style="padding: 10px;">Kategori</th>
            <th style="padding: 10px;">Harga</th>
            <th style="padding: 10px;">Gambar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // session_start();
        if (isset($search)) {
            foreach($search as $item) {
                echo "<tr>";
                echo "<td style='padding: 10px;'>" . $item->getId() . "</td>";
                echo "<td style='padding: 10px;'>" . $item->getNama() . "</td>";
                echo "<td style='padding: 10px;'>" . $item->getKategori() . "</td>";
                echo "<td style='padding: 10px;'>Rp " . number_format($item->getHarga(), 0, ',', '.') . "</td>";
                echo "<td style='padding: 10px;'>";
                if(!empty($item->getGambar())) {
                    echo "<img src='" . $item->getGambar() . "' style='max-width: 100px;'>";
                }
                echo "</td>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>
<h1>Menghapus Item</h1>
<?php 
    function deleteById($llist, $id) {
        foreach($llist as $key => $item) { // mengambil index suatu elemen pada array
            if(strtolower($item->getId()) === strtolower($id)) {
                unset($llist[$key]); // menghapus elemen dari array dengan index
            }
        }
        return array_values($llist); // Mengembalikan array yang sudah dimodifikasi
    }
    $search = deleteById($llist, "1A");
?>
<table border="1" style="border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr>
            <th style="padding: 10px;">ID</th>
            <th style="padding: 10px;">Nama</th>
            <th style="padding: 10px;">Kategori</th>
            <th style="padding: 10px;">Harga</th>
            <th style="padding: 10px;">Gambar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // session_start();
        if (isset($search)) {
            foreach($search as $item) {
                echo "<tr>";
                echo "<td style='padding: 10px;'>" . $item->getId() . "</td>";
                echo "<td style='padding: 10px;'>" . $item->getNama() . "</td>";
                echo "<td style='padding: 10px;'>" . $item->getKategori() . "</td>";
                echo "<td style='padding: 10px;'>Rp " . number_format($item->getHarga(), 0, ',', '.') . "</td>";
                echo "<td style='padding: 10px;'>";
                if(!empty($item->getGambar())) {
                    echo "<img src='" . $item->getGambar() . "' style='max-width: 100px;'>";
                }
                echo "</td>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>