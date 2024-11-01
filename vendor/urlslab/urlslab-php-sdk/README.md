# OpenAPIClient-php

optimize your website with SEO


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/urlslab/urlslab-php-sdk.git"
    }
  ],
  "require": {
    "urlslab/urlslab-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_data_retrieval_analytics_search_request = new \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest(); // \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest | Analytics request

try {
    $result = $apiInstance->getPageStats($domain_data_retrieval_analytics_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getPageStats: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.urlslab.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnalyticsApi* | [**getPageStats**](docs/Api/AnalyticsApi.md#getpagestats) | **POST** /v1/analytics/page-stats | Page Stats data from google search console
*AnalyticsApi* | [**getSiteUrls**](docs/Api/AnalyticsApi.md#getsiteurls) | **GET** /v1/analytics/site-urls | Site URLs from GSC
*AnalyticsApi* | [**getTopKeywords**](docs/Api/AnalyticsApi.md#gettopkeywords) | **POST** /v1/analytics/keywords | Keyword Analytics data from google search console
*ApikeyApi* | [**validate**](docs/Api/ApikeyApi.md#validate) | **GET** /v1/apikey/validate | validate a given API Key
*AuthApi* | [**getAuthIntegrations**](docs/Api/AuthApi.md#getauthintegrations) | **GET** /v1/auth/integrations | check if the user is already integrated to a specific integration
*AuthApi* | [**getUserInfo**](docs/Api/AuthApi.md#getuserinfo) | **GET** /v1/auth/user-info | get user info
*AuthApi* | [**getUserSubscriptionDetail**](docs/Api/AuthApi.md#getusersubscriptiondetail) | **GET** /v1/auth/user-sub | get user subscription Detail
*AuthApi* | [**logout**](docs/Api/AuthApi.md#logout) | **POST** /v1/auth/signout | logout for users
*AuthApi* | [**signin**](docs/Api/AuthApi.md#signin) | **GET** /v1/auth/signin/{provider} | login for users
*ChatbotApi* | [**createChatbot**](docs/Api/ChatbotApi.md#createchatbot) | **PUT** /v1/chatbots | Create chatbot
*ChatbotApi* | [**createChatbotSession**](docs/Api/ChatbotApi.md#createchatbotsession) | **PUT** /v1/chatbots/sessions/{userChatbotId} | Create chatbot session
*ChatbotApi* | [**deleteChatbot**](docs/Api/ChatbotApi.md#deletechatbot) | **DELETE** /v1/chatbots/{id} | Delete chatbot
*ChatbotApi* | [**deleteChatbotSession**](docs/Api/ChatbotApi.md#deletechatbotsession) | **DELETE** /v1/chatbots/sessions/{chatbotId}/{sessionId} | Delete chatbot session
*ChatbotApi* | [**getChatbot**](docs/Api/ChatbotApi.md#getchatbot) | **GET** /v1/chatbots/{id} | Get chatbot by id
*ChatbotApi* | [**getChatbotSessionConversation**](docs/Api/ChatbotApi.md#getchatbotsessionconversation) | **GET** /v1/chatbots/conversations/sessions/{chatbotId}/{sessionId} | Get chatbot conversation
*ChatbotApi* | [**getChatbotSessionSources**](docs/Api/ChatbotApi.md#getchatbotsessionsources) | **GET** /v1/chatbots/sessions/{chatbotId}/{sessionId}/sources | Get chatbot session sources
*ChatbotApi* | [**getChatbotSessions**](docs/Api/ChatbotApi.md#getchatbotsessions) | **GET** /v1/chatbots/conversations/ | Get chatbot sessions
*ChatbotApi* | [**getChatbotSessionsChart**](docs/Api/ChatbotApi.md#getchatbotsessionschart) | **GET** /v1/chatbots/conversations/chart | Get chatbot sessions chart
*ChatbotApi* | [**getChatbots**](docs/Api/ChatbotApi.md#getchatbots) | **GET** /v1/chatbots | Get chatbots for a user
*ChatbotApi* | [**streamChatbotSession**](docs/Api/ChatbotApi.md#streamchatbotsession) | **POST** /v1/chatbots/sessions/{sessionId}/stream | Stream Chatbot Session
*ChatbotApi* | [**updateChatbot**](docs/Api/ChatbotApi.md#updatechatbot) | **POST** /v1/chatbots/{id} | Update chatbot
*ContentApi* | [**asyncMemoryLessAugment**](docs/Api/ContentApi.md#asyncmemorylessaugment) | **POST** /v1/content/augment/async | Async Augment based on the query and the given context
*ContentApi* | [**complexAugment**](docs/Api/ContentApi.md#complexaugment) | **POST** /v1/content/complex-augment/async | Get Complex Async Augmentation result for multiple docs
*ContentApi* | [**complexAugmentWithURLContext**](docs/Api/ContentApi.md#complexaugmentwithurlcontext) | **POST** /v1/content/augment/process/create | Augment based on given urls context
*ContentApi* | [**getProcessResult**](docs/Api/ContentApi.md#getprocessresult) | **GET** /v1/content/augment/process/{id} | Get Async Augmentation result
*ContentApi* | [**getRelatedUrls**](docs/Api/ContentApi.md#getrelatedurls) | **POST** /v1/content/related-urls | Related Urls to a specific url
*ContentApi* | [**memoryLessAugment**](docs/Api/ContentApi.md#memorylessaugment) | **POST** /v1/content/augment | Augment based on the query and the given context
*CreditsApi* | [**getCreditEvents**](docs/Api/CreditsApi.md#getcreditevents) | **GET** /v1/credits/events | Fetching Latest Events of user credit
*CreditsApi* | [**getCreditEventsAggregation**](docs/Api/CreditsApi.md#getcrediteventsaggregation) | **GET** /v1/credits/events/aggregation | Fetching aggregated credit events
*CreditsApi* | [**getLastCreditStatus**](docs/Api/CreditsApi.md#getlastcreditstatus) | **GET** /v1/credits | Fetching Last Status of user credit
*DocsApi* | [**addDocument**](docs/Api/DocsApi.md#adddocument) | **PUT** /v1/content/docs | Add Custom Document
*DocsApi* | [**deleteDocument**](docs/Api/DocsApi.md#deletedocument) | **DELETE** /v1/content/docs/{id} | Delete Document By Id
*DocsApi* | [**getDocument**](docs/Api/DocsApi.md#getdocument) | **GET** /v1/content/docs/{id} | Get Document By Id
*DocsApi* | [**searchDocuments**](docs/Api/DocsApi.md#searchdocuments) | **POST** /v1/content/docs | Get All Documents
*DomainsApi* | [**getUserDomains**](docs/Api/DomainsApi.md#getuserdomains) | **GET** /v1/domains | Get Domains of a user
*PublicAssetsApi* | [**loadCarouselThumbnail**](docs/Api/PublicAssetsApi.md#loadcarouselthumbnail) | **GET** /v1/public/screenshot/thumbnail/carousel/{bucketId} | Fetching thumbnail of carousel screenshot of url
*PublicAssetsApi* | [**loadFullPageThumbnail**](docs/Api/PublicAssetsApi.md#loadfullpagethumbnail) | **GET** /v1/public/screenshot/thumbnail/fullpage/{bucketId} | Fetching thumbnail of fullpage screenshot of url
*PublicAssetsApi* | [**loadImageCarousel**](docs/Api/PublicAssetsApi.md#loadimagecarousel) | **GET** /v1/public/screenshot/carousel/{bucketId} | Fetching carousel screenshot of url
*PublicAssetsApi* | [**loadOriginalImage**](docs/Api/PublicAssetsApi.md#loadoriginalimage) | **GET** /v1/public/screenshot/fullpage/{bucketId} | Fetching fullpage screenshot of url
*PublicAssetsApi* | [**loadTechnologyLogo**](docs/Api/PublicAssetsApi.md#loadtechnologylogo) | **GET** /v1/public/technologies/logos/{iconName} | Fetching icon logo of technology
*ScheduleApi* | [**createSchedule**](docs/Api/ScheduleApi.md#createschedule) | **PUT** /v1/schedule | create a new schedule
*ScheduleApi* | [**deleteSchedule**](docs/Api/ScheduleApi.md#deleteschedule) | **DELETE** /v1/schedule/{id} | delete a schedule
*ScheduleApi* | [**getSchedule**](docs/Api/ScheduleApi.md#getschedule) | **GET** /v1/schedule/{id} | get a specific schedule details
*ScheduleApi* | [**listSchedules**](docs/Api/ScheduleApi.md#listschedules) | **GET** /v1/schedule | get list of all schedules for the user
*SerpApi* | [**bulkSearch**](docs/Api/SerpApi.md#bulksearch) | **POST** /v1/serp/bulk/search | Search the Serp to get top urls in bulk
*SerpApi* | [**scheduleKeywordsAnalysis**](docs/Api/SerpApi.md#schedulekeywordsanalysis) | **POST** /v1/serp/bulk/search_volume | Get Google Ads Search Analytics
*SerpApi* | [**search**](docs/Api/SerpApi.md#search) | **POST** /v1/serp/search | Search the Serp to get top urls
*SnapshotApi* | [**getSnapshots**](docs/Api/SnapshotApi.md#getsnapshots) | **POST** /v1/snapshot | Get screenshot of url
*SnapshotApi* | [**getSnapshotsHistory**](docs/Api/SnapshotApi.md#getsnapshotshistory) | **GET** /v1/snapshot/history | Get history of snapshot of url
*SummaryApi* | [**getSummary**](docs/Api/SummaryApi.md#getsummary) | **POST** /v1/summary | Get summarization data for url
*VideoApi* | [**getYTMicrodata**](docs/Api/VideoApi.md#getytmicrodata) | **POST** /v1/content/video/yt/microdata/{ytVidId} | get microdata for a youtube video
*VideoApi* | [**getYTVidCaption**](docs/Api/VideoApi.md#getytvidcaption) | **POST** /v1/content/video/yt/transcribe/{ytVidId} | get transcript for a youtube video

## Models

- [DomainAcknowledged](docs/Model/DomainAcknowledged.md)
- [DomainDataRetrievalAnalyticsSearchRequest](docs/Model/DomainDataRetrievalAnalyticsSearchRequest.md)
- [DomainDataRetrievalAnalyticsSearchResponse](docs/Model/DomainDataRetrievalAnalyticsSearchResponse.md)
- [DomainDataRetrievalAnalyticsSearchResponseRow](docs/Model/DomainDataRetrievalAnalyticsSearchResponseRow.md)
- [DomainDataRetrievalAugmentPrompt](docs/Model/DomainDataRetrievalAugmentPrompt.md)
- [DomainDataRetrievalAugmentRequest](docs/Model/DomainDataRetrievalAugmentRequest.md)
- [DomainDataRetrievalAugmentRequestWithURLContext](docs/Model/DomainDataRetrievalAugmentRequestWithURLContext.md)
- [DomainDataRetrievalAugmentResponse](docs/Model/DomainDataRetrievalAugmentResponse.md)
- [DomainDataRetrievalComplexAugmentRequest](docs/Model/DomainDataRetrievalComplexAugmentRequest.md)
- [DomainDataRetrievalComplexAugmentResponse](docs/Model/DomainDataRetrievalComplexAugmentResponse.md)
- [DomainDataRetrievalContentQuery](docs/Model/DomainDataRetrievalContentQuery.md)
- [DomainDataRetrievalDataRequest](docs/Model/DomainDataRetrievalDataRequest.md)
- [DomainDataRetrievalKeywordAnalyticsBulkResponse](docs/Model/DomainDataRetrievalKeywordAnalyticsBulkResponse.md)
- [DomainDataRetrievalKeywordAnalyticsResponse](docs/Model/DomainDataRetrievalKeywordAnalyticsResponse.md)
- [DomainDataRetrievalMonthlySearches](docs/Model/DomainDataRetrievalMonthlySearches.md)
- [DomainDataRetrievalRelatedUrlsRequest](docs/Model/DomainDataRetrievalRelatedUrlsRequest.md)
- [DomainDataRetrievalRelatedUrlsResponse](docs/Model/DomainDataRetrievalRelatedUrlsResponse.md)
- [DomainDataRetrievalScreenshotResponse](docs/Model/DomainDataRetrievalScreenshotResponse.md)
- [DomainDataRetrievalSearchVolumeBulkRequest](docs/Model/DomainDataRetrievalSearchVolumeBulkRequest.md)
- [DomainDataRetrievalSerpApiBulkSearchRequest](docs/Model/DomainDataRetrievalSerpApiBulkSearchRequest.md)
- [DomainDataRetrievalSerpApiBulkSearchResponse](docs/Model/DomainDataRetrievalSerpApiBulkSearchResponse.md)
- [DomainDataRetrievalSerpApiSearchRequest](docs/Model/DomainDataRetrievalSerpApiSearchRequest.md)
- [DomainDataRetrievalSerpApiSearchResponse](docs/Model/DomainDataRetrievalSerpApiSearchResponse.md)
- [DomainDataRetrievalSerpApiURL](docs/Model/DomainDataRetrievalSerpApiURL.md)
- [DomainDataRetrievalSiteUrlsResponse](docs/Model/DomainDataRetrievalSiteUrlsResponse.md)
- [DomainDataRetrievalSourceResponse](docs/Model/DomainDataRetrievalSourceResponse.md)
- [DomainDataRetrievalStatefulResponse](docs/Model/DomainDataRetrievalStatefulResponse.md)
- [DomainDataRetrievalSummaryResponse](docs/Model/DomainDataRetrievalSummaryResponse.md)
- [DomainDataRetrievalUrlSnapshotMultiResponse](docs/Model/DomainDataRetrievalUrlSnapshotMultiResponse.md)
- [DomainDataRetrievalUrlSnapshotResponse](docs/Model/DomainDataRetrievalUrlSnapshotResponse.md)
- [DomainDataRetrievalVideoCaptionResponse](docs/Model/DomainDataRetrievalVideoCaptionResponse.md)
- [DomainDataRetrievalVideoResponse](docs/Model/DomainDataRetrievalVideoResponse.md)
- [DomainDocsDocIndexRequest](docs/Model/DomainDocsDocIndexRequest.md)
- [DomainDocsDocResponse](docs/Model/DomainDocsDocResponse.md)
- [DomainDocsSearchRequest](docs/Model/DomainDocsSearchRequest.md)
- [DomainDocsUrlslabDocument](docs/Model/DomainDocsUrlslabDocument.md)
- [DomainDomainsDomainBulkResponseDTO](docs/Model/DomainDomainsDomainBulkResponseDTO.md)
- [DomainDomainsDomainRequestDTO](docs/Model/DomainDomainsDomainRequestDTO.md)
- [DomainDomainsDomainResponseDTO](docs/Model/DomainDomainsDomainResponseDTO.md)
- [DomainDomainsUrlResponseDTO](docs/Model/DomainDomainsUrlResponseDTO.md)
- [DomainDomainsUrlScreenshotDTO](docs/Model/DomainDomainsUrlScreenshotDTO.md)
- [DomainPaginationDateRange](docs/Model/DomainPaginationDateRange.md)
- [DomainPaginationPagination](docs/Model/DomainPaginationPagination.md)
- [DomainPaginationSorting](docs/Model/DomainPaginationSorting.md)
- [DomainScheduleAPISchedule](docs/Model/DomainScheduleAPISchedule.md)
- [DomainScheduleScheduleConf](docs/Model/DomainScheduleScheduleConf.md)
- [DomainUrlslabIntegration](docs/Model/DomainUrlslabIntegration.md)
- [DomainUserCreditAggregatedCreditEvents](docs/Model/DomainUserCreditAggregatedCreditEvents.md)
- [DomainUserCreditAggregatedCreditResponse](docs/Model/DomainUserCreditAggregatedCreditResponse.md)
- [DomainUserCreditCreditEvent](docs/Model/DomainUserCreditCreditEvent.md)
- [DomainUserCreditCreditEventResponse](docs/Model/DomainUserCreditCreditEventResponse.md)
- [DomainUserCreditCreditStatus](docs/Model/DomainUserCreditCreditStatus.md)
- [SchemasExtrasChartsChartData](docs/Model/SchemasExtrasChartsChartData.md)
- [SchemasExtrasChartsChartDataset](docs/Model/SchemasExtrasChartsChartDataset.md)
- [SchemasExtrasCompleted](docs/Model/SchemasExtrasCompleted.md)
- [SchemasRequestsChatbotChatCompletionRequest](docs/Model/SchemasRequestsChatbotChatCompletionRequest.md)
- [SchemasRequestsChatbotChatbotCreate](docs/Model/SchemasRequestsChatbotChatbotCreate.md)
- [SchemasResponsesChatbotChatbotConversationMessageResponse](docs/Model/SchemasResponsesChatbotChatbotConversationMessageResponse.md)
- [SchemasResponsesChatbotChatbotResponse](docs/Model/SchemasResponsesChatbotChatbotResponse.md)
- [SchemasResponsesChatbotChatbotSessionOverviewResponse](docs/Model/SchemasResponsesChatbotChatbotSessionOverviewResponse.md)
- [SchemasResponsesChatbotChatbotSessionResponse](docs/Model/SchemasResponsesChatbotChatbotSessionResponse.md)
- [SchemasResponsesChatbotChatbotSessionSource](docs/Model/SchemasResponsesChatbotChatbotSessionSource.md)

## Authorization

### UrlslabApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-URLSLAB-KEY
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `0.5.2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
