<?php
require_once 'board.php';

function fen2array($fen)
{
    $parts = preg_split('#\s+#', $fen);
    $rows = explode('/', $parts[0]);
 
    $pieces = array();
 
    $y = 8;
    foreach ($rows as $row) {
        $x = 1;
        for ($i = 0; $i < strlen($row); $i++) {
            if (is_numeric($row[$i])) {
                $x += intval($row[$i]);
            } else {
                $pieces[$x][$y] = $row[$i];
                $x++;
            }
        }
        $y--;
    }
 
    return $pieces;
}
$pieces = fen2array('rn1qkb1r/1p3ppp/p2pbn2/4p3/4P3/1NN1BP2/PPP3PP/R2QKB1R b KQkq - 0 8');

$board = new Board($pieces);
echo $board;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
