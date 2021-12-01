<?php
/**
 * UpdateInventoryApi
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Direct Fulfillment Inventory Updates
 *
 * The Selling Partner API for Direct Fulfillment Inventory Updates provides programmatic access to a direct fulfillment vendor's inventory updates.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Popsicle\Amazon\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Popsicle\Amazon\ApiException;
use Popsicle\Amazon\Configuration;
use Popsicle\Amazon\HeaderSelector;
use Popsicle\Amazon\ObjectSerializer;

/**
 * UpdateInventoryApi Class Doc Comment
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateInventoryApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation submitInventoryUpdate
     *
     * @param  \Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest $body body (required)
     * @param  string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse
     */
    public function submitInventoryUpdate($body, $warehouse_id)
    {
        list($response) = $this->submitInventoryUpdateWithHttpInfo($body, $warehouse_id);
        return $response;
    }

    /**
     * Operation submitInventoryUpdateWithHttpInfo
     *
     * @param  \Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest $body (required)
     * @param  string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function submitInventoryUpdateWithHttpInfo($body, $warehouse_id)
    {
        $returnType = '\Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse';
        $request = $this->submitInventoryUpdateRequest($body, $warehouse_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation submitInventoryUpdateAsync
     *
     * 
     *
     * @param  \Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest $body (required)
     * @param  string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitInventoryUpdateAsync($body, $warehouse_id)
    {
        return $this->submitInventoryUpdateAsyncWithHttpInfo($body, $warehouse_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation submitInventoryUpdateAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest $body (required)
     * @param  string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitInventoryUpdateAsyncWithHttpInfo($body, $warehouse_id)
    {
        $returnType = '\Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse';
        $request = $this->submitInventoryUpdateRequest($body, $warehouse_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'submitInventoryUpdate'
     *
     * @param  \Popsicle\Amazon\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest $body (required)
     * @param  string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function submitInventoryUpdateRequest($body, $warehouse_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling submitInventoryUpdate'
            );
        }
        // verify the required parameter 'warehouse_id' is set
        if ($warehouse_id === null || (is_array($warehouse_id) && count($warehouse_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $warehouse_id when calling submitInventoryUpdate'
            );
        }

        $resourcePath = '/vendor/directFulfillment/inventory/v1/warehouses/{warehouseId}/items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($warehouse_id !== null) {
            $resourcePath = str_replace(
                '{' . 'warehouseId' . '}',
                ObjectSerializer::toPathValue($warehouse_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if (null != $formParams) {
            ksort($formParams);
        }
        if (null != $queryParams) {
            ksort($queryParams);
        }
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['user-agent'] = $this->config->getUserAgent();
        }

        $method = 'POST';
        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        $amazonHeader = \Popsicle\Amazon\Signature::calculateSignature(
            $this->config,
            str_replace('https://', '', $this->config->getHost()),
            $method,
            $resourcePath,
            $query,
            (string) $httpBody
        );
        $headers = array_merge(
            $headerParams,
            $headers,
            $amazonHeader
        );
        return new Request(
            $method,
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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