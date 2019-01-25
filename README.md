# shaarli-urlextern
Shaarli plugin to open external links in a new tab/window.

## Installation
The plugin's folder (`urlextern`) should be placed in the `<shaarli>/plugins/` directory.

The directory structure should look like:

```bash 
└── plugins
    └── urlextern
        ├── urlextern.js
        ├── urlextern.meta
        └── urlextern.php
```

To enable the plugin, just check it in the Plugin Administration page (`?do=pluginadmin`).

You can also add `urlextern` to your list of enabled plugins in `data/config.json.php`.\
The `general.enabled_plugins` list should look like this:

```
"general": {
  "enabled_plugins": [
    "urlextern",
    [...]
  ],
}
```

## Configuration
None
Go to the Plugin Administration page to enable or disable as needed.
