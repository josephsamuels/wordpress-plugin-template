# Wordpress Plugin Template

Template for a Wordpress plugin.

## Prerequisites

- [Scoper](https://github.com/humbug/php-scoper)

## Working the template

- Craft object-oriented code inside the classes path to have dependencies re-scoped on build.
- Add additional native (Wordpress, Woocommerce, etc.) functions to helpers/WpNative.php to keep them from being
  re-scoped.
  
Is this the best way to do this? Not sure, but it works so far.
