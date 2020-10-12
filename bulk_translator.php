//require_once("vendor/autoload.php"); //Uncomment if using vendor/autoload.php
use Stichoza\GoogleTranslate\GoogleTranslate;
function bulk_translate(array $target_languages, $text, $callback)
{
	$tr = new GoogleTranslate();
	foreach ($target_languages as $lang)
	{
		$tr->setTarget($lang);
		$callback($lang, $tr->translate($text));
	}
}
