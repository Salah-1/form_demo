<?php

namespace Drupal\forms_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Forms demo routes.
 */
class FormsDemoController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
