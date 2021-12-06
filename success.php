<?php

<div class="alertation_success" id="fav">
        <div class="alert_note">
            <strong>Wow!</strong> created
            <button onclick="myfn()">X</button>
        </div> 
</div>
<script>
function myfn() {
  var myobj = document.getElementById("fav");
  myobj.remove();
}
</script>
?>