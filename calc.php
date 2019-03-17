<?php 
    # TODO ここdict or json の配列にしたい
    $table_data = array(
        array("卵", 100),
        array("豚肉", 200)
    );
    $i = 0;
    $j = 0;
    session_start();
    $_SESSION['array'] = $table_data;
?>
    
<html>
    <head><title>calc input</title></head>
    <body>
        <form action="calc_confirm.php" method="POST" >
            <table>
                <thead>
                    <tr>
                        <th>商品名</th>
                        <th>値段(円)</th>
                        <th>数量  </th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($table_data as $row): ?>
                    <tr>
                        <?php foreach($row as $cel): ?>
                            <td><?= $cel ?></td>
                        <?php
                            $j++;
                            endforeach; ?>
                        <td><input type="number" name=<?php echo 'quantity'.$i; ?> /></td>
                    </tr>
                <?php 
                    $i++;
                    endforeach; 
                ?>
                </tbody>
            </table>
            <input type="submit" value="計算" />
        </form>
    </body>
</html>    