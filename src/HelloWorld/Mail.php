<?php

namespace HelloWorld;

use Mailgun\Mailgun;

class Mail
{
    public function sendMail()
    {

# Instantiate the client.
        $mgClient = Mailgun::create('PRIVATE_API_KEY', 'https://API_HOSTNAME');
        $domain = "YOUR_DOMAIN_NAME";
        $params = array(
            'from' => 'Excited User <YOU@YOUR_DOMAIN_NAME>',
            'to' => 'bob@example.com',
            'subject' => 'Hello',
            'text' => 'Testing some Mailgun awesomness!'
        );

# Make the call to the client.
        $mgClient->messages()->send($domain, $params);
    }
}