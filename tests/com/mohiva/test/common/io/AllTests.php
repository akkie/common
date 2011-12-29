<?php
/**
 * Mohiva Common
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.textile.
 * It is also available through the world-wide-web at this URL:
 * https://github.com/mohiva/common/blob/master/LICENSE.textile
 *
 * @category  Mohiva/Common
 * @package   Mohiva/Common/Test
 * @author    Christian Kaps <christian.kaps@mohiva.com>
 * @copyright Copyright (c) 2007-2011 Christian Kaps (http://www.mohiva.com)
 * @license   https://github.com/mohiva/common/blob/master/LICENSE.textile New BSD License
 * @link      https://github.com/mohiva/common
 */
namespace com\mohiva\test\common\io;

/**
 * Test suite for the Mohiva Common project.
 * 
 * @category  Mohiva/Common
 * @package   Mohiva/Common/Test
 * @author    Christian Kaps <christian.kaps@mohiva.com>
 * @copyright Copyright (c) 2007-2011 Christian Kaps (http://www.mohiva.com)
 * @license   https://github.com/mohiva/common/blob/master/LICENSE.textile New BSD License
 * @link      https://github.com/mohiva/common
 */
class AllTests extends \PHPUnit_Framework_TestSuite {
	
	/**
	 * Constructs the test suite handler.
	 */
	public function __construct() {
		
		$this->setName(__CLASS__);
		$this->addTest(helpers\AllTests::suite());
		$this->addTestSuite('\com\mohiva\test\common\io\IncludePathTest');
		$this->addTestSuite('\com\mohiva\test\common\io\ClassAutoloaderTest');
		$this->addTestSuite('\com\mohiva\test\common\io\DefaultClassLoaderTest');
		$this->addTestSuite('\com\mohiva\test\common\io\DefaultResourceLoaderTest');
		$this->addTestSuite('\com\mohiva\test\common\io\FileResourceTest');
		$this->addTestSuite('\com\mohiva\test\common\io\TempFileResourceTest');
		$this->addTestSuite('\com\mohiva\test\common\io\ResourceStatisticsTest');
		$this->addTestSuite('\com\mohiva\test\common\io\FilesystemResourceContainerTest');
		$this->addTestSuite('\com\mohiva\test\common\io\TempResourceContainerTest');
	}
	
	/**
	 * Creates the suite.
	 * 
	 * @return AllTests The test suite.
	 */
	public static function suite() {
		
		return new self();
	}
}
