<?php
function generateChessBoard()
{
    $board = array(
        array('R','N','B','Q','K','B','N','R'),
        array('P','P','P','P','P','P','P','P'),
        array('.','.','.','.','.','.','.','.'),
        array('.','.','.','.','.','.','.','.'),
        array('.','.','.','.','.','.','.','.'),
        array('.','.','.','.','.','.','.','.'),
        array('P','P','P','P','P','P','P','P'),
        array('r','n','b','q','k','b','n','r')
    );
    return $board;   
}

function displayChessBoard($board)
{
    foreach ($board as $row) {
        foreach ($row as $piece)
        {
           echo $piece . ' ';
        }
        echo "\n";
    }
}
// generate and display the chess board
$ChessBoard = generateChessBoard();
displayChessBoard($ChessBoard);
?> 
