<?php
session_start();
session_destroy();
echo "
<script>
alert('Terima Kasih');
window.location = 'login/index.html';
</script>
";
?>