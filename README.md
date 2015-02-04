# Dash Camel for Craft

Craft plugin to wrap custom Twig extension to convert from hyphenated-string to camelCase syntax.

## Usage

`{{ var | dashToCamel([startWithCapital]) }}`

## Example

`{{ entry.slug | dashToCamel }}`