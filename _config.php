<?php

use LaminBarrow\SiteMap4\SiteMapPage;
use SilverStripe\View\Parsers\ShortcodeParser;

ShortcodeParser::get()->register('SiteMap', [SiteMapPage::class, 'SiteMapShortCodeHandler']);
define('SITEMAP4_DIR', basename(dirname(__FILE__)));
