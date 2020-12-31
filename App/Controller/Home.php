<?php
namespace App\Controller;

use Core\Controller\BaseController;

class Home extends BaseController
{
    public $twig;

    public function __construct($container)
    {
        $this->twig = $container->get('template')->getTwig();
    }

    public function home()
    {
        return $this->twig->render(
            'html.twig',
            [
                'page' => [
                    'title' => 'Home',
                    'content' => $this->twig->render(
                        'page.html.twig',
                        [
                            'msg' => 'Hello World !'
                        ]
                    )
                ]
            ]
        );
    }
}
