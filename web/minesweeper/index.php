<h1 id="title">Minesweeper</h1><br/>

<table>
    <?php for ($n = 1; $n <= 8; $n++): ?>
        <tr>
            <?php for ($p = 1; $p <= 8; $p++): ?>
                <td id='<?php echo "cell-" . $n . "x" . $p; ?>'></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
