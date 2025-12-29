<?php
session_start();
if (isset( $_SESSON['account'])){
    echo "anda berhak";
} else {
    echo "dilarang Masuk!";
}
?>