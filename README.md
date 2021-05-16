# upload_to_s3
### How to use - 
#### Install AWS sdk for php
`composer require aws/aws-sdk-php`

AWS access key and secret key can be written in the program itself but it is not a good practice to do this as it exposes the keys to public thereby compromising the account security.

To provide keys, one way is to store them in environmental variable and another way is to use `aws configure` command and enter the keys here. For the second approach AWS CLI should be installed.
