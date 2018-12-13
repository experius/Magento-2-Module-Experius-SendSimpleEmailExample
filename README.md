**Magento 2 Module Send Simple Email Example**

This is a simple example module on how to send a email with minimal code 
and without using the Magento Email templating system

- Dependency Inject construct \Experius\SendSimpleEmailExample\Model\Mail $mail
- Then trigger the email by using $this->mail->sendMessage();