<style>
 .gatebox {
   width: 100px;
   float: left;
 }
 .free {
   background-color: #CCCCCC;
   border: 1px solid #000000;
 }
 .occupied {
   background-color: #999999;
   border: 1px solid #000000;
 }
 .hidden {
   display: none;
 }
</style>
<script src="jquery.js"></script>
<h1 id="astroport-name">Krroo Astroport</h1>
<br />
<div>
  <div id="gate-1" class="gatebox">
  <div>Ship</div><br />
  <div id="ship-1">-- None --</div><br />
  </div>
  <div id="gate-2" class="gatebox">
  <div>Ship</div><br />
  <div id="ship-2">-- None --</div><br />
  </div>
  <div id="gate-3" class="gatebox">
  <div>Ship</div><br />
  <div id="ship-3">-- None --</div><br />
  </div>
  <div style="clear: both"></div>
</div>
<br />
<div>
  <div>Ship</div><input id="ship" type="text" /><button id="dock">dock</button>
</div>
<br />
<div id="info" class="hidden">
The ship has been docked at gate 1
</div>

<script>
var current_gate = 0;
$("#dock").click(function() {
  $("#ship-1").html($("#ship").val() );
  $("#gate-1").removeClass("free").addClass("occupied");
  makeFree("#gate-2");
  makeFree("#gate-3");
  $("#info").removeClass("hidden");
});
$("#ship").focusin(function() {
  $("#ship").val("");
  $("#info").addClass("hidden");
  $("#gate-1").removeClass("occupied").addClass("free");
});

$("#gate-1").addClass("free");
$("#gate-2").addClass("free");
$("#gate-3").addClass("free");

function makeFree(div_id)
{
  $(div_id).removeClass("occupied").addClass("free");
}
</script>
