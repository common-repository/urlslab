<?php
/**
 * AnalyticsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * URLSLAB API
 *
 * optimize your website with SEO
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Urlslab;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * AnalyticsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AnalyticsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getPageStats' => [
            'application/json',
        ],
        'getSiteUrls' => [
            'text/plain',
        ],
        'getTopKeywords' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getPageStats
     *
     * Page Stats data from google search console
     *
     * @param  \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest $domain_data_retrieval_analytics_search_request Analytics request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPageStats'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse
     */
    public function getPageStats($domain_data_retrieval_analytics_search_request, string $contentType = self::contentTypes['getPageStats'][0])
    {
        list($response) = $this->getPageStatsWithHttpInfo($domain_data_retrieval_analytics_search_request, $contentType);
        return $response;
    }

    /**
     * Operation getPageStatsWithHttpInfo
     *
     * Page Stats data from google search console
     *
     * @param  \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest $domain_data_retrieval_analytics_search_request Analytics request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPageStats'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPageStatsWithHttpInfo($domain_data_retrieval_analytics_search_request, string $contentType = self::contentTypes['getPageStats'][0])
    {
        $request = $this->getPageStatsRequest($domain_data_retrieval_analytics_search_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPageStatsAsync
     *
     * Page Stats data from google search console
     *
     * @param  \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest $domain_data_retrieval_analytics_search_request Analytics request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPageStats'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPageStatsAsync($domain_data_retrieval_analytics_search_request, string $contentType = self::contentTypes['getPageStats'][0])
    {
        return $this->getPageStatsAsyncWithHttpInfo($domain_data_retrieval_analytics_search_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPageStatsAsyncWithHttpInfo
     *
     * Page Stats data from google search console
     *
     * @param  \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest $domain_data_retrieval_analytics_search_request Analytics request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPageStats'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPageStatsAsyncWithHttpInfo($domain_data_retrieval_analytics_search_request, string $contentType = self::contentTypes['getPageStats'][0])
    {
        $returnType = '\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse';
        $request = $this->getPageStatsRequest($domain_data_retrieval_analytics_search_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPageStats'
     *
     * @param  \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest $domain_data_retrieval_analytics_search_request Analytics request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPageStats'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPageStatsRequest($domain_data_retrieval_analytics_search_request, string $contentType = self::contentTypes['getPageStats'][0])
    {

        // verify the required parameter 'domain_data_retrieval_analytics_search_request' is set
        if ($domain_data_retrieval_analytics_search_request === null || (is_array($domain_data_retrieval_analytics_search_request) && count($domain_data_retrieval_analytics_search_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $domain_data_retrieval_analytics_search_request when calling getPageStats'
            );
        }


        $resourcePath = '/v1/analytics/page-stats';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($domain_data_retrieval_analytics_search_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($domain_data_retrieval_analytics_search_request));
            } else {
                $httpBody = $domain_data_retrieval_analytics_search_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-URLSLAB-KEY');
        if ($apiKey !== null) {
            $headers['X-URLSLAB-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getSiteUrls
     *
     * Site URLs from GSC
     *
     * @param  string $body API Key to be validated (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSiteUrls'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\DomainDataRetrievalSiteUrlsResponse
     */
    public function getSiteUrls($body = null, string $contentType = self::contentTypes['getSiteUrls'][0])
    {
        list($response) = $this->getSiteUrlsWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation getSiteUrlsWithHttpInfo
     *
     * Site URLs from GSC
     *
     * @param  string $body API Key to be validated (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSiteUrls'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\DomainDataRetrievalSiteUrlsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSiteUrlsWithHttpInfo($body = null, string $contentType = self::contentTypes['getSiteUrls'][0])
    {
        $request = $this->getSiteUrlsRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\DomainDataRetrievalSiteUrlsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\DomainDataRetrievalSiteUrlsResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\DomainDataRetrievalSiteUrlsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\DomainDataRetrievalSiteUrlsResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\DomainDataRetrievalSiteUrlsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSiteUrlsAsync
     *
     * Site URLs from GSC
     *
     * @param  string $body API Key to be validated (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSiteUrls'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSiteUrlsAsync($body = null, string $contentType = self::contentTypes['getSiteUrls'][0])
    {
        return $this->getSiteUrlsAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSiteUrlsAsyncWithHttpInfo
     *
     * Site URLs from GSC
     *
     * @param  string $body API Key to be validated (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSiteUrls'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSiteUrlsAsyncWithHttpInfo($body = null, string $contentType = self::contentTypes['getSiteUrls'][0])
    {
        $returnType = '\OpenAPI\Client\Model\DomainDataRetrievalSiteUrlsResponse';
        $request = $this->getSiteUrlsRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getSiteUrls'
     *
     * @param  string $body API Key to be validated (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSiteUrls'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSiteUrlsRequest($body = null, string $contentType = self::contentTypes['getSiteUrls'][0])
    {



        $resourcePath = '/v1/analytics/site-urls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-URLSLAB-KEY');
        if ($apiKey !== null) {
            $headers['X-URLSLAB-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTopKeywords
     *
     * Keyword Analytics data from google search console
     *
     * @param  \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest $domain_data_retrieval_analytics_search_request Analytics request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTopKeywords'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse
     */
    public function getTopKeywords($domain_data_retrieval_analytics_search_request, string $contentType = self::contentTypes['getTopKeywords'][0])
    {
        list($response) = $this->getTopKeywordsWithHttpInfo($domain_data_retrieval_analytics_search_request, $contentType);
        return $response;
    }

    /**
     * Operation getTopKeywordsWithHttpInfo
     *
     * Keyword Analytics data from google search console
     *
     * @param  \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest $domain_data_retrieval_analytics_search_request Analytics request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTopKeywords'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTopKeywordsWithHttpInfo($domain_data_retrieval_analytics_search_request, string $contentType = self::contentTypes['getTopKeywords'][0])
    {
        $request = $this->getTopKeywordsRequest($domain_data_retrieval_analytics_search_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTopKeywordsAsync
     *
     * Keyword Analytics data from google search console
     *
     * @param  \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest $domain_data_retrieval_analytics_search_request Analytics request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTopKeywords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTopKeywordsAsync($domain_data_retrieval_analytics_search_request, string $contentType = self::contentTypes['getTopKeywords'][0])
    {
        return $this->getTopKeywordsAsyncWithHttpInfo($domain_data_retrieval_analytics_search_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTopKeywordsAsyncWithHttpInfo
     *
     * Keyword Analytics data from google search console
     *
     * @param  \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest $domain_data_retrieval_analytics_search_request Analytics request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTopKeywords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTopKeywordsAsyncWithHttpInfo($domain_data_retrieval_analytics_search_request, string $contentType = self::contentTypes['getTopKeywords'][0])
    {
        $returnType = '\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse';
        $request = $this->getTopKeywordsRequest($domain_data_retrieval_analytics_search_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTopKeywords'
     *
     * @param  \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest $domain_data_retrieval_analytics_search_request Analytics request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTopKeywords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTopKeywordsRequest($domain_data_retrieval_analytics_search_request, string $contentType = self::contentTypes['getTopKeywords'][0])
    {

        // verify the required parameter 'domain_data_retrieval_analytics_search_request' is set
        if ($domain_data_retrieval_analytics_search_request === null || (is_array($domain_data_retrieval_analytics_search_request) && count($domain_data_retrieval_analytics_search_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $domain_data_retrieval_analytics_search_request when calling getTopKeywords'
            );
        }


        $resourcePath = '/v1/analytics/keywords';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($domain_data_retrieval_analytics_search_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($domain_data_retrieval_analytics_search_request));
            } else {
                $httpBody = $domain_data_retrieval_analytics_search_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-URLSLAB-KEY');
        if ($apiKey !== null) {
            $headers['X-URLSLAB-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
