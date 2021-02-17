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
```bash
composer require ajangi/php-rest-response
```

### Hot to use?
#### Success Response Sample
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
The above code simply returens 
```json
{
    "status_code": 200,
    "result": "SUCCESS",
    "developer_message": "",
    "messages": [],
    "data": {
        "users": "List of users for example"
    }
}
```
Or you can simply use
```php
...
use DrResponse\DrResponse;
...

public function index(): Response
    {
        return (new SuccessResponse())->send();
    }
```
to get 
```json
{
    "status_code": 200,
    "result": "SUCCESS",
    "developer_message": "",
    "messages": [],
    "data": []
}
```
#### Error Response Sample
```php
public function index(): Response
    {
        $status_code = Response::HTTP_NOT_FOUND;
        $result = DrResponse::ERROR_RESPONSE;
        $data = [];
        $messages = [
            'entity' => ['entity not found!'] // This structure is recommended
        ];
        $developer_message = 'Dear Front-End developer! You may have a typo!';
        $response = new DrResponse($status_code,$result,$data,$messages,$developer_message);
        return $response->send();
    }
```
The above codes simple returns : 
```json
{
    "status_code": 404,
    "result": "ERROR",
    "developer_message": "Dear Front-End developer! You may have a typo!",
    "messages": {
        "entity": [
            "entity not found!"
        ]
    },
    "data": []
}
```
