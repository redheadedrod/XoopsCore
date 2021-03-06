<?php
namespace Xmf;

require_once(dirname(__FILE__).'/../../init_mini.php');

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-05-22 at 19:56:36.
 */
 
/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/

class HighlighterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Highlighter
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Highlighter;
        $this->assertInstanceOf('Xmf\Highlighter', $this->object);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Xmf\Highlighter::apply
     * @todo   Implement testApply().
     */
    public function testApply()
    {
        $output = Highlighter::apply('test', 'This test is OK.');
        $this->assertEquals($output, 'This <strong>test</strong> is OK.');

        $output = Highlighter::apply(array('test','ok'), 'This test is OK.','<i>','</i>');
        $this->assertEquals($output, 'This <i>test</i> is <i>OK</i>.');
    }
}
