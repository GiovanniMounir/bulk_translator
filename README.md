# Bulk Translator
Automatically translates text to multiple languages at once.

## Depends on

1. [Stichoza/google-translate-php](https://github.com/Stichoza/google-translate-php)

## Installation

1. Install [Stichoza/google-translate-php](https://github.com/Stichoza/google-translate-php) using composer

```
composer require stichoza/google-translate-php
```

## Usage

Call `bulk_translate(array $target_languages, $text, $callback)` with the array of target languages (`$target_languages`), text you would like to translate (`$text`) and the callback function `($lang, $translated_text)`.

For example, to automatically translate and insert `Hello` into a multilingual database:

```
bulk_translate(array("en", "ru", "de", "it", "fr", "es", "pt", "tr"), "Hello", function ($lang, $translated_text){
	$db->execute("INSERT INTO `language` (`lang`, `constant`, `value`) VALUES (:lang, :constant, :value);", array(":lang" => $lang, ":constant" => "LANG_HELLO", ":value" => $translated_text));
});
```
