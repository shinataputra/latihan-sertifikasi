<?php
// ----------------------
// Kasus: Aplikasi Kasir
// ----------------------

// Array untuk menyimpan barang belanja
$shoppingCart = [];

// Fungsi untuk menambahkan barang ke keranjang
function addItemToCart(&$cart, $itemName, $itemPrice, $itemQuantity) {
    $cart[] = [
        "name" => $itemName,
        "price" => $itemPrice,
        "quantity" => $itemQuantity
    ];
}

// Fungsi untuk menghitung total belanja
function calculateTotal($cart) {
    $total = 0;
    foreach ($cart as $item) {
        $total += $item["price"] * $item["quantity"];
    }
    return $total;
}

// Fungsi untuk menampilkan struk belanja
function printReceipt($cart) {
    echo "===== STRUK BELANJA =====\n";
    foreach ($cart as $item) {
        echo $item["name"] . " (x" . $item["quantity"] . ") : Rp " . 
             ($item["price"] * $item["quantity"]) . "\n";
    }
    echo "-------------------------\n";
    echo "Total: Rp " . calculateTotal($cart) . "\n";
    echo "=========================\n";
}

// ----------------------
// Contoh penggunaan
// ----------------------
addItemToCart($shoppingCart, "Indomie Goreng", 3500, 3);
addItemToCart($shoppingCart, "Teh Botol Sosro", 5000, 2);
addItemToCart($shoppingCart, "Roti Coklat", 7000, 1);

// Cetak struk
printReceipt($shoppingCart);
