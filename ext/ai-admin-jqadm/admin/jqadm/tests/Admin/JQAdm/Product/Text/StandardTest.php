<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2015-2017
 */


namespace Aimeos\Admin\JQAdm\Product\Text;


class StandardTest extends \PHPUnit\Framework\TestCase
{
	private $context;
	private $object;
	private $view;


	protected function setUp()
	{
		$this->view = \TestHelperJqadm::getView();
		$this->context = \TestHelperJqadm::getContext();

		$langManager = \Aimeos\MShop\Factory::createManager( $this->context, 'locale/language' );

		$this->view->pageLanguages = $langManager->searchItems( $langManager->createSearch() );
		$this->view->item = \Aimeos\MShop\Factory::createManager( $this->context, 'product' )->createItem();

		$this->object = new \Aimeos\Admin\JQAdm\Product\Text\Standard( $this->context );
		$this->object->setAimeos( \TestHelperJqadm::getAimeos() );
		$this->object->setView( $this->view );
	}


	protected function tearDown()
	{
		unset( $this->object, $this->view, $this->context );
	}


	public function testCreate()
	{
		$manager = \Aimeos\MShop\Factory::createManager( $this->context, 'product' );

		$this->view->item = $manager->createItem();
		$result = $this->object->create();

		$this->assertContains( 'item-text', $result );
		$this->assertNull( $this->view->get( 'errors' ) );
	}


	public function testCopy()
	{
		$manager = \Aimeos\MShop\Factory::createManager( $this->context, 'product' );

		$this->view->item = $manager->findItem( 'ABCD', array( 'text' ) );
		$result = $this->object->copy();

		$this->assertNull( $this->view->get( 'errors' ) );
		$this->assertContains( '&quot;text.label&quot;:&quot;subproduct1&quot;', $result );
	}


	public function testDelete()
	{
		$manager = \Aimeos\MShop\Factory::createManager( $this->context, 'product' );

		$this->view->item = $manager->createItem();
		$result = $this->object->delete();

		$this->assertNull( $this->view->get( 'errors' ) );
		$this->assertNull( $result );
	}


	public function testGet()
	{
		$manager = \Aimeos\MShop\Factory::createManager( $this->context, 'product' );

		$this->view->item = $manager->findItem( 'ABCD', array( 'text' ) );
		$result = $this->object->get();

		$this->assertNull( $this->view->get( 'errors' ) );
		$this->assertContains( '&quot;text.label&quot;:&quot;subproduct1&quot;', $result );
	}


	public function testSave()
	{
		$manager = \Aimeos\MShop\Factory::createManager( $this->context, 'product' );
		$listTypeManager = \Aimeos\MShop\Factory::createManager( $this->context, 'product/lists/type' );
		$typeManager = \Aimeos\MShop\Factory::createManager( $this->context, 'text/type' );

		$listTypeId = $listTypeManager->findItem( 'default', [], 'text' )->getId();
		$typeId = $typeManager->findItem( 'name', [], 'product' )->getId();

		$item = $manager->createItem();

		$param = array(
			'site' => 'unittest',
			'text' => array(
				array(
					'text.id' => '',
					'text.content' => 'test name',
					'text.languageid' => 'de',
					'text.typeid' => $typeId,
					'product.lists.type' => 'default',
					'product.lists.typeid' => $listTypeId
				),
				array(
					'text.id' => '',
					'text.content' => 'short desc',
					'text.languageid' => 'de',
					'text.typeid' => $typeId,
					'product.lists.type' => 'default',
					'product.lists.typeid' => $listTypeId
				),
				array(
					'text.id' => '',
					'text.content' => 'long desc',
					'text.languageid' => 'de',
					'text.typeid' => $typeId,
					'product.lists.type' => 'default',
					'product.lists.typeid' => $listTypeId
				),
			),
		);

		$helper = new \Aimeos\MW\View\Helper\Param\Standard( $this->view, $param );
		$this->view->addHelper( 'param', $helper );
		$this->view->item = $item;

		$result = $this->object->save();

		$this->assertNull( $this->view->get( 'errors' ) );
		$this->assertNull( $result );
		$this->assertEquals( 3, count( $item->getListItems() ) );

		foreach( $item->getListItems( 'text' ) as $listItem )
		{
			$this->assertEquals( 'text', $listItem->getDomain() );

			$refItem = $listItem->getRefItem();
			$this->assertEquals( 'de', $refItem->getLanguageId() );
		}
	}


	public function testSaveException()
	{
		$object = $this->getMockBuilder( '\Aimeos\Admin\JQAdm\Product\Text\Standard' )
			->setConstructorArgs( array( $this->context, \TestHelperJqadm::getTemplatePaths() ) )
			->setMethods( array( 'fromArray' ) )
			->getMock();

		$object->expects( $this->once() )->method( 'fromArray' )
			->will( $this->throwException( new \RuntimeException() ) );

		$this->view = \TestHelperJqadm::getView();
		$this->view->item = \Aimeos\MShop\Factory::createManager( $this->context, 'product' )->createItem();

		$object->setView( $this->view );

		$this->setExpectedException( '\Aimeos\Admin\JQAdm\Exception' );
		$object->save();
	}


	public function testSaveMShopException()
	{
		$object = $this->getMockBuilder( '\Aimeos\Admin\JQAdm\Product\Text\Standard' )
			->setConstructorArgs( array( $this->context, \TestHelperJqadm::getTemplatePaths() ) )
			->setMethods( array( 'fromArray' ) )
			->getMock();

		$object->expects( $this->once() )->method( 'fromArray' )
			->will( $this->throwException( new \Aimeos\MShop\Exception() ) );

		$this->view = \TestHelperJqadm::getView();
		$this->view->item = \Aimeos\MShop\Factory::createManager( $this->context, 'product' )->createItem();

		$object->setView( $this->view );

		$this->setExpectedException( '\Aimeos\Admin\JQAdm\Exception' );
		$object->save();
	}


	public function testSearch()
	{
		$this->assertNull( $this->object->search() );
	}


	public function testGetSubClient()
	{
		$this->setExpectedException( '\Aimeos\Admin\JQAdm\Exception' );
		$this->object->getSubClient( 'unknown' );
	}
}
