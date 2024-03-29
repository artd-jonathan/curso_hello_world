<?php
namespace Curso\HelloWorld\Controller\Index;

class Helloworld extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $pageFactory = $this->pageFactory->create();
        $pageFactory ->getConfig()->getTitle()->set(__('Módulo Hello World'));
        return $this->pageFactory->create();
    }
}