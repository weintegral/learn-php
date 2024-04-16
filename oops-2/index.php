<?php
declare(strict_types=1);

require_once 'Song.php';
require_once 'Playlist.php';

$playlist = new Playlist;

$song1 = new Song('The Beatles - Hey Jude', 100);
$song2 = new Song('The Beatles - Let It Be', 200);
$song3 = new Song('The Beatles - Yesterday', 300);

$playlist->addSong($song1);
$playlist->addSong($song2);
$playlist->addSong($song3);

$playlistSongs = $playlist->songs;

foreach ($playlistSongs as $song) {
    echo $song->name . ' has been played ' . $song->numberOfPlays . ' times' . PHP_EOL;
}

// for($i = 0; $i < count($playlistSongs); $i++) {
//     echo $playlistSongs[$i]->name . ' has been played ' . $playlistSongs[$i]->numberOfPlays . ' times' . PHP_EOL;
// }

// while(count($playlistSongs) > 0) {
//     $song = array_shift($playlistSongs);
//     echo $song->name . ' has been played ' . $song->numberOfPlays . ' times' . PHP_EOL;
// }