<?php

namespace tests\unit\php\question1;

use Codeception\Test\Unit;
use phpquestions\question1\Question;

class QuestionTest extends Unit
{
    public function testQuestionIsNotModified()
    {
        $question = new Question();

        $question->iModifySomeData();

        $this->assertEquals('test', $question->testStuff());
    }
}
