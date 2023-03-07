# Laravel Channable API connector

## About
This package creates a wrapper around [onlineidentity/channable](https://github.com/onlineidentity/channable/) for ease of use in the [Laravel framework](https://laravel.com).

## Installation

`composer require onlineidentity/laravel-channable`

(Optional) Publish the config file with `php artisan vendor:publish --tag=channable`

Set your .env variables
```dotenv
CHANNABLE_API_TOKEN='{API_TOKEN}'
CHANNABLE_COMPANY_ID={COMPANY_ID}
CHANNABLE_PROJECT_ID={PROJECT_ID} #default, swappable after initialization
```

## Usage

````php
#Examples

# app()->make();

$channable = app()->make('channable');

//Get all orders
$channable->orders()->allOrders();

$order_id = 12345678;
$channable->orders()->shipment($order_id, [
    'tracking_code' => '3S1234567890',
    'transporter' => 'POSTNL',
    'order_item_ids' => [
        1,
        2
    ]
]);

//Get all returns with queryParameters
$channable->returns()->allReturns(['limit' => 2, 'last_modified_after' => '2022-01-01']);

//update returns status
$return_id = 12345678;
$status_accepted = \OnlineIdentity\Enums\ReturnsType::ACCEPTED;
$channable->returns()->updateReturnStatus($return_id, $status_accepted);

# Using the facade

//get all orders
$orders = \OnlineIdentity\LaravelChannable\Facades\Channable::orders()->allOrders();

//change project id
\OnlineIdentity\LaravelChannable\Facades\Channable::setProjectId(123456);

\OnlineIdentity\LaravelChannable\Facades\Channable::orders()->shipment($order_id, [
    'tracking_code' => '3S1234567890',
    'transporter' => 'POSTNL',
    'order_item_ids' => [
        1,
        2
    ]);

````
For more details and options visit the offical channable docs https://api.channable.com/v1/docs

