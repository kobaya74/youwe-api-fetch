# Module Youwe ApiFetch

    ``youwe/module-apifetch``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Youwe UserList Widget

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

  - Unzip the zip file somewhere on local machine.
 - Copy folder "Youwe" in app/code/.
 - Enable the module by running `php bin/magento module:enable Youwe_ApiFetch`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer (not available at the moment)

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require youwe/module-apifetch`
 - enable the module by running `php bin/magento module:enable Youwe_ApiFetch`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration
- This is test widget only. It is added to Homepage and code is in module.
- Under Stores > Configuration > Youwe > ApiFetch set module to "Enabled".
- Add test API  https://reqres.in/api/users.

## Specifications


## Attributes



