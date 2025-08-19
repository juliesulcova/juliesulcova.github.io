# Portfolio

Toto je tutorial jak upravovat portfolio. kdyby cokoli, pis


## Co to je?????????

GitHub. Vpodstate google drive pro programatory. Jednotlivy projekty jsou v tzv. repozitarich, kde krome samotnych souboru (kodu) najdes i dalsi veci, ktery te ale nemusi zajimat. Duvod, proc to pouzivas je, ze tady muzes upravovat kod, ktery se rovnou propise na web. Tohle byl nejjednodussi zpusob jak toho docilit. 

## Co je pro me relevantni???????????????

Je tady hromada programatorskyho jargonu, ktery muzes s klidem ignorovat. Pro tebe je dulezita slozka **src** a v ni slozka **pages**. Tam je vsechno, co budes potrebovat editovat stran textu. 

Dalsi relevantni je pro tebe slozka **public**, jak sis mohla vsimnout, programatori pojmenovavaji veci pekne debilne (z pohledu normalnich lidi). V tehle slozce jsou vsechny fotky (jen fotky prosim). Snazil jsem se najit zpusob jak efektivne mit vsechny fotky na jednom miste tak, aby se nacitaly na strankach, tohle je nejlepsi zpusob, ikdyz trochu nevsedni. Ve slozce public mas vzdycky slozku s nazvem projektu ke kteremu se vztahuje (muze se jmenovat jakkoli, ale aby v tom nebyl bordel, delej to takhle). Nazev slozky zahrnuje taky .cislo, kde cislo je pocet souboru ve slozce -- ja vim, je to debilni, ale omezi to mnozstvi kodu co musis psat. Soubory v te slozce pak musi mit nazev cislo.jpg, kde cislo je proadi te fotky a ano. zacina to nulou. programatori jsou divni lidi wtf. pro referenci viz ostatni slozky jak je to tam resene. ano, musi to byt v jpg.

Pokud budes chtit udelat neco, co neni tady, napis mi, neni problem.

## samotny kod

Je to takova divna kombinace cestiny a anglictiny

Stranky jsou v jednotlivych souborech .svelte -> Uvodni stranka je About.svelte a tak dal.

Pouziva se jazyk HTML, ktery funguje tak, ze se formatovani dela primo v textu. tim se lisi od napriklad wordu, kde rovnou vidis jak text vypada. tady to vidis az v prohlizeci. Kdyz chces napriklad udelat text tucny, napises text mezi `<em>ahoj</em>` -- princip znacek muzes videt v kodu.

obsah znacky `script` ignoruj, dulezity je pro tebe obsah znacky `Page`.

tady jsou nejake dalsi znacky

- p -- odstavce
- i -- italic
- a -- odkaz (`<a href="odkaz">text s tim odkazem</a>`)

### Jazyky

Web umi cestinu a anglictinu, je nutne vkladat oba jazyky primo do kodu. funguje to nasledovne

kdyz je text ve znacce EN, zobrazi se jen na anglicke verzi. A tedy kdyz je ve znacce CZ, zobrazi se jen na ceske.

### Pridavani projektu

nejlepsi je asi vzit kod, ktery reprezentuje jiny projekt, zkopirovat a upravit. Znacka folder je jmeno slozky s fotkama, ktera se vykresli. Tohle je ten duvod proc jsou fotky ulozeny tak debilne. Poradi projektu pod sebou odpovida poradi na webu

## Nahravani a veci

vsechno edituj primo v githubu, kdyz budes chtit ulozit, klikni na commit changes. tady muzes napsat cos zmenila ale neni to nutne, pak commit. chvili pockas a mas to tam.

Je mozny, ze kdyz budes delat hodne zmen, tak se nepropisou -- github ma mesicni limit. v takovym pripade mi napis a nejak to udelam. V idealnim pripade davej naraz co nejvic zmen

kdyby cokoli, pis
