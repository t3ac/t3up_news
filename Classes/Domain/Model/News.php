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
     * @var string
     */
    protected $imageonly;

    /**
     * eventStart
     *
     * @var \DateTime
     */
    protected $eventStart = null;

    /**
     * Returns the eventStart
     *
     * @return \DateTime $eventStart
     */
    public function getEventStart()
    {
        return $this->eventStart;
    }

    /**
     * Sets the eventStart
     *
     * @param \DateTime $eventStart
     * @return void
     */
    public function setEventStart(\DateTime $eventStart)
    {
        $this->eventStart = $eventStart;
    }

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

    /**
     * @return string
     */
    public function getImageonly() {
            return $this->imageonly;
    }

    /**
     * @param string $imageonly
     */
    public function setImageonly($imageonly) {
            $this->imageonly = $imageonly;
    }
		
}

