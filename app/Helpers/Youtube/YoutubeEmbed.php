<?php

namespace App\Helpers\Youtube;

class YoutubeEmbed {

    public static function getEmbed($youtube_url)
    {
        $video_id = explode('?v=', $youtube_url);
        $tpl = '<iframe src="https://www.youtube.com/embed/'.$video_id[1].'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
            
        return $tpl;
    }

}