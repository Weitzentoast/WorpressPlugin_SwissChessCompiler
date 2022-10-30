<?php
    //Checks if Config File is included
    declared('TC_CHECK') or die('Config File is not included');

    namespace Plugin_Turnier\Lib;

    class Upload
    {
        private string $file = "";

        public function __construct($actionName = "")
        {        
            $this->testeUpload($actionName);
            
            //File einlesen
            $this->file = file_get_contents($_FILES['file']['tmp_name'])
        }

        private function testeUpload(string $testedValue ="",null|string $tested = null)
        {
            if (is_null($tested)) {
                $tested = Config::getUploadAction();
            }
            if(isset($_GET[$tested]) && isset($_GET[$testedValue])) {

            }
        }
    }
?>