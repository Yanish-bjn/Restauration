<?php
class Chiffrement {
    private static $cipher  = MCRYPT_RIJNDAEL_128;          // Algorithme utilisé pour le cryptage des blocs
    private static $key     = 'La blanquette est bonne';    // Clé de cryptage
    private static $mode    = 'cbc';                        // Mode opératoire (traitement des blocs)

    public static function crypt($data){
        $keyHash = md5(self::$key);
        $key = substr($keyHash, 0,   mcrypt_get_key_size(self::$cipher, self::$mode) );
        $iv  = substr($keyHash, 0, mcrypt_get_block_size(self::$cipher, self::$mode) );

        $data = mcrypt_encrypt(self::$cipher, $key, $data, self::$mode, $iv);
        return base64_encode($data);
    }

    public static function decrypt($data){
        $keyHash = md5(self::$key);
        $key = substr($keyHash, 0,   mcrypt_get_key_size(self::$cipher, self::$mode) );
        $iv  = substr($keyHash, 0, mcrypt_get_block_size(self::$cipher, self::$mode) );

        $data = base64_decode($data);
        $data = mcrypt_decrypt(self::$cipher, $key, $data, self::$mode, $iv);
        return rtrim($data);
    }
}
?>

<?php
$clair   = "Salut !";
$crypt   = Chiffrement::crypt($clair);
$decrypt = Chiffrement::decrypt($crypt);
?>
<pre>
clair     : <?php echo $clair; ?>
crypt     : <?php echo $crypt; ?>
raw crypt : <?php echo base64_decode($crypt); ?>
decrypt   : <?php echo $decrypt; ?>
</pre>
