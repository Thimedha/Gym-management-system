<?php
 if(isset($successMessage['message'])):
?>
<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Your</strong> <?= $successMessage['message'];   ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
unset($successMessage['message']);
endif;
?>