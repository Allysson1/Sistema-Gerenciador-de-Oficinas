<?php
    if(isset($_SESSION['message'])) :
?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Ei!</strong> <?= $_SESSION['message']; ?>
        <button type="button" class="btn btn-primary" data-bs-dismiss="alert" label="Close"></button>
    </div>

<?php 
    unset($_SESSION['message']);
    endif;
?>