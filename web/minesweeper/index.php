<h1 id="title">Minesweeper</h1><br/>
<script src="jquery.js" type="text/javascript"></script>
<script src="data-inject.js" type="text/javascript"></script>

<table id="minesweeper">
    <?php for ($n = 1; $n <= 8; $n++): ?>
        <tr>
            <?php for ($p = 1; $p <= 8; $p++): ?>
                <td id='<?php echo "cell-" . $n . "x" . $p; ?>'>empty</td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
