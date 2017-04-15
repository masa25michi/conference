<?php
    if(isset($html_error)){
        echo '<p style="text-align:center; color:red;">'.$html_error.'</p>';
    }
    
?>
<div class='wrapper style3'>
    <article class='container'>
        <button onclick="goBack()">Go Back</button>
    </article>
</div>
<script>
function goBack() {
    window.history.back();
}
</script>