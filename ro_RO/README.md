# Magento 2 Romanian LocalePack ro_RO

Pachetul în limba română pentru Magento 2 Community Edition (versiunea 2.3.0 - 2.4.0)

Traducerea a fost realizată de vorbitor nativ de limbă română. Traducerea este completă, adică toate edițiile lingvistice ale Magento 2 au fost traduse din engleză în română. Sugestii pentru modificări sunt binevenite sau întregul depozit poate fi bifurcat dacă se vor introduce traduceri deviante.

Pachetul în limba română pentru Magento 2 Community Edition (versiunea 2.4.0)

# Instalare
- Copiați toate fișierele în `/ app / i18n / sbaanda / ro_RO /`

Apelați următoarele comenzi din directorul rădăcină Magento:

```bash
rm pub/static/frontend/Magento/luma/ro_RO/js-translation.json
php bin/magento setup:static-content:deploy -f ro_RO
php bin/magento setup:upgrade
rm -rf var/di
php bin/magento setup:di:compile
```

# Instalare cu Composer
```bash
composer require sbaanda/mage2-locale-ro-ro
rm pub/static/frontend/Magento/luma/ro_RO/js-translation.json
php bin/magento setup:static-content:deploy ro_RO
```

# Adăugați fraze noi

Pentru a traduce fraze noi, urmați acești pași:

### Obțineți fraze de la Magento

Rulați acest lucru în instalarea Magento 2:

```bash
php bin / magento i18n: collect-phrases -m> phrases.csv
```

### Comparați fraze cu fișierul de traducere vechi

Copiați „phrases.csv” în acest depozit și rulați:

```bash
php check_new.php
```

Aceasta va afișa un nou fișier `ro_RO_new.csv` care conține doar fișierul
fraze care nu sunt încă traduse în `ro_RO.csv`.

### Traduceți fraze

Acum ar trebui să traduceți aceste fraze. Introduceți expresia tradusă
în coloana * a doua *.

### Copiați fraze noi și creați o cerere de extragere

Copiați noile fraze în `ro_RO.csv`.

** IMPORTANT **: sortați fișierul alfabetic pe baza primei coloane, de ex. cu LibreOffice.

Acum creați o [cerere de extragere nouă] (https://help.github.com/articles/creating-a-pull-request/) cu
modificările tale! 
