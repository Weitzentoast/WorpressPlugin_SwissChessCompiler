<?php
    namespace Turnier\Source\DevMode;

    class Config
    {
        /* Error Message from the Class DebugHandler */
        private static array $selfErrMsg = array(
            "__construct"   => array(
            
                "paramError" => "Fehler Hafter Initalisierung der Klasse DebugHandler.
                                Der DebugHandler wird nicht initaliesiert!!!"
                
            )

        );

        private function getStringOfArray(array $data ,array|string $selector):string
        {
            if (is_string($selector) ||)) {
                return $data[$selector];
            }

            if (empty($selector[$i])) {
                return "ERROR: Param in Config File (From ".__FILE__." in Line ".__LINE__.") (1.1)";
            }

            for ($i = 0; $i < count($selector); $i++) {

                if (is_string($data) || empty($selector[$i])) {
                    return "ERROR: Param in Config File (From ".__FILE__." in Line ".__LINE__.")(EC: 1.2)";
                }

                $data = $data[$selector[$i]];

            }
        }
        public static function getSelfErrMsg(string $failingFunc, string|array $selector):string
        {

        }

    }
