<?php
    if(isset($_SESSION['user'])){
        $checkban = mysqli_fetch_assoc(mysqli_query($db, 'SELECT ban FROM users WHERE id = ' .(int)$_SESSION['user']['user_id']));

        if($_SESSION['user']['ban'] == 1 or $checkban['ban'] == 1){
            $_SESSION['user']['ban'] = 1;
            header("Location: ban.php");
        }
    }
?>
    <div class="header">
    <?php if(isset($_SESSION['user'])): ?>
<script>
                window.RufflePlayer = window.RufflePlayer || {};
                window.RufflePlayer.config = {
                    "warnOnUnsupportedContent": false, 
                    "autoplay": "on",
                    "quality": "high",
                    "unmuteOverlay": "hidden"
                };
            </script>
        <script src="https://unpkg.com/@ruffle-rs/ruffle"></script>
<center>
        <embed src="../include/html/mayner-net-nav-account.swf" width="885" height="90">
</center>
    <?php else : ?>
<script>
                window.RufflePlayer = window.RufflePlayer || {};
                window.RufflePlayer.config = {
                    "warnOnUnsupportedContent": false, 
                    "autoplay": "on",
                    "quality": "high",
                    "unmuteOverlay": "hidden"
                };
            </script>
        <script src="https://unpkg.com/@ruffle-rs/ruffle"></script>
<center>
        <embed src="../include/html/mayner-net-nav.swf" width="885" height="90">
</center>
    <?php endif; ?>
</div>