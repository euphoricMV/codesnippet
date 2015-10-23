CKEditor Code Snippet plugin for Drupal 8
-----------------------------------------

A module that register a plugin which provides Code Snippet button: http://ckeditor.com/addon/codesnippet

### Installation

1. Download the [Code Snippet](https://github.com/euphoricMV/codesnippet) module, put it into the modules folder, then enable it.
2. Edit selected text format where CKEditor is enabled.
3. Adjust toolbar configuration - add CodeSnippet button to the toolbar.
4. Save the text format settings.

### Usage

You can change which theme of code you want to use in text editor and field display.

If you want to change theme in text editor, in /src/Plugin/CKEditorPlugin/CodeSnippet.php change theme name from default to, for example 'pojoaque',
so code will look something like below:

```
  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return array(
      'codeSnippet_theme' => 'pojoaque',
    );
  }
```

For changing theme of codesnippet in the field display(for example from 'default' to 'pojoaque'),
change path of css file of theme in codesnippet.libraries.yml file like in code below:

```
code-snippet:
  version: 1.x
  css:
    theme:
      js/plugins/codesnippet/lib/highlight/styles/pojoaque.css: {}
  js:
    js/plugins/codesnippet/lib/highlight/highlight.pack.js: {}
    js/codesnippet.js: {}
```

### License

Copyright (c) 2003-2015, [CKSource](http://cksource.com/) - Frederico Knabben. All rights reserved.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
