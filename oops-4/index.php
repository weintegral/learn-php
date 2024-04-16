<?php
require_once 'SongHolder.php';
require_once 'Album.php';

function getSongsFromAlbum(SongHolder $songHolder): array
{
    return $songHolder->getSongs();
}

getSongsFromAlbum(new Album());
