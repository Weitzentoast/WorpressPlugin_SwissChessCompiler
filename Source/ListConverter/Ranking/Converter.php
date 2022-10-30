<?php
    namespace \Turnier\Source\Ranking;

    class Converter
    {
        public function __construct()
        {
            parent::__construct(Config::getFilePath());
        }
    }