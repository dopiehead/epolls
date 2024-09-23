<?php $key = openssl_random_pseudo_bytes(32); // 256-bit key
$iv = openssl_random_pseudo_bytes(16); // 128-bit IV
?>
 <!-- encrypt id before passing it to the get page  -->
 <?php 
 
 function encryptId($id, $key, $iv) {
    $encrypted = openssl_encrypt($id, 'AES-256-CBC', $key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv);
}
 ?>

<!-- decrypt id before using it in the get page -->
 <?php    
 function decryptId($encryptedId, $key) {
    list($encrypted_data, $iv) = explode('::', base64_decode($encryptedId), 2);
    return openssl_decrypt($encrypted_data, 'AES-256-CBC', $key, 0, $iv);
}
 ?>

<?php 
    $id = "12345"; // Example ID
    $encryptedId = encryptId($id, $key);
    echo "Encrypted ID: " . $encryptedId . "\n";
   $decryptedId = decryptId($encryptedId, $key);
    echo "Decrypted ID: " . $decryptedId . "\n";
    ?>