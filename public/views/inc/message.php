<?php if ($_SESSION['message']) :?>
<div class="div-message">
    <?php
        echo ($_SESSION['message']);
        unset($_SESSION['message']);
    ?>
    <button onclick="closeWinMessage()" class="btn-message-code">Закрыть</button>
</div>
<?php endif; ?>