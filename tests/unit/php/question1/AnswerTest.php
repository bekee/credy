<?php

namespace tests\unit\php\question1;

use Codeception\Test\Unit;
use phpquestions\question1\Answer;

class AnswerTest extends Unit
{
    public function testAnswer()
    {
        $question = new Answer();

        $question->iModifySomeData();

        $this->assertEquals('modified', $question->testStuff());
    }
}
