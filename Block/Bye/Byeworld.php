<?php
namespace Curso\HelloWorld\Block\Bye;

class Byeworld extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getByeWorldMessage()
    {
        return 'Ya vamos acabando por esta semana';
    }
}