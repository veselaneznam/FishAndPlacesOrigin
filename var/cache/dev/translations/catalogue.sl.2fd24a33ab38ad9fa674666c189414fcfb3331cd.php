<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Vrednost bi morala biti nepravilna (false).',
    'This value should be true.' => 'Vrednost bi morala biti pravilna (true).',
    'This value should be of type {{ type }}.' => 'Vrednost mora biti naslednjega tipa {{ type }}.',
    'This value should be blank.' => 'Vrednost mora biti prazna.',
    'The value you selected is not a valid choice.' => 'Vrednost, ki ste jo izbrali, ni veljavna možnost.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Izbrati morate vsaj {{ limit }} možnost.|Izbrati morate vsaj {{ limit }} možnosti.|Izbrati morate vsaj {{ limit }} možnosti.|Izbrati morate vsaj {{ limit }} možnosti.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Izberete lahko največ {{ limit }} možnost.|Izberete lahko največ {{ limit }} možnosti.|Izberete lahko največ {{ limit }} možnosti.|Izberete lahko največ {{ limit }} možnosti.',
    'One or more of the given values is invalid.' => 'Ena ali več podanih vrednosti ni veljavnih.',
    'This field was not expected.' => 'To polje ni bilo pričakovati.',
    'This field is missing.' => 'To polje manjka.',
    'This value is not a valid date.' => 'Ta vrednost ni veljaven datum.',
    'This value is not a valid datetime.' => 'Ta vrednost ni veljaven datum in čas.',
    'This value is not a valid email address.' => 'Ta vrednost ni veljaven e-poštni naslov.',
    'The file could not be found.' => 'Datoteke ni mogoče najti.',
    'The file is not readable.' => 'Datoteke ni mogoče prebrati.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika ({{ size }} {{ suffix }}). Največja dovoljena velikost je {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime tip datoteke je neveljaven ({{ type }}). Dovoljeni mime tipi so {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ta vrednost bi morala biti {{ limit }} ali manj.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ta vrednost je predolga. Morala bi imeti {{ limit }} znak ali manj.|Ta vrednost je predolga. Morala bi imeti {{ limit }} znaka ali manj.|Ta vrednost je predolga. Morala bi imeti {{ limit }} znake ali manj.|Ta vrednost je predolga. Morala bi imeti {{ limit }} znakov ali manj.',
    'This value should be {{ limit }} or more.' => 'Ta vrednost bi morala biti {{ limit }} ali več.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ta vrednost je prekratka. Morala bi imeti {{ limit }} znak ali več.|Ta vrednost je prekratka. Morala bi imeti {{ limit }} znaka ali več.|Ta vrednost je prekratka. Morala bi imeti {{ limit }} znake ali več.|Ta vrednost je prekratka. Morala bi imeti {{ limit }} znakov ali več.',
    'This value should not be blank.' => 'Ta vrednost ne bi smela biti prazna.',
    'This value should not be null.' => 'Ta vrednost ne bi smela biti nedefinirana (null).',
    'This value should be null.' => 'Ta vrednost bi morala biti nedefinirana (null).',
    'This value is not valid.' => 'Ta vrednost ni veljavna.',
    'This value is not a valid time.' => 'Ta vrednost ni veljaven čas.',
    'This value is not a valid URL.' => 'Ta vrednost ni veljaven URL.',
    'The two values should be equal.' => 'Ti dve vrednosti bi morali biti enaki.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika. Največja dovoljena velikost je {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Datoteka je prevelika.',
    'The file could not be uploaded.' => 'Datoteke ni bilo mogoče naložiti.',
    'This value should be a valid number.' => 'Ta vrednost bi morala biti veljavna številka.',
    'This file is not a valid image.' => 'Ta datoteka ni veljavna slika.',
    'This is not a valid IP address.' => 'To ni veljaven IP naslov.',
    'This value is not a valid language.' => 'Ta vrednost ni veljaven jezik.',
    'This value is not a valid locale.' => 'Ta vrednost ni veljavna lokalnost.',
    'This value is not a valid country.' => 'Ta vrednost ni veljavna država.',
    'This value is already used.' => 'Ta vrednost je že uporabljena.',
    'The size of the image could not be detected.' => 'Velikosti slike ni bilo mogoče zaznati.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Širina slike je preširoka ({{ width }}px). Največja dovoljena širina je {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Širina slike je premajhna ({{ width }}px). Najmanjša predvidena širina je {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Višina slike je prevelika ({{ height }}px). Največja dovoljena višina je {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Višina slike je premajhna ({{ height }}px). Najmanjša predvidena višina je {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ta vrednost bi morala biti trenutno uporabnikovo geslo.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ta vrednost bi morala imeti točno {{ limit }} znak.|Ta vrednost bi morala imeti točno {{ limit }} znaka.|Ta vrednost bi morala imeti točno {{ limit }} znake.|Ta vrednost bi morala imeti točno {{ limit }} znakov.',
    'The file was only partially uploaded.' => 'Datoteka je bila le delno naložena.',
    'No file was uploaded.' => 'Nobena datoteka ni bila naložena.',
    'No temporary folder was configured in php.ini.' => 'Začasna mapa ni nastavljena v php.ini.',
    'Cannot write temporary file to disk.' => 'Začasne datoteke ni bilo mogoče zapisati na disk.',
    'A PHP extension caused the upload to fail.' => 'PHP razširitev je vzrok, da nalaganje ni uspelo.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ta zbirka bi morala vsebovati {{ limit }} element ali več.|Ta zbirka bi morala vsebovati {{ limit }} elementa ali več.|Ta zbirka bi morala vsebovati {{ limit }} elemente ali več.|Ta zbirka bi morala vsebovati {{ limit }} elementov ali več.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ta zbirka bi morala vsebovati {{ limit }} element ali manj.|Ta zbirka bi morala vsebovati {{ limit }} elementa ali manj.|Ta zbirka bi morala vsebovati {{ limit }} elemente ali manj.|Ta zbirka bi morala vsebovati {{ limit }} elementov ali manj.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ta zbirka bi morala vsebovati točno {{ limit }} element.|Ta zbirka bi morala vsebovati točno {{ limit }} elementa.|Ta zbirka bi morala vsebovati točno {{ limit }} elemente.|Ta zbirka bi morala vsebovati točno {{ limit }} elementov.',
    'Invalid card number.' => 'Neveljavna številka kartice.',
    'Unsupported card type or invalid card number.' => 'Nepodprti tip kartice ali neveljavna številka kartice.',
    'This is not a valid International Bank Account Number (IBAN).' => 'To ni veljavna mednarodna številka bančnega računa (IBAN).',
    'This value is not a valid ISBN-10.' => 'Neveljavna vrednost po ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Neveljavna vrednost po ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Neveljavna vrednost po ISBN-10 ali po ISBN-13.',
    'This value is not a valid ISSN.' => 'Neveljavna vrednost ISSN.',
    'This value is not a valid currency.' => 'Ta vrednost ni veljavna valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Ta vrednost bi morala biti enaka {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ta vrednost bi morala biti večja od {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ta vrednost bi morala biti večja ali enaka {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta vrednost bi morala biti identična {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ta vrednost bi morala biti manjša od {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ta vrednost bi morala biti manjša ali enaka {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ta vrednost ne bi smela biti enaka {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta vrednost ne bi smela biti identična {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Razmerje slike je preveliko ({{ ratio }}). Največje dovoljeno razmerje je {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Razmerje slike je premajhno ({{ ratio }}). Najmanjše pričakovano razmerje je {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Slika je kvadrat ({{ width }}x{{ height }}px). Kvadratne slike niso dovoljene.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Slika je ležeče usmerjena ({{ width }}x{{ height }}px). Ležeče usmerjene slike niso dovoljene.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Slika je pokončno usmerjena ({{ width }}x{{ height }}px). Pokončno usmerjene slike niso dovoljene.',
    'An empty file is not allowed.' => 'Prazna datoteka ni dovoljena.',
    'The host could not be resolved.' => 'Gostitelja ni bilo mogoče prepoznati.',
    'This value does not match the expected {{ charset }} charset.' => 'Ta vrednost se ne ujema s pričakovanim naborom znakov {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'To ni veljavna identifikacijska koda podjetja (BIC).',
    'This form should not contain extra fields.' => 'Ta obrazec ne sme vsebovati dodatnih polj.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Naložena datoteka je prevelika. Prosimo, poizkusite naložiti manjšo.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF vrednost je napačna. Prosimo, ponovno pošljite obrazec.',
    'fos_user.username.already_used' => 'Uporabniško ime že obstaja.',
    'fos_user.username.blank' => 'Prosimo, vnesite uporabniško ime.',
    'fos_user.username.short' => 'Uporabniško ime je prekratko.',
    'fos_user.username.long' => 'Uporabniško ime je predolgo.',
    'fos_user.email.already_used' => 'Email že obstaja.',
    'fos_user.email.blank' => 'Prosimo, vnesite email.',
    'fos_user.email.short' => 'Email je prekratek.',
    'fos_user.email.long' => 'Email je predolg.',
    'fos_user.email.invalid' => 'Email je napačen.',
    'fos_user.password.blank' => 'Prosimo, vnesite geslo.',
    'fos_user.password.short' => 'Geslo je prekratko.',
    'fos_user.password.mismatch' => 'Vpisani gesli se ne ujemata.',
    'fos_user.new_password.blank' => 'Prosimo, vnesite novo geslo.',
    'fos_user.new_password.short' => 'Novo geslo je prekratko.',
    'fos_user.current_password.invalid' => 'Geslo je napačno.',
    'fos_user.group.blank' => 'Prosimo, vnesite ime.',
    'fos_user.group.short' => 'Ime je prekratko.',
    'fos_user.group.long' => 'Ime je predolgo.',
    'fos_group.name.already_used' => 'Ime je že v uporabi.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Prišlo je do izjeme pri preverjanju avtentikacije.',
    'Authentication credentials could not be found.' => 'Poverilnic za avtentikacijo ni bilo mogoče najti.',
    'Authentication request could not be processed due to a system problem.' => 'Zahteve za avtentikacijo ni bilo mogoče izvesti zaradi sistemske težave.',
    'Invalid credentials.' => 'Neveljavne pravice.',
    'Cookie has already been used by someone else.' => 'Piškotek je uporabil že nekdo drug.',
    'Not privileged to request the resource.' => 'Nimate privilegijev za zahtevani vir.',
    'Invalid CSRF token.' => 'Neveljaven CSRF žeton.',
    'Digest nonce has expired.' => 'Začasni žeton je potekel.',
    'No authentication provider found to support the authentication token.' => 'Ponudnika avtentikacije za podporo prijavnega žetona ni bilo mogoče najti.',
    'No session available, it either timed out or cookies are not enabled.' => 'Seja ni na voljo, ali je potekla ali pa piškotki niso omogočeni.',
    'No token could be found.' => 'Žetona ni bilo mogoče najti.',
    'Username could not be found.' => 'Uporabniškega imena ni bilo mogoče najti.',
    'Account has expired.' => 'Račun je potekel.',
    'Credentials have expired.' => 'Poverilnice so potekle.',
    'Account is disabled.' => 'Račun je onemogočen.',
    'Account is locked.' => 'Račun je zaklenjen.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Shrani',
    'group.show.name' => 'Ime skupine',
    'group.new.submit' => 'Shrani',
    'group.flash.updated' => 'Skupina je bila uspešno shranjena.',
    'group.flash.created' => 'Skupina je bila uspešno ustvarjena.',
    'group.flash.deleted' => 'Skupina je bila uspešno izbrisana.',
    'security.login.username' => 'Uporabniško ime',
    'security.login.password' => 'Geslo',
    'security.login.remember_me' => 'Zapomni si me',
    'security.login.submit' => 'Prijava',
    'profile.show.username' => 'Uporabniško ime',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Shrani',
    'profile.flash.updated' => 'Profil je bil uspešno shranjen.',
    'change_password.submit' => 'Spremeni geslo',
    'change_password.flash.success' => 'Geslo je bilo uspešno spremenjeno.',
    'registration.check_email' => 'Na %email% smo vam poslali sporočilo s kodo za aktivacijo. Račun aktivirate s klikom na to povezavo.',
    'registration.confirmed' => 'Pozdravljeni %username%, vaš račun je sedaj aktiviran.',
    'registration.back' => 'Nazaj na prvotno stran.',
    'registration.submit' => 'Registracija',
    'registration.flash.user_created' => 'Uporabnik je bil uspešno ustvarjen.',
    'registration.email.subject' => 'Dobrodošli %username%!',
    'registration.email.message' => 'Pozdravljeni %username%!

