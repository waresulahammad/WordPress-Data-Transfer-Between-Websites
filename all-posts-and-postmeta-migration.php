<?php 
How to Transfer All Media Files or Posts from One WordPress Site to Another

1. Create a uploads.zip file from old website wp-content/uploads folder
2. Upload the zip file to the new website wp-content
3. Extract the zip file
4. Export the two table "wp_posts" and "wp_postmeta" table from the old webiste database
5. Import the table what you have exported from old website
6. Update the table prefix from new database

WoHO! Work is done!   Old website following data is imported to the new website.

| `post_type`                     | Description                                                          |
| ------------------------------- | -------------------------------------------------------------------- |
| `post`                          | Blog posts or articles                                               |
| `page`                          | Static pages (e.g., About, Contact)                                  |
| `attachment`                    | Media files (images, PDFs, etc.)                                     |
| `revision`                      | Autosaved or updated versions of posts/pages                         |
| `nav_menu_item`                 | Menu items                                                           |
| `custom_css`                    | Customizer CSS settings                                              |
| `customize_changeset`           | Customizer settings preview                                          |
| `oembed_cache`                  | Cached oEmbed content (like embedded YouTube videos)                 |
| `wp_block`                      | Reusable Gutenberg blocks                                            |
| `acf-field` / `acf-field-group` | Advanced Custom Fields (if used)                                     |
| Custom `post_type`s             | Created by plugins or themes (e.g., `product`, `portfolio`, `event`) |
