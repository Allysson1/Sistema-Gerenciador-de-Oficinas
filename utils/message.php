<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(isset($_SESSION['message'])) :
?>
    <link rel="stylesheet" href="../css/style.css">
    <div class=" d-flex justify-content-center col-12 pt-5">
        <div class="alert fade show col-6" role="alert">
            <div class="d-flex justify-content-center">
                <?= $_SESSION['message']; ?>
            </div>
        </div>
    </div>

<?php 
    unset($_SESSION['message']);
    endif;
?>