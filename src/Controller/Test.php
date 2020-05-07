<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints\Required;

class Test extends AbstractController
{

    public function test(ValidatorInterface $v){
        $violations = $v->validate([],[new Required()]);
        dump($violations);
    }

}
