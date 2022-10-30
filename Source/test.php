<?php
    namespace Turnier\Source\ListConverter\EntryList;

    class Converter extends \Turnier\Source\ListConverter\Base\BaseConverter
    {
        public function __construct()
        {
            parent::__construct(Config::getFilePath());
            $this->setEntryList();
        }

        public function outputList($boolTable = false)
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

        private function setEntryList()
        {
            $data = $this->getContentInTag(Config::getTagData(), true);
            if (is_bool($data) && !$data) {
                die("Data is not Set in setParing");
            }
            
            /** data schema
             *  TNr
             *  Name (Surname, Givenname)
             *  Title
             *  TWZ = TRN?
             *  Attr
             *  Club
             *  land
             */
            for ($i = 0,$j = 0; $j < count($data)/Config::getNumOfColums(); $i+=Config::getNumOfColums(),$j++) {
                $teilnehmer = explode(",", $data[$i+1]);
                $this->data[$j] = array(
                    "TNr"       => $data[$i],
                    "surname"   => $teilnehmer[0],
                    "givenname" => $teilnehmer[1],
                    "title"     => $data[($i+2)],
                    "TWZ"       => $data[($i+3)],
                    "Attr"      => $data[($i+4)],
                    "club"    => $data[($i+5)],
                    "land"      => $data[($i+6)],
                    "birthYear" => $data[($i+7)],
                );
            }
        }

    }

