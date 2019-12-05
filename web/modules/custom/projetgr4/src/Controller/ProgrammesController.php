<?php

namespace Drupal\projetgr4\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Console\Bootstrap\Drupal;
use Drupal\user\UserInterface;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\Response;


class ProgrammesController extends ControllerBase{

    public function content(UserInterface $user)
    {

        $msg = $this->t('you are name @username', ['@username'=> $this->currentUser()->getDisplayName(),]);
        return ['#markup' => $msg];

    }

    public function participants()
    {
      $response = new Response('blabla');
      return $response;
    }
}
