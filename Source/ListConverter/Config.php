<?php
    namespace Turnier\Source\ListConverter;

    class Config
    {
        private static $tagData = "<TD>";

        public function getTagData():string
        {
            return self::$tagData;
        }

    }
