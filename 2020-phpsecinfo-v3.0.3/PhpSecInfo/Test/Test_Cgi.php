<?php
/**
 * Skeleton Test class file for Cgi group
 *
 * @author Ed Finkler <coj@funkatron.com>
 */

/**
 * require the main PhpSecInfo class
 */
require_once ('PhpSecInfo/Test/Test.php');

/**
 * This is a skeleton class for PhpSecInfo "CGI" tests
 */
class PhpSecInfo_Test_Cgi extends PhpSecInfo_Test
{

    /**
     * This value is used to group test results together.
     * For example, all tests related to the mysql lib should be grouped under "mysql."
     *
     * @public string
     */
    public $test_group = 'CGI';

    /**
     * "CGI" tests should only be run if we're running as a CGI.
     * The best way I could think of
     * to test this was to preg against the php_sapi_name() return value.
     *
     * @return boolean
     */
    public function isTestable()
    {
        /*
         * if ( preg_match('/^cgi.*$/', php_sapi_name()) ) {
         * return true;
         * } else {
         * return false;
         * }
         */
        return strpos(php_sapi_name(), 'cgi') === 0;
    }

    /**
     * Set the messages for CGI tests
     */
    public function _setMessages()
    {
        parent::_setMessages();
        $this->setMessageForResult(PHPSECINFO_TEST_RESULT_NOTRUN, 'en', "You don't seem to be using CGI SAPI.");
        
        $this->setMessageForResult(PHPSECINFO_TEST_RESULT_NOTRUN, 'fr', "Vous ne semblez pas utiliser CGI SAPI.");
        
        $this->setMessageForResult(PHPSECINFO_TEST_RESULT_NOTRUN, 'ru', "Вы, кажется, не используете CGI SAPI.");
        
    }
}