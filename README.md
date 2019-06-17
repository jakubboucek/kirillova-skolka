# Kirillova školka - Lekce 5
**Téma: Výjimka**

## Zadání
V souboru [index.php](www/index.php) uprav funkci `getValueFromItems()` tak, aby v případě, že nenajde v poli odpovídající
položku, aby vyhodila [Exception](https://www.php.net/manual/en/language.exceptions.php).
Zbytek aplikace uprav tak, aby se chovala stejně jako doposud.

## Novinky
Kód jsem upravil do stavu, jaký jsem očekával v rámci Lesson 4. Co bych především vyzdvihnul:
- všechny funkce mají striktní typování argumentů a návratovách hodnot,
- je zcela oddělena logika parsování `$_GET['id']` hodnoty a hledání v poli `$items`.

GitHub nyní hlídá správnost formátování. Jakmile uděláš `Push`, automaticky se spustí kontrola, která prověří formátování
kódu – pokud nebude něco správně, pošle ti e-mail a výsledek zobrazí v [přehledu commitů](https://github.com/jakubboucek/kirillova-skolka/commits/master). 

## Požadavky
- Dodržuj coding-standard dle [**PSR-2**](https://www.php-fig.org/psr/psr-2/) (pozor, není kompatibilní s formátováním
používaným v kódech Pandy!)
- Úlohu neřeš pouze teoreticky, ale spusť si ji a tvoje opravy ověř.
- Odevzdání práce přes PullRequest, jak jsme dělali v Lekci 2 a 3 *([learn more](https://help.github.com/en/articles/about-pull-requests))*. 

### Tipy
- [PHP triky: standardní výjimky](https://phpfashion.com/php-triky-standardni-vyjimky)
- [Kde zachytáváte výjimky?](https://php.vrana.cz/kde-zachytavate-vyjimky.php)
- [Kde zachytávat výjimky](https://php.vrana.cz/kde-zachytavat-vyjimky.php)
- [Ošetřování chyb](https://php.vrana.cz/osetrovani-chyb.php)
- [Finally](https://php.vrana.cz/finally.php)