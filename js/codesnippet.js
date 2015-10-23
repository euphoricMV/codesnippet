/**
 * @file
 * Codesnippet js file
 */

(function ($, Drupal) {

  /**
   * Initialise the tabs JS.
   */
  Drupal.behaviors.navTabs = {
    attach: function (context, settings) {
      hljs.initHighlightingOnLoad();
    }
  };

})(jQuery, Drupal);
