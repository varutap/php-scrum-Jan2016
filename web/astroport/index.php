<script src="jquery.js"></script>
<h1 id="astroport-name">Krroo Astroport</h1>
<br />
<div id="gate-1">
<div>Ship</div><br />
<div id="ship-1">-- None --</div><br />
</div>
<br />
<div id="gate-2">
<div>Ship</div><br />
<div id="ship-2">-- None --</div><br />
</div>
<br />
<div id="gate-3">
<div>Ship</div><br />
<div id="ship-3">-- None --</div><br />
</div>
<br />
<div>
  <div>Ship</div><input id="ship" type="text" /><button id="dock">dock</button>
</div>

<script>
$("#dock").click(function() {
   $("#ship-1").html($("#ship").val() );
});

</script>
