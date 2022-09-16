<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */
namespace Drupal\custom_example\Controller;
class CustomExample {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello, World!'),
    );
  }
}