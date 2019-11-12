<?php

namespace Dokter\TimeToRead;

class TimeToRead
{
    /**
     * @var $content
     */
    private $text;

    /**
     * @var $wordsPerMinute
     * Based on the average on: http://www.execuread.com/facts/
     */
    private $wordsPerMinute = 225;

    /**
     * TimeToRead constructor.
     * @param $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * @param $wordsPerMinute
     * @return mixed
     */
    public function setWordsPerMinute($wordsPerMinute)
    {
        $this->wordsPerMinute = $wordsPerMinute;

        return $this;
    }

    /**
     * @return float
     */
    public function getMinutes()
    {
        return $this->countWords($this->text) / $this->wordsPerMinute;
    }

    /**
     * @return float
     */
    public function getSeconds()
    {
        return $this->getMinutes() * 60;
    }

    /**
     * @param $content
     * @return mixed
     */
    public function countWords($content)
    {
        return str_word_count($content);
    }
}
