<?php

namespace phpquestions\question1;

class Answer extends Question
{
    /**
     * This modifies [[iHoldSomeData]]
     * 
     * @return void
     */
    public function iModifySomeData()
    {
        $this->iHoldSomeData = 'modified';
    }
}
