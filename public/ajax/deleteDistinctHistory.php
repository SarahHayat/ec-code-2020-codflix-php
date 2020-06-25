<?php

$id_history = $_GET['id_history'];

History::deleteDistinctHistory($id_history);

//header('Location : index.php?action=history');
?>
<script>
window.location = "http://localhost:8888/EC_CODE_SARAH/ec-code-2020-codflix-php/index.php?action=history"
    </script>
