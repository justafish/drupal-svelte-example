<?php

namespace Drupal\svelte\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example Svelte Block.
 *
 * @Block(
 *   id = "svelte_block",
 *   admin_label = @Translation("Svelte Example"),
 *   category = @Translation("Svelte"),
 * )
 */
class SvelteBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => '<div id="svelte"></div>',
      '#attached' => [
        'library' => ['svelte/svelte'],
      ],
    ];
  }
}
