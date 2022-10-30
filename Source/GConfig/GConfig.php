<?php
namespace Turnier\Source\GConfig;

/***
 *  This Config File is regulation the other Configs
 *  Be aware that you know what you do if you change this class in Code
 *  it will be giving an option to managed it later in the Wordpress Backend :-)
 *
 *  Notice
 *      This is the only Config class which should be initialized,
 *      because it can also be pumped into classes.
*/
class GConfig
{

    /*
        Here are the file paths decalred which are some Base Class to Build on and so one.
        The 2D array schema is:
        Folder to search for and than an 1D array which contains a list of needed Files.
    */
    const REQUIRED_FILES => array(

            "ListConverter" => array(
                /* Included the base (parrent) class and the associated conf */
                B . DIRECTORY_SEPARATOR . B . S_F_T,
                B . DIRECTORY_SEPARATOR . CF . S_F_T,
            )
    );

    /** Returns a list which files need to get included (Name and Path) 
     * 
     * Returns from sorting by clear base some always needed and specific files to include in a list with Name
    */
    private static array $filesInUse = array(
        
    );

    /** Base Check UP for specific initialization of Object
     *  
     *  Initialization is only needed to get to 
     *      some critical Variables as a safty check and
     *      some relative standard stuff,
     *  which is often compiled in a easy way (exp. output some coockie with timestamp or something like that)
     */
    public function __construct(array $loadMap)
    {
        
    }

    public function getListOfFiles():array
    {

    }

}