<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('et', array (
  'validators' => 
  array (
    'This value should be false.' => 'Väärtus peaks olema väär.',
    'This value should be true.' => 'Väärtus peaks oleme tõene.',
    'This value should be of type {{ type }}.' => 'Väärtus peaks olema {{ type }}-tüüpi.',
    'This value should be blank.' => 'Väärtus peaks olema tühi.',
    'The value you selected is not a valid choice.' => 'Väärtus peaks olema üks etteantud valikutest.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Valima peaks vähemalt {{ limit }} valikut.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Valima peaks mitte rohkem kui  {{ limit }} valikut.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'See väli ei oodatud.',
    'This field is missing.' => 'See väli on puudu.',
    'This value is not a valid date.' => 'Väärtus pole korrektne kuupäev.',
    'This value is not a valid datetime.' => 'Väärtus pole korrektne kuupäev ja kellaeg.',
    'This value is not a valid email address.' => 'Väärtus pole korrektne e-maili aadress.',
    'The file could not be found.' => 'Faili ei leita.',
    'The file is not readable.' => 'Fail ei ole loetav.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fail on liiga suur ({{ size }} {{ suffix }}). Suurim lubatud suurus on {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faili sisutüüp on vigane ({{ type }}). Lubatud sisutüübid on {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Väärtus peaks olema {{ limit }} või vähem.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Väärtus on liiga pikk. Pikkus peaks olema {{ limit }} tähemärki või vähem.',
    'This value should be {{ limit }} or more.' => 'Väärtus peaks olema {{ limit }} või rohkem.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Väärtus on liiga lühike. Pikkus peaks  olema {{ limit }} tähemärki või rohkem.',
    'This value should not be blank.' => 'Väärtus ei tohiks olla tühi.',
    'This value should not be null.' => 'Väärtus ei tohiks olla \'null\'.',
    'This value should be null.' => 'Väärtus peaks olema \'null\'.',
    'This value is not valid.' => 'Väärtus on vigane.',
    'This value is not a valid time.' => 'Väärtus pole korrektne aeg.',
    'This value is not a valid URL.' => 'Väärtus pole korrektne URL.',
    'The two values should be equal.' => 'Väärtused peaksid olema võrdsed.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fail on liiga suur. Maksimaalne lubatud suurus on {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fail on liiga suur.',
    'The file could not be uploaded.' => 'Faili ei saa üles laadida.',
    'This value should be a valid number.' => 'Väärtus peaks olema korrektne number.',
    'This file is not a valid image.' => 'Fail ei ole korrektne pilt.',
    'This is not a valid IP address.' => 'IP aadress pole korrektne.',
    'This value is not a valid language.' => 'Väärtus pole korrektne keel.',
    'This value is not a valid locale.' => 'Väärtus pole korrektne asukohakeel.',
    'This value is not a valid country.' => 'Väärtus pole olemasolev riik.',
    'This value is already used.' => 'Väärtust on juba kasutatud.',
    'The size of the image could not be detected.' => 'Pildi suurust polnud võimalik tuvastada.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Pilt on liiga lai ({{ width }}px). Suurim lubatud laius on {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Pilt on liiga kitsas ({{ width }}px). Vähim lubatud laius on {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Pilt on liiga pikk ({{ height }}px). Lubatud suurim pikkus on {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Pilt pole piisavalt pikk ({{ height }}px). Lubatud vähim pikkus on {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Väärtus peaks olema kasutaja kehtiv salasõna.',
    'This value should have exactly {{ limit }} characters.' => 'Väärtus peaks olema täpselt {{ limit }} tähemärk pikk.|Väärtus peaks olema täpselt {{ limit }} tähemärki pikk.',
    'The file was only partially uploaded.' => 'Fail ei laetud täielikult üles.',
    'No file was uploaded.' => 'Ühtegi faili ei laetud üles.',
    'No temporary folder was configured in php.ini.' => 'Ühtegi ajutist kausta polnud php.ini-s seadistatud.',
    'Cannot write temporary file to disk.' => 'Ajutist faili ei saa kettale kirjutada.',
    'A PHP extension caused the upload to fail.' => 'PHP laiendi tõttu ebaõnnestus faili üleslaadimine.',
    'This collection should contain {{ limit }} elements or more.' => 'Kogumikus peaks olema vähemalt {{ limit }} element.|Kogumikus peaks olema vähemalt {{ limit }} elementi.',
    'This collection should contain {{ limit }} elements or less.' => 'Kogumikus peaks olema ülimalt {{ limit }} element.|Kogumikus peaks olema ülimalt {{ limit }} elementi.',
    'This collection should contain exactly {{ limit }} elements.' => 'Kogumikus peaks olema täpselt {{ limit }} element.|Kogumikus peaks olema täpselt {{ limit }}|elementi.',
    'Invalid card number.' => 'Vigane kaardi number.',
    'Unsupported card type or invalid card number.' => 'Kaardi tüüpi ei toetata või kaardi number on vigane.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Väärtus pole korrektne IBAN-number.',
    'This value is not a valid ISBN-10.' => 'Väärtus pole korrektne ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Väärtus pole korrektne ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Väärtus pole korrektne ISBN-10 ega ISBN-13.',
    'This value is not a valid ISSN.' => 'Väärtus pole korrektne ISSN.',
    'This value is not a valid currency.' => 'Väärtus pole korrektne valuuta.',
    'This value should be equal to {{ compared_value }}.' => 'Väärtus peaks olema võrdne {{ compared_value }}-ga.',
    'This value should be greater than {{ compared_value }}.' => 'Väärtus peaks olema suurem kui {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Väärtus peaks olema suurem kui või võrduma {{ compared_value }}-ga.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Väärtus peaks olema identne väärtusega {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Väärtus peaks olema väiksem kui {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Väärtus peaks olema väiksem kui või võrduma {{ compared_value }}-ga.',
    'This value should not be equal to {{ compared_value }}.' => 'Väärtus ei tohiks võrduda {{ compared_value }}-ga.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Väärtus ei tohiks olla identne väärtusega {{ compared_value_type }} {{ compared_value }}.',
    'This form should not contain extra fields.' => 'Väljade grupp ei tohiks sisalda lisaväljasid.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Üleslaaditud fail oli liiga suur. Palun proovi uuesti väiksema failiga.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-märgis on vigane. Palun proovi vormi uuesti esitada.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Muuda grupp',
    'group.show.name' => 'Grupi nimi',
    'group.new.submit' => 'Uus grupp',
    'security.login.username' => 'Kasutajanimi',
    'security.login.password' => 'Salasõna',
    'security.login.remember_me' => 'Jäta mind meelde',
    'security.login.submit' => 'Sisene',
    'profile.show.username' => 'Kasutajanimi',
    'profile.show.email' => 'E-mail',
    'profile.edit.submit' => 'Uuenda',
    'change_password.submit' => 'Muuda salasõna',
    'registration.check_email' => 'E-mail on saadetud aadressile %email%. Selles sisaldub viide, mis tuleb konto aktiveerimiseks avada.',
    'registration.confirmed' => 'Palju õnne %username%, Sinu konto on aktiveeritud.',
    'registration.submit' => 'Registreeri',
    'registration.email.message' => 'Tere %username%!

Konto valideerimise edukaks lõpetamiseks palun vajutage viitel %confirmationUrl%

Parimatega,
Tiim.
',
    'resetting.request.username' => 'Kasutajanimi',
    'resetting.request.submit' => 'Saada salasõna',
    'resetting.reset.submit' => 'Muuda salasõna',
    'resetting.email.message' => 'Tere %username%!

Salasõna muutmiseks palun vajutage viitel %confirmationUrl%

Parimatega,
Tiim.
',
    'layout.logout' => 'Välju',
    'layout.login' => 'Sisene',
    'layout.register' => 'Registreeri',
    'layout.logged_in_as' => 'Sisse logitud: %username%',
    'form.group_name' => 'Grupi nimi',
    'form.username' => 'Kasutajanimi',
    'form.email' => 'E-mail',
    'form.current_password' => 'Vana salasõna',
    'form.password' => 'Salasõna',
    'form.password_confirmation' => 'Salasõna uuesti',
    'form.new_password' => 'Uus salasõna',
    'form.new_password_confirmation' => 'Salasõna uuesti',
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
    'Enter Location' => 'Въведете локация',
    'Directions' => 'Упътвания',
    'More details' => 'Повече детайли',
    'No results found for' => 'Няма намерени резултати за',
    'Radios in km' => 'Радиус в километри',
    'Something went wrong. Please check your search criteria' => 'Нещо не е наред, моля проверете ващите критерии за търсене',
  ),
));
$catalogue->addFallbackCatalogue($catalogueBg);

return $catalogue;