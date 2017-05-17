<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ro', array (
  'validators' => 
  array (
    'This value should be false.' => 'Această valoare ar trebui să fie falsă (false).',
    'This value should be true.' => 'Această valoare ar trebui să fie adevărată (true).',
    'This value should be of type {{ type }}.' => 'Această valoare ar trebui să fie de tipul {{ type }}.',
    'This value should be blank.' => 'Această valoare ar trebui sa fie goală.',
    'The value you selected is not a valid choice.' => 'Valoarea selectată nu este o opțiune validă.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Trebuie să selectați cel puțin {{ limit }} opțiune.|Trebuie să selectați cel puțin {{ limit }} opțiuni.|Trebuie să selectați cel puțin {{ limit }} de opțiuni',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Trebuie să selectați cel mult {{ limit }} opțiune.|Trebuie să selectați cel mult {{ limit }} opțiuni.|Trebuie să selectați cel mult {{ limit }} de opțiuni.',
    'One or more of the given values is invalid.' => 'Una sau mai multe dintre valorile furnizate sunt invalide.',
    'This field was not expected.' => 'Acest câmp nu era de aşteptat.',
    'This field is missing.' => 'Acest câmp este lipsă.',
    'This value is not a valid date.' => 'Această valoare nu reprezintă o dată validă.',
    'This value is not a valid datetime.' => 'Această valoare nu reprezintă o dată și oră validă.',
    'This value is not a valid email address.' => 'Această valoare nu reprezintă o adresă de e-mail validă.',
    'The file could not be found.' => 'Fișierul nu a putut fi găsit.',
    'The file is not readable.' => 'Fișierul nu poate fi citit.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fișierul este prea mare ({{ size }} {{ suffix }}). Dimensiunea maximă permisă este {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Tipul fișierului este invalid ({{ type }}). Tipurile permise de fișiere sunt ({{ types }}).',
    'This value should be {{ limit }} or less.' => 'Această valoare ar trebui să fie cel mult {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Această valoare este prea lungă. Ar trebui să aibă maxim {{ limit }} caracter.|Această valoare este prea lungă. Ar trebui să aibă maxim {{ limit }} caractere.|Această valoare este prea lungă. Ar trebui să aibă maxim {{ limit }} de caractere.',
    'This value should be {{ limit }} or more.' => 'Această valoare ar trebui să fie cel puțin {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Această valoare este prea scurtă. Ar trebui să aibă minim {{ limit }} caracter.|Această valoare este prea scurtă. Ar trebui să aibă minim {{ limit }} caractere.|Această valoare este prea scurtă. Ar trebui să aibă minim {{ limit }} de caractere.',
    'This value should not be blank.' => 'Această valoare nu ar trebui să fie goală.',
    'This value should not be null.' => 'Această valoare nu ar trebui să fie nulă (null).',
    'This value should be null.' => 'Această valoare ar trebui să fie nulă (null).',
    'This value is not valid.' => 'Această valoare nu este validă.',
    'This value is not a valid time.' => 'Această valoare nu reprezintă o oră validă.',
    'This value is not a valid URL.' => 'Această valoare nu reprezintă un URL (link) valid.',
    'The two values should be equal.' => 'Cele două valori ar trebui să fie egale.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fișierul este prea mare. Mărimea maximă permisă este {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fișierul este prea mare.',
    'The file could not be uploaded.' => 'Fișierul nu a putut fi încărcat.',
    'This value should be a valid number.' => 'Această valoare nu reprezintă un număr valid.',
    'This file is not a valid image.' => 'Acest fișier nu este o imagine validă.',
    'This is not a valid IP address.' => 'Această valoare nu este o adresă IP validă.',
    'This value is not a valid language.' => 'Această valoare nu reprezintă o limbă corectă.',
    'This value is not a valid locale.' => 'Această valoare nu reprezintă un dialect (o limbă) corect.',
    'This value is not a valid country.' => 'Această valoare nu este o țară validă.',
    'This value is already used.' => 'Această valoare este folosită deja.',
    'The size of the image could not be detected.' => 'Mărimea imaginii nu a putut fi detectată.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Lățimea imaginii este prea mare ({{ width }}px). Lățimea maximă permisă este de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Lățimea imaginii este prea mică ({{ width }}px). Lățimea minimă permisă este de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Înălțimea imaginii este prea mare ({{ height }}px). Înălțimea maximă permisă este de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Înălțimea imaginii este prea mică ({{ height }}px). Înălțimea minimă permisă este de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Această valoare trebuie să fie parola curentă a utilizatorului.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Această valoare trebuie să conțină exact {{ limit }} caracter.|Această valoare trebuie să conțină exact {{ limit }} caractere.|Această valoare trebuie să conțină exact {{ limit }} de caractere.',
    'The file was only partially uploaded.' => 'Fișierul a fost încărcat parțial.',
    'No file was uploaded.' => 'Nu a fost încărcat nici un fișier.',
    'No temporary folder was configured in php.ini.' => 'Nu este configurat nici un director temporar in php.ini.',
    'Cannot write temporary file to disk.' => 'Nu a fost posibilă scrierea fișierului temporar pe disk.',
    'A PHP extension caused the upload to fail.' => 'O extensie PHP a prevenit încărcarea cu succes a fișierului.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Această colecție trebuie să conțină cel puțin {{ limit }} element.|Această colecție trebuie să conțină cel puțin {{ limit }} elemente.|Această colecție trebuie să conțină cel puțin {{ limit }} de elemente.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Această colecție trebuie să conțină cel mult {{ limit }} element.|Această colecție trebuie să conțină cel mult {{ limit }} elemente.|Această colecție trebuie să conțină cel mult {{ limit }} de elemente.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Această colecție trebuie să conțină {{ limit }} element.|Această colecție trebuie să conțină {{ limit }} elemente.|Această colecție trebuie să conțină {{ limit }} de elemente.',
    'Invalid card number.' => 'Numărul card invalid.',
    'Unsupported card type or invalid card number.' => 'Tipul sau numărul cardului nu sunt valide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Acesta nu este un cod IBAN (International Bank Account Number) valid.',
    'This value is not a valid ISBN-10.' => 'Această valoare nu este un cod ISBN-10 valid.',
    'This value is not a valid ISBN-13.' => 'Această valoare nu este un cod ISBN-13 valid.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Această valoare nu este un cod ISBN-10 sau ISBN-13 valid.',
    'This value is not a valid ISSN.' => 'Această valoare nu este un cod ISSN valid.',
    'This value is not a valid currency.' => 'Această valoare nu este o monedă validă.',
    'This value should be equal to {{ compared_value }}.' => 'Această valoare trebuie să fie egală cu {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Această valoare trebuie să fie mai mare de {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Această valoare trebuie să fie mai mare sau egală cu {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Această valoare trebuie identică cu {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Această valoare trebuie să fie mai mică de {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Această valoare trebuie să fie mai mică sau egală cu {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Această valoare nu trebuie să fie egală cu {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Această valoare nu trebuie să fie identică cu {{ compared_value_type }} {{ compared_value }}.',
    'This form should not contain extra fields.' => 'Aceast formular nu ar trebui să conțină câmpuri suplimentare.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Fișierul încărcat a fost prea mare. Vă rugăm sa încărcați un fișier mai mic.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Token-ul CSRF este invalid. Vă rugăm să trimiteți formularul incă o dată.',
    'fos_user.username.already_used' => 'Numele de utilizator este deja folosit.',
    'fos_user.username.blank' => 'Introduceți un nume de utilizator.',
    'fos_user.username.short' => 'Numele de utilizator este prea scurt.',
    'fos_user.username.long' => 'Numele de utilizator este prea lung.',
    'fos_user.email.already_used' => 'E-mailul este deja folosit.',
    'fos_user.email.blank' => 'Introduceți e-mailul.',
    'fos_user.email.short' => 'E-mailul este prea scurt.',
    'fos_user.email.long' => 'E-mailul este prea lung.',
    'fos_user.email.invalid' => 'E-mailul nu este corect.',
    'fos_user.password.blank' => 'Introduceți parola.',
    'fos_user.password.short' => 'Parola este prea scurtă.',
    'fos_user.password.mismatch' => 'Parolele introduse nu coincid.',
    'fos_user.new_password.blank' => 'Introduceți o parolă nouă.',
    'fos_user.new_password.short' => 'Parola nouă este prea scurtă.',
    'fos_user.current_password.invalid' => 'Parola introdusă nu este corectă.',
    'fos_user.group.blank' => 'Introduceți un nume.',
    'fos_user.group.short' => 'Numele este prea scurt.',
    'fos_user.group.long' => 'Numele este prea lung.',
    'fos_group.name.already_used' => 'Numele este deja folosit.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'A apărut o eroare de autentificare.',
    'Authentication credentials could not be found.' => 'Informațiile de autentificare nu au fost găsite.',
    'Authentication request could not be processed due to a system problem.' => 'Sistemul nu a putut procesa cererea de autentificare din cauza unei erori.',
    'Invalid credentials.' => 'Date de autentificare invalide.',
    'Cookie has already been used by someone else.' => 'Cookieul este folosit deja de altcineva.',
    'Not privileged to request the resource.' => 'Permisiuni insuficiente pentru resursa cerută.',
    'Invalid CSRF token.' => 'Tokenul CSRF este invalid.',
    'Digest nonce has expired.' => 'Tokenul temporar a expirat.',
    'No authentication provider found to support the authentication token.' => 'Nu a fost găsit nici un agent de autentificare pentru tokenul specificat.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesiunea nu mai este disponibilă, a expirat sau suportul pentru cookieuri nu este activat.',
    'No token could be found.' => 'Tokenul nu a putut fi găsit.',
    'Username could not be found.' => 'Numele de utilizator nu a fost găsit.',
    'Account has expired.' => 'Contul a expirat.',
    'Credentials have expired.' => 'Datele de autentificare au expirat.',
    'Account is disabled.' => 'Contul este dezactivat.',
    'Account is locked.' => 'Contul este blocat.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Actualizează grupul',
    'group.show.name' => 'Numele grupului',
    'group.new.submit' => 'Creează grup',
    'group.flash.updated' => 'Grupul a fost actualizat.',
    'group.flash.created' => 'Grupul a fost creat.',
    'group.flash.deleted' => 'Grupul a fost șters.',
    'security.login.username' => 'Nume de utilizator',
    'security.login.password' => 'Parola',
    'security.login.remember_me' => 'Ține-mă minte',
    'security.login.submit' => 'Autentificare',
    'profile.show.username' => 'Numele de utilizator',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizează',
    'profile.flash.updated' => 'Profilul a fost actualizat.',
    'change_password.submit' => 'Schimbă parola',
    'change_password.flash.success' => 'Parola a fost schimbată.',
    'registration.check_email' => 'Un email a fost trimis către %email%. Conține un link de activare pe care trebuie să îl accesezi pentru a-ți activa contul.
',
    'registration.confirmed' => 'Felicitări %username%, contul tău a fost activat.',
    'registration.back' => 'Înapoi la pagina de la care ai venit.',
    'registration.submit' => 'Înregistrează-te',
    'registration.flash.user_created' => 'Utilizatorul a fost creat cu succes.',
    'registration.email.subject' => 'Bine ai venit %username%!',
    'registration.email.message' => 'Salut %username%!

Pentru a-ți activa contul - accesează %confirmationUrl%

Acest link poate fi folosit numai o singură dată pentru a activa contul.

Toate cele bune,
Echipa
',
    'resetting.check_email' => 'Un email a fost trimis. Conține un link pe care trebuie să îl accesezi pentru a-ți reseta parola.
Notă: Poți cere o nouă parolă numai în următoarele %tokenLifetime% ore.

Daca nu primești email-ul verifica in spam sau mai incearca o dată.
',
    'resetting.request.username' => 'Numele de utilizator sau adresa de email',
    'resetting.request.submit' => 'Resetează parola',
    'resetting.reset.submit' => 'Schimbă parola',
    'resetting.flash.success' => 'Parola a fost resetată cu succes.',
    'resetting.email.subject' => 'Resetare parolă',
    'resetting.email.message' => 'Salut %username%!

Pentru a-ți reseta parola - accesează %confirmationUrl%

Toate cele bune,
Echipa
',
    'layout.logout' => 'Ieșire',
    'layout.login' => 'Autentificare',
    'layout.register' => 'Înregistrare',
    'layout.logged_in_as' => 'Autentificat ca %username%',
    'form.group_name' => 'Numele grupului',
    'form.username' => 'Nume de utilizator',
    'form.email' => 'Email',
    'form.current_password' => 'Parola curentă',
    'form.password' => 'Parolă',
    'form.password_confirmation' => 'Verificare parolă',
    'form.new_password' => 'Parola nouă',
    'form.new_password_confirmation' => 'Verificare parolă nouă',
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
    'Go Green' => 'На Зелено',
  ),
));
$catalogue->addFallbackCatalogue($catalogueBg);

return $catalogue;
