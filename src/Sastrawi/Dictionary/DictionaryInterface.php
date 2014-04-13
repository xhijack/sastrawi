<?php

namespace Sastrawi\Dictionary;

interface DictionaryInterface extends \Countable
{
    /**
     * Lookup a word, return the word if found
     *
     * @param  string      $word the word to look up for
     * @return string|null
     */
    public function lookup($word);
}
