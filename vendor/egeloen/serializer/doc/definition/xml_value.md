# XML Value

The XML value is dedicated to XML and allow you to put a property as XML value.

## Example

In this example, we configure the username property to be put as XML value.

``` php
namespace Acme;

use Ivory\Serializer\Mapping\Annotation as Serializer;

class User
{
    /**
     * @Serializer\XmlValue
     *
     * @var string
     */
    public $username;
}
```

## Usage

``` php
use Acme\User;

$user = new User();
$user->username = 'GeLo';

$serialize = $serializer->serialize($user, $format);
// echo $serialize;

$deserialize = $serializer->deserialize($serialize, User::class, $format);
// $deserialize == $user
```

## Result

``` xml
<?xml version="1.0" encoding="UTF-8"?>
<result>GeLo</result>
```

## Definitions

If you prefer use an other definition format, the following examples are identical. 

### XML

``` xml
<?xml version="1.0" encoding="UTF-8" ?>

<serializer
    xmlns="http://egeloen.fr/schema/ivory-serializer"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://egeloen.fr/schema/ivory-serializer
                        http://egeloen.fr/schema/ivory-serializer/mapping-1.0.xsd"
>
    <class name="Acme\User">
        <property name="username" xml-value="true" />
    </class>
</serializer>
```

### YAML

``` yaml
Acme\User:
    properties:
        username:
            xml_value: true
```

### JSON

``` json
{
    "Acme\\User": {
        "properties": {
            "username": {
                "xml_value": true
            }
        }
    }
}
```

