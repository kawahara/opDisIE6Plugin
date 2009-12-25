<?php if ($isIE6): ?>
<div id="disie6" style="right:0%;top:0px;position:absolute;padding:5px;font-size:32px;font-weight:bold;">
アナログ
</div>
<script type="text/javascript">
var disie6 = document.getElementById("disie6");
function disie6_scroll() {
  var _top = document.documentElement.scrollTop || document.body.scrollTop;
  disie6.style.top = _top + "px";
  setTimeout(disie6_scroll, 200);
}
disie6_scroll();
</script>
<?php endif; ?>
