# Lumen Twilio Whatsapp API Integration

This is simple example of how to integrate twilio whatsapp api using laravel lumen micro framework.
It contains WhatsappController with two actions:

1. To send whatsapp message
2. To receive message webhook (which needs to be set using twilio console interface)

# Steps to get it working

1. Clone lumen-twilio-whatsapp-api repository into your web directory
2. Change directory to lumen-twilio-whatsapp-api and rename example.env to .env
3. Create sandbox account at twilio and after login from twilio console dashboar get account SID and auth token
4. Set account SID and auth token inside .env file
5. Go to command line and run command "php -S localhost:8000 -t public" you will get your application served at port 8000
6. Make sure from your mobile whatsapp application you have sent example code message that you receive from twilio console to optin for further communication.
7. Use Postman or any other requesting tool that you like, try to send message using the controller action mentioned earlier, following is example request for same.

POST http://localhost:8000/sendmessage
Request Header: Content-Type = application/json
Request Body: {
"to": "+12345679890", // to phone number where you want to send message
"messageBody": "Hi" // actual message that you want to send
}

8. You will also need to set http://localhost:8000/receivewebhook in twilio programmable messges section to determine where exactly the received message will be handled by specifying webhook url, inside receiveWebhook action in WhatsappController you can do necessary action and finally acknowledge the sender about you have recieved message as response.

Enjoy integrating!

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
