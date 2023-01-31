# Laravel Cashier - Braintree Edition

[![Build Status](https://travis-ci.org/laravel/cashier-braintree.svg)](https://travis-ci.org/laravel/cashier-braintree)
[![Total Downloads](https://poser.pugx.org/laravel/cashier-braintree/d/total.svg)](https://packagist.org/packages/laravel/cashier-braintree)
[![Latest Stable Version](https://poser.pugx.org/laravel/cashier-braintree/v/stable.svg)](https://packagist.org/packages/laravel/cashier-braintree)
[![Latest Unstable Version](https://poser.pugx.org/laravel/cashier-braintree/v/unstable.svg)](https://packagist.org/packages/laravel/cashier-braintree)
[![License](https://poser.pugx.org/laravel/cashier-braintree/license.svg)](https://packagist.org/packages/laravel/cashier-braintree)

## Introduction

Laravel Cashier Braintree provides an expressive, fluent interface to [Braintree's](https://www.braintreepayments.com/) subscription billing services. It handles almost all of the boilerplate subscription billing code you are dreading writing. In addition to basic subscription management, Cashier Braintree can handle coupons, swapping subscription, cancellation grace periods, and even generate invoice PDFs.

## Supports

Supports PHP ^7.2, Laravel ~6.12|~6.13|~6.14, and phpunit ~8.0

## Testing

You will need to set the following details locally and on your Braintree account in order to run the library's tests.

### Local

#### Environment Variables

    BRAINTREE_MERCHANT_ID=
    BRAINTREE_PUBLIC_KEY=
    BRAINTREE_PRIVATE_KEY=
    BRAINTREE_MODEL=Laravel\Cashier\Tests\User

You can set these variables in the `phpunit.xml.dist` file.

### Braintree

#### Plans

    * Plan ID: monthly-10-1, Price: $10, Billing cycle of every month
    * Plan ID: monthly-10-2, Price: $10, Billing cycle of every month
    * Plan ID: yearly-100-1, Price: $100, Billing cycle of every 12 months

#### Discount

    * Discount ID: coupon-1, Price: $5
    * Discount ID: plan-credit, Price $1

## Official Documentation

Documentation for Cashier Braintree can be found on the [Laravel website](https://laravel.com/docs/5.8/braintree).

## Submitting a build

    * Update composer.json to include new php version
    * Checkout branch for version that you want
    * Create a git tag with the version
    * That's it. It will auto be updated on packagist and you can now install it in your app
