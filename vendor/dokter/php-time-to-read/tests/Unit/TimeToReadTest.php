<?php

use Dokter\TimeToRead\TimeToRead;
use PHPUnit\Framework\TestCase;

class ReadingTimeTest extends TestCase
{
    private $wordsPerMinute = 275;

    public function readData($path)
    {
        return file_get_contents(__DIR__ . $path);
    }

    public function testMinutes()
    {
        $content = $this->readData('/test-data/1000.txt');

        $this->assertEquals(4.444444444444445, (new TimeToRead($content))->getMinutes());
    }

    public function testMinutesCustomWordsPerMinute()
    {
        $content = $this->readData('/test-data/1000.txt');

        $this->assertEquals(3.6363636363636362, (new TimeToRead($content))->setWordsPerMinute($this->wordsPerMinute)->getMinutes());
    }


    public function testSeconds()
    {
        $content = $this->readData('/test-data/1000.txt');

        $this->assertEquals(266.6666666666667, (new TimeToRead($content))->getSeconds());
    }

    public function testSecondsCustomWordsPerMinute()
    {
        $content = $this->readData('/test-data/1000.txt');

        $this->assertEquals(218.1818181818182, (new TimeToRead($content))->setWordsPerMinute($this->wordsPerMinute)->getSeconds());
    }
}