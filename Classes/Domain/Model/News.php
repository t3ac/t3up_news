<?php

namespace T3ac\T3upNews\Domain\Model;

/**
 * News
 */
class News extends \GeorgRinger\News\Domain\Model\News {

    /**
     * @var string
     */
    protected $nomore;

    /**
     * @return string
     */
    public function getNomore() {
            return $this->nomore;
    }

    /**
     * @param string $nomore
     */
    public function setNomore($nomore) {
            $this->nomore = $nomore;
    }
	
}