Za aktivacijo računa prosimo, obiščite %confirmationUrl%

Lep pozdrav,
ekipa.
',
    'resetting.request.username' => 'Uporabniško ime',
    'resetting.request.submit' => 'Spremeni geslo',
    'resetting.reset.submit' => 'Spremeni geslo',
    'resetting.flash.success' => 'Geslo je bilo uspešno spremenjeno.',
    'resetting.email.subject' => 'Sprememba gesla',
    'resetting.email.message' => 'Pozdravljeni %username%!

Za spremembo gesla prosimo, obiščite %confirmationUrl%

Lep pozdrav,
ekipa.
',
    'layout.logout' => 'Odjava',
    'layout.login' => 'Prijava',
    'layout.register' => 'Registracija',
    'layout.logged_in_as' => 'Prijavljen kot %username%',
    'form.group_name' => 'Ime skupine',
    'form.username' => 'Uporabniško ime',
    'form.email' => 'Email',
    'form.current_password' => 'Trenutno geslo',
    'form.password' => 'Geslo',
    'form.password_confirmation' => 'Preverjanje gesla',
    'form.new_password' => 'Novo geslo',
    'form.new_password_confirmation' => 'Preverjanje gesla',
  ),
));

$catalogueBg = new MessageCatalogue('bg', array (
  'validators' => 
  array (
    'This value should be false.' => 'Стойността трябва да бъде лъжа (false).',
    'This value should be true.' => 'Стойността трябва да бъде истина (true).',
    'This value should be of type {{ type }}.' => 'Стойността трябва да бъде от тип {{ type }}.',
    'This value should be blank.' => 'Стойността трябва да бъде празна.',
    'The value you selected is not a valid choice.' => 'Избраната стойност е невалидна.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Трябва да изберете поне {{ limit }} опция.|Трябва да изберете поне {{ limit }} опции.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Трябва да изберете най-много {{ limit }} опция.|Трябва да изберете най-много {{ limit }} опции.',
    'One or more of the given values is invalid.' => 'Една или повече от зададените стойности е невалидна.',
    'This field was not expected.' => 'Това поле не се е очаквало.',
    'This field is missing.' => 'Това поле липсва.',
    'This value is not a valid date.' => 'Стойността не е валидна дата (date).',
    'This value is not a valid datetime.' => 'Стойността не е валидна дата (datetime).',
    'This value is not a valid email address.' => 'Стойността не е валиден email адрес.',
    'The file could not be found.' => 'Файлът не беше открит.',
    'The file is not readable.' => 'Файлът не може да бъде прочетен.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файлът е твърде голям ({{ size }} {{ suffix }}). Максималният размер е {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Майм типа на файла е невалиден ({{ type }}). Разрешени майм типове са {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Стойността трябва да бъде {{ limit }} или по-малко.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Стойността е твърде дълга. Трябва да съдържа най-много {{ limit }} символ.|Стойността е твърде дълга. Трябва да съдържа най-много {{ limit }} символа.',
    'This value should be {{ limit }} or more.' => 'Стойността трябва да бъде {{ limit }} или повече.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Стойността е твърде кратка. Трябва да съдържа поне {{ limit }} символ.|Стойността е твърде кратка. Трябва да съдържа поне {{ limit }} символа.',
    'This value should not be blank.' => 'Стойността не трябва да бъде празна.',
    'This value should not be null.' => 'Стойността не трябва да бъде null.',
    'This value should be null.' => 'Стойността трябва да бъде null.',
    'This value is not valid.' => 'Стойността не е валидна.',
    'This value is not a valid time.' => 'Стойността не е валидно време (time).',
    'This value is not a valid URL.' => 'Стойността не е валиден URL.',
    'The two values should be equal.' => 'Двете стойности трябва да бъдат равни.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файлът е твърде голям. Разрешеният максимален размер е {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файлът е твърде голям.',
    'The file could not be uploaded.' => 'Файлът не може да бъде качен.',
    'This value should be a valid number.' => 'Стойността трябва да бъде валиден номер.',
    'This file is not a valid image.' => 'Файлът не е валидно изображение.',
    'This is not a valid IP address.' => 'Това не е валиден IP адрес.',
    'This value is not a valid language.' => 'Стойността не е валиден език.',
    'This value is not a valid locale.' => 'Стойността не е валидна локализация.',
    'This value is not a valid country.' => 'Стойността не е валидна държава.',
    'This value is already used.' => 'Стойността вече е в употреба.',
    'The size of the image could not be detected.' => 'Размера на изображението не може да бъде определен.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Изображението е твърде широко ({{ width }}px). Широчината трябва да бъде максимум {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Изображението е с твърде малка широчина ({{ width }}px). Широчината трябва да бъде минимум {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Изображението е с твърде голяма височина ({{ height }}px). Височината трябва да бъде максимум {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Изображението е с твърде малка височина ({{ height }}px). Височина трябва да бъде минимум {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Стойността трябва да бъде текущата потребителска парола.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Стойността трябва да бъде точно {{ limit }} символ.|Стойността трябва да бъде точно {{ limit }} символа.',
    'The file was only partially uploaded.' => 'Файлът е качен частично.',
    'No file was uploaded.' => 'Файлът не беше качен.',
    'No temporary folder was configured in php.ini.' => 'Не е посочена директория за временни файлове в php.ini.',
    'Cannot write temporary file to disk.' => 'Не може да запише временен файл на диска.',
    'A PHP extension caused the upload to fail.' => 'PHP разширение предизвика прекъсване на качването.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Колекцията трябва да съдържа поне {{ limit }} елемент.|Колекцията трябва да съдържа поне {{ limit }} елемента.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Колекцията трябва да съдържа най-много {{ limit }} елемент.|Колекцията трябва да съдържа най-много {{ limit }} елемента.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Колекцията трябва да съдържа точно {{ limit }} елемент.|Колекцията трябва да съдържа точно {{ limit }} елемента.',
    'Invalid card number.' => 'Невалиден номер на картата.',
    'Unsupported card type or invalid card number.' => 'Неподдържан тип карта или невалиден номер на картата.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Невалиден Международен номер на банкова сметка (IBAN).',
    'This value is not a valid ISBN-10.' => 'Невалиден ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Невалиден ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Невалидна стойност както за ISBN-10, така и за ISBN-13 .',
    'This value is not a valid ISSN.' => 'Невалиден Международен стандартен сериен номер (ISSN).',
    'This value is not a valid currency.' => 'Невалидна валута.',
    'This value should be equal to {{ compared_value }}.' => 'Стойността трябва да бъде равна на {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Стойността трябва да бъде по-голяма от {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Стойността трябва да бъде по-голяма или равна на {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Стойността трябва да бъде идентична с {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Стойността трябва да бъде по-малка {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Стойността трябва да бъде по-малка или равна на {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Стойността не трябва да бъде равна на {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Стойността не трябва да бъде идентична с {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Изображението е с твърде голяма пропорция ({{ ratio }}). Максималната пропорция трябва да е {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Изображението е с твърде малка пропорция ({{ ratio }}). Минималната пропорция трябва да е {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Изображението е квадрат ({{ width }}x{{ height }}px). Такива изображения не са разрешени.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Изображението е с пейзажна ориентация ({{ width }}x{{ height }}px). Изображения с такава ориентация не са разрешени.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Изображението е с портретна ориентация ({{ width }}x{{ height }}px). Изображения с такава ориентация не са разрешени.',
    'An empty file is not allowed.' => 'Празни файлове не са разрешени.',
    'The host could not be resolved.' => 'Хостът е недостъпен.',
    'This value does not match the expected {{ charset }} charset.' => 'Стойността не съвпада с {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Невалиден бизнес идентификационен код (BIC).',
    'This form should not contain extra fields.' => 'Тази форма не трябва да съдържа допълнителни полета.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Каченият файл е твърде голям. Моля, опитайте да качите по-малък файл.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Невалиден CSRF токен. Моля, опитайте да изпратите формата отново.',
    'fos_user.username.already_used' => 'Потребителското име е заето.',
    'fos_user.username.blank' => 'Моля въведете потребителско име.',
    'fos_user.username.short' => 'Потребителското име е прекалено късо.',
    'fos_user.username.long' => 'Потребителското име е прекалено дълго.',
    'fos_user.email.already_used' => 'E-mail адреса е зает.',
    'fos_user.email.blank' => 'Моля въведете E-mail адрес.',
    'fos_user.email.short' => 'E-mail адреса е прекалено къс.',
    'fos_user.email.long' => 'E-mail адреса е прекалено дълъг.',
    'fos_user.email.invalid' => 'E-mail адреса е невалиден.',
    'fos_user.password.blank' => 'Моля въведете парола.',
    'fos_user.password.short' => 'Паролата е прекалено къса.',
    'fos_user.new_password.blank' => 'Моля въведете нова парола.',
    'fos_user.new_password.short' => 'Новата парола е прекалено къса.',
    'fos_user.current_password.invalid' => 'Въведената парола е невалидна.',
    'fos_user.group.blank' => 'Моля въведете име.',
    'fos_user.group.short' => 'Името е прекалено късо.',
    'fos_user.group.long' => 'Името е прекалено дълго.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Грешка при автентикация.',
    'Authentication credentials could not be found.' => 'Удостоверението за автентикация не е открито.',
    'Authentication request could not be processed due to a system problem.' => 'Заявката за автентикация не може да бъде обработената поради системна грешка.',
    'Invalid credentials.' => 'Невалидно удостоверение за автентикация.',
    'Cookie has already been used by someone else.' => 'Това cookie вече се ползва от някой друг.',
    'Not privileged to request the resource.' => 'Нямате права за достъп до този ресурс.',
    'Invalid CSRF token.' => 'Невалиден CSRF токен.',
    'Digest nonce has expired.' => 'Digest nonce е изтекъл.',
    'No authentication provider found to support the authentication token.' => 'Не е открит провайдър, който да поддържа този токен за автентикация.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесията не е достъпна, или времето за достъп е изтекло, или кукитата не са разрешени.',
    'No token could be found.' => 'Токена не е открит.',
    'Username could not be found.' => 'Потребителското име не е открито.',
    'Account has expired.' => 'Акаунта е изтекъл.',
    'Credentials have expired.' => 'Удостоверението за автентикация е изтекло.',
    'Account is disabled.' => 'Акаунта е деактивиран.',
    'Account is locked.' => 'Акаунта е заключен.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Обнови група',
    'group.show.name' => 'Име на групата',
    'group.new.submit' => 'Нова група',
    'group.flash.updated' => 'Групата беше обновена успешно.',
    'group.flash.created' => 'Групата беше създадена успешно.',
    'group.flash.deleted' => 'Групата беше изтрита успешно.',
    'security.login.username' => 'Потребителско име',
    'security.login.password' => 'Парола',
    'security.login.remember_me' => 'Запомни ме',
    'security.login.submit' => 'Вход',
    'profile.show.username' => 'Потребителско име',
    'profile.show.email' => 'Имейл',
    'profile.edit.submit' => 'Промени',
    'profile.flash.updated' => 'Профилът беше успешно променен.',
    'change_password.submit' => 'Промени паролата',
    'change_password.flash.success' => 'Паролата беше успешно променена.',
    'registration.check_email' => 'Изпратихме писмо до %email%. То съдържа линк за активиране, който трябва да отворите, за да се активира профилът Ви.
',
    'registration.confirmed' => 'Честито, %username%, акаунтът е успешно активиран.',
    'registration.back' => 'Обратно към предишната страница.',
    'registration.submit' => 'Регистрация',
    'registration.flash.user_created' => 'Потребителят беше успешно създаден.',
    'registration.email.subject' => 'Добре дошли, %username%!',
    'registration.email.message' => 'Здравейте, %username%!

За да активирате своя профил, моля отворете %confirmationUrl%

Това е еднократен линк за валидиране на акаунта Ви. 

Поздрави,
от екипа.
',
    'resetting.check_email' => 'Изпратихме писмо с линк за активация на посочения имейл адрес: %email%.
Забележка: Заявка за нова парола може да направите в рамките на %tokenLifetime% час(а).

Ако не откривате писмото проверете в папка СПАМ или опитайте отново.
',
    'resetting.request.username' => 'Потребителско име или имейл',
    'resetting.request.submit' => 'Промени паролата',
    'resetting.reset.submit' => 'Промени паролата',
    'resetting.flash.success' => 'Паролата беше успешно променена.',
    'resetting.email.subject' => 'Забравена парола',
    'resetting.email.message' => 'Здравейте, %username%!

За да промените своята парола, моля отворете %confirmationUrl%

Поздрави,
от екипа.
',
    'layout.logout' => 'Изход',
    'layout.login' => 'Вход',
    'layout.register' => 'Регистрация',
    'layout.logged_in_as' => 'Влязъл като %username%',
    'form.group_name' => 'Име на група',
    'form.username' => 'Потребителско име',
    'form.email' => 'Имейл',
    'form.current_password' => 'Текуща парола',
    'form.password' => 'Парола',
    'form.password_confirmation' => 'Парола (отново)',
    'form.new_password' => 'Нова парола',
    'form.new_password_confirmation' => 'Нова парола (отново)',
  ),
  'messages' => 
  array (
    'Title' => 'Заглавие',
    'Name' => 'Име',
    'Filters' => 'Филтри',
    'Search' => 'Търси',
    'Dam' => 'Язовир',
    'List' => 'Списък',
    'Price' => 'Цена за рибар',
    'Dam List' => 'Списък с Язовири',
    'Search by Location' => 'Търси по локация',
    'Top 8 Dams' => 'Осемте най - големи язовира',
    'Price for ticket' => 'Цена на билет',
    'Bulgarian Fisherman' => 'Рибар.БГ',
    'Home' => 'Начало',
    'About' => 'За Нас',
    'Contact' => 'Контакт',
    'Login' => 'Вход',
    'Search Result' => 'Резултати от търсенето',
    'Fish in' => 'Видове риба в',
    'Address' => 'Адрес',
    'Info' => 'Кратка Информация',
    'See on Map' => 'Вижте на каратата',
    'Map' => 'Карта',
  ),
));
$catalogue->addFallbackCatalogue($catalogueBg);

return $catalogue;
