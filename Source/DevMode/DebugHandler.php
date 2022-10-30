<?php
    namespace Turnier\Source\DevMode;

    class DebugHandler
    {

        private bool $devMode = false;

        public function __construct($setDevMode = false)
        {
            if (!is_bool($setDevMode)) {
                exit(Config::getSelfErrMsg());
            }
            if ($setDevMode) {
                $this->devMode = $setDevMode;
            }
        }

        /** simpleErrMsg to develop
         *  needs to be later changed to a function Full Err Or Msg Function with Log writter and so one.
         *
         *  @param string $msg (text which should gets output)
         *  @param bool $override = false (specific override that output is printed)
         *  @param bool stopScript = false (checks if Script should need a exit executing after execute)
         *
         *  @return void
         */
        public function simpleErrMsg(string $msg, bool $override = false, bool $stopScript = false):void
        {
            /*** (Description)
                First check if devMode is On or specific has override set.
                If Yes outputs MSG
                and Tests if param is set for a critical error.
            **/
            if ($this->devMode || $override) {
                echo $msg."<br>";
                
                if ($stopScript) {
                    die("FATAL ERROR: Execution stoped.");
                }

            }

        }

    }
