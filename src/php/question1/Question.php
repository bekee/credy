<?php

namespace phpquestions\question1;

class Question
{
    /**
     * This is the private method
     *
     * @var mixed
     */
    private $iHoldSomeData;

    /**
     * This is just a random method that has nothing to do with current question
     *
     * @return string 
     */
    public function iAmRandomMethod()
    {
        return 'randomMethod';
    }

    /**
     * This will return the value of [[iHoldSomeData]]
     * 
     * @return mixed
     */
    public function testStuff()
    {
        return $this->iHoldSomeData;
    }

    /**
     * This modifies [[iHoldSomeData]]
     * 
     * @return void
     */
    public function iModifySomeData()
    {
        $this->iHoldSomeData = 'test';
    }
}
