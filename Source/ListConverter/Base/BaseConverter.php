<?php
    namespace Turnier\Source\ListConverter\Base;

    class BaseConverter
    {

        protected function __construct()
        {
            
        }

        

        private function setList():void
        {
            
        }

        public function outputList(array $list,$boolTable = false)
        {
            $list = array(
                "TNr",
                "surname",
                "givenname",
                "title",
                "TWZ",
                "Attr",
                "club",
                "land",
                "birthYear"
            );

            if ($boolTable) {
                ?>
                <div>
                <?php
                for ($i = 0; $i < count($list); $i++) {
                    ?>
                    <div> <?php echo $list[$i];?> </div>
                    <?php
                }
                ?>
                <div>
                <div>
                <?php
                    for($i = 0;$i < $this->data) {}        
                ?>
                </div>
                <?php
            }
            
        }
    }
