<?php
class BrowserLanguageToDomain extends Controller {
	public function beforeHttpheader() {
		if (! getLanguageByDomain ( get_domain () ) and function_exists ( "getDefaultLanguage" )) {
			$preferredLangauge = substr ( getDefaultLanguage (), 0, 2 );
			if (getDomainByLanguage ( $preferredLangauge )) {
				if (getDomainByLanguage ( $preferredLangauge ) == get_domain ()) {
					return;
				}
				$url = Request::getProtocol ( getDomainByLanguage ( $preferredLangauge ) );
				Request::redirect ( $url );
			}
		}
	}
}
