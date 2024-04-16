<?php

class Playlist
{
    /**
     * @var Song[]
     */
    public array $songs = [];

    public function addSong(Song $song): void
    {
        $this->songs[] = $song;
    }
}