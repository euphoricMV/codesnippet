<?php

/**
 * @file
 * Definition of \Drupal\codesnippet\Plugin\CKEditorPlugin\CodeSnippet.
 */

namespace Drupal\codesnippet\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "CodeSnippet" plugin.
 *
 * @CKEditorPlugin(
 *   id = "codesnippet",
 *   label = @Translation("CodeSnippet"),
 * )
 */
class CodeSnippet extends PluginBase implements CKEditorPluginInterface, CKEditorPluginButtonsInterface {

  /**
   * {@inheritdoc}
   */
  function getDependencies(Editor $editor) {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  function getLibraries(Editor $editor) {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  function isInternal() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  function getFile() {
    return drupal_get_path('module', 'codesnippet') . '/js/plugins/codesnippet/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  function getButtons() {
    return array(
      'CodeSnippet' => array(
        'label' => t('Code Snippet'),
        'image' => drupal_get_path('module', 'codesnippet') . '/js/plugins/codesnippet/icons/codesnippet.png',
      ),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return array(
      'codeSnippet_theme' => 'default',
    );
  }
}
