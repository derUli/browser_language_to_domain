# browser_language_to_domain

Umleitung auf eine Domain oder Subdomain über die bevorzugte Sprache des Browsers.
Dieses UliCMS Modul ist kompatibel ab UliCMS 2018.1.

## Funktionsweise des Moduls

Wenn die Webseite über eine Domain aufgerufen wird, die nicht auf eine Sprache gemappt ist, kommt browser_language_to_domain zur Ausführung.
Die Software ermittelt die bevorzugte Sprache des Browsers aus dem HTTP Header `Accept-Language`. Sofern eine Domain auf die bevorzugte Sprache gemappt ist, erfolgt eine Weitereitung dahin.

### Beispiel

Das Domain2Language Mapping ist wie folgt konfiguriert:
```
de.firma.de=>de
en.firma.de=>en
fr.firma.de=>fr
```

Die bevorzugte Sprache die im Browser des Besuchers eingestellt ist, ist Französisch.
Nun ruft der Besucher die URL http://www.firma.de auf.
Da der Domain www.firma.de keine Sprache zugeweisen ist, ermittelt das Modul die bevorzugte Sprache des Besuchers (Französisch) und leitet den Besucher auf fr.firma.de weiter.
