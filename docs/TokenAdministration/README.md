# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 6.0-preview
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TokenAdministration\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TokenAdministration\Api\TokenListGlobalIdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \AzureDevOpsClient\TokenAdministration\AzureDevOpsClient\TokenAdministration\Model\TokenAdminRevocation()); // \AzureDevOpsClient\TokenAdministration\AzureDevOpsClient\TokenAdministration\Model\TokenAdminRevocation[] | The list of identities containing the authorization IDs of the OAuth authorizations, such as session tokens retrieved by listed a users PATs, that should be checked for global access tokens.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$isPublic = true; // bool | Set to false for PAT tokens and true for SSH tokens.

try {
    $apiInstance->tokenListGlobalIdentitiesList($body, $apiVersion, $isPublic);
} catch (Exception $e) {
    echo 'Exception when calling TokenListGlobalIdentitiesApi->tokenListGlobalIdentitiesList: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://dev.azure.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*TokenListGlobalIdentitiesApi* | [**tokenListGlobalIdentitiesList**](docs/Api/TokenListGlobalIdentitiesApi.md#tokenlistglobalidentitieslist) | **POST** /_apis/tokenadministration/tokenlistglobalidentities | 
*TokenPersonalAccessTokensApi* | [**tokenPersonalAccessTokensList**](docs/Api/TokenPersonalAccessTokensApi.md#tokenpersonalaccesstokenslist) | **POST** /_apis/tokenadministration/tokenpersonalaccesstokens/{subjectDescriptor} | 
*TokenRevocationsApi* | [**tokenRevocationsRevokeAuthorizations**](docs/Api/TokenRevocationsApi.md#tokenrevocationsrevokeauthorizations) | **POST** /_apis/tokenadministration/tokenrevocations | 


## Documentation For Models

 - [SessionToken](docs/Model/SessionToken.md)
 - [TokenAdminPagedSessionTokens](docs/Model/TokenAdminPagedSessionTokens.md)
 - [TokenAdminRevocation](docs/Model/TokenAdminRevocation.md)
 - [TokenAdministrationRevocation](docs/Model/TokenAdministrationRevocation.md)
 - [VssJsonCollectionWrapperBase](docs/Model/VssJsonCollectionWrapperBase.md)
 - [VssJsonCollectionWrapper](docs/Model/VssJsonCollectionWrapper.md)


## Documentation For Authorization


## accessToken

- **Type**: HTTP basic authentication

## oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://app.vssps.visualstudio.com/oauth2/authorize&response_type=Assertion
- **Scopes**: 
 - **vso.tokenadministration**: Grants the ability to manage (view and revoke) existing tokens to organization administrators


## Author

nugetvss@microsoft.com

