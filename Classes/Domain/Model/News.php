<?php

namespace T3ac\T3upNews\Domain\Model;

/**
 * News model
 */
class News extends \GeorgRinger\News\Domain\Model\News {

    /**
     * @var string
     */
    protected $nomore;

    /**
     * @return int
     */
    public function getNomore(): int
    {
        return $this->nomore;
    }

    /**
     * @param int $nomore
     */
    public function setNomore($nomore): void
    {
        $this->nomore = $nomore;
    }
	
}

