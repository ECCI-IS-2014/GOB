<?php
/**
 * Created by PhpStorm.
 * User: estebannoguerapenaranda
 * Date: 02/11/14
 * Time: 18:16
 */

class AllTestsTest extends CakeTestSuite {
    public static function suite() {
        $suite = new CakeTestSuite('All tests');
        $suite->addTestDirectoryRecursive(TESTS . 'Case');
        return $suite;
    }
}