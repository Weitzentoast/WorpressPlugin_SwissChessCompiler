<?php
    namespace Turnier\Source\ListConverter\EntryList;

    class Converter extends \Turnier\Source\ListConverter\Base\Converter
    {
        public function __construct()
        {
            parent::__construct(Config::getFilePath());
            $this->setList();
        }

        private function setList()
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
             *  attr
             *  club
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

