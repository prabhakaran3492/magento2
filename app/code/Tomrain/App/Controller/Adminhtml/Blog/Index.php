<?php 
namespace Tomrain\App\Controller\Adminhtml\Blog;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index Extends \Magento\Backend\App\Action
{
	public function __construct(Context $context, 
		PageFactory $resultPageFactory)
	{
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
	}

	public function execute()
	{
		//Call page factory to render layout and page content
		$resultPage = $this->resultPageFactory->create();

		//Set the menu which will be active for this page
		$resultPage->setActiveMenu('Tomrain_App::blog_manage');
		
		//Set the header title of grid
		$resultPage->getConfig()->getTitle()->prepend(__('Manage Blogs'));

		//Add bread crumb
		$resultPage->addBreadcrumb(__('Tomrain'), __('Tomrain'));
		$resultPage->addBreadcrumb(__('Hello World'), __('Manage Blogs'));

		return $resultPage;
		
	}
}