<p align="center"><a href="https://github.com/ajangi/php-rest-response" style="border-radius:100%;"><img src="../../blob/master/man.svg" width="200" style="border-radius:100%;"></a></p>
<p align="center">
<a href="https://packagist.org/packages/ajangi/php-rest-response"><img src="https://poser.pugx.org/ajangi/php-rest-response/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/ajangi/php-rest-response"><img src="https://poser.pugx.org/ajangi/php-rest-response/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/ajangi/php-rest-response"><img src="https://poser.pugx.org/ajangi/php-rest-response/license.svg" alt="License"></a>
<a href="https://packagist.org/packages/ajangi/php-rest-response"><img src="https://poser.pugx.org/ajangi/php-rest-response/composerlock" alt="License"></a>
</p>

# PHP-REST-RESPONSE
A PHP standard response structure to unify responses between microservices.

### Requirements
- minimum php version : 7.0.0

### Installation
- ```bash composer require ajangi/php-rest-response ```

### Hot to use?
#### method #1
```php
...
use Symfony\Component\HttpFoundation\Response;
use DrResponse\DrResponse;
...

public function index(): Response
    {
        $status_code = Response::HTTP_OK;
        $result = DrResponse::SUCCESS_RESPONSE;
        $data = ['users' => "List of users for example"];
        $messages = [];
        $developer_message = '';
        $response = new DrResponse($status_code,$result,$data,$messages,$developer_message);
        return $response->send();
    }
```
