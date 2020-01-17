<?php

$world = [
  1 => [
    'look' => "You are standing outside a large hotel.",
    'walkcmds' => [
        'go inside' => 2
    ]
  ],
  2 => [
    'look' => "You are standing in the lobby of a large hotel, a big staircase is in front of you.",
    'walkcmds' => [
        'go outside' => 1,
        'go upstairs' => 3
    ]
  ],
  3 => [
    'look' => "You are standing at the top of the stairs.",
    'walkcmds' => [
        'go downstairs' => 2
    ]
  ]
];

echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
$player_location = 1;
$input = "";

do {
    echo "\n".$world[$player_location]['look'];
    echo "\n\nWhat do you want to do? ";
    $handle = fopen ("php://stdin","r");
    $input = fgets($handle);
    $input = trim($input);
    if ($wheretogo = @$world[$player_location]['walkcmds'][$input])     $player_location = $wheretogo;
} while ($input != 'exit');

fclose($handle);
echo "\n\nGood bye\n";
?>
