<?php
/**
 * @version $Id$
 * @copyright Center for History and New Media, 2010
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 **/

require_once dirname(__FILE__) . '/../../SimplePages_Test_AppTestCase.php';


class Globals_SimplePagesGetCurrentSimplePageTest extends SimplePages_Test_AppTestCase
{   
    public function testGetCurrentSimplePage()
    {
        $this->dispatch('about');
        $page = get_current_simple_page();
        $this->assertEquals('about', $page->slug);
    }
}