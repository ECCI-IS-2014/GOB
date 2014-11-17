<?php
/**
 * Created by PhpStorm.
 * User: Dayner Umaña
 * Date: 19/10/14
 * Time: 10:39 PM
 */
class AllTestsTest extends CakeTestSuite {
    public static function suite() {
        $suite = new CakeTestSuite('All tests');
        $suite->addTestDirectoryRecursive(TESTS . 'Case');
        return $suite;
    }
}