<?php

namespace App\Modules\YoutubeDownloader\Exception;

use App\Modules\YoutubeDownloader\Resources\WatchVideoPage;

class TooManyRequestsException extends YouTubeException
{
    protected $page;

    public function __construct(WatchVideoPage $page)
    {
        parent::__construct(get_class($this), 429, null);

        $this->page = $page;
    }

    /**
     * @return WatchVideoPage
     */
    public function getPage()
    {
        return $this->page;
    }
}
