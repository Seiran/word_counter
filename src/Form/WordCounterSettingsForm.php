<?php

namespace Drupal\word_counter\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure Word count settings.
 */
class WordCounterSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['word_counter.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'word_counter_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('word_counter.settings');

    $form['enable_word_count'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable word count'),
      '#description' => '',
      '#return_value' => TRUE,
      '#default_value' => $config->get('enable_word_count'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('word_counter.settings')
      ->set('enable_word_count', $form_state->getValue('enable_word_count'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
