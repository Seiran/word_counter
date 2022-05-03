CONTENTS OF THIS FILE
--------------------- 

 * Introduction
 * Installation
 * Configuration

INTRODUCTION
------------

The "Word counter" module enables to counted a number of words of the Body field of the Article content type when saving the article. The value is stored in the field_word_counter field.

INSTALLATION
------------

The installation of this module is like other Drupal modules.

 1. Copy/upload the "Word counter" module to the modules directory of your Drupal
   installation.

 2. Enable the 'Word counter' module and desired sub-modules in 'Extend'.
   (/admin/modules)

 3. Set up user permissions. (/admin/people/permissions#module-word_counter)


CONFIGURATION
-------------

To enable word count for the Body field of the Article content type 
 
 1. Visit: /admin/config/word_counter/settings  
   and check the "Enable word count" checkbox.

 2. Click on the "Save configuration" button.

 3. Rebuild the caches.

To alter the position of the "Word counter" field  
 
 1. Visit /admin/structure/types/manage/article/display  
   and drag the "Word counter" field in the position you want.

 2. Rebuild the caches.

