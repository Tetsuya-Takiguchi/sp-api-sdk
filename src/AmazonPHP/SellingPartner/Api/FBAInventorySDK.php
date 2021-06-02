<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use AmazonPHP\SellingPartner\HttpFactory;
use AmazonPHP\SellingPartner\HttpSignatureHeaders;
use AmazonPHP\SellingPartner\ObjectSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
final class FBAInventorySDK
{
    private ClientInterface $client;

    private HttpFactory $httpFactory;

    private Configuration $configuration;

    public function __construct(ClientInterface $client, HttpFactory $requestFactory, Configuration $configuration)
    {
        $this->client = $client;
        $this->httpFactory = $requestFactory;
        $this->configuration = $configuration;
    }

    /**
     * Operation getInventorySummaries.
     *
     * @param string $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param string $granularity_id The granularity ID for the inventory aggregation level. (required)
     * @param array<array-key, string> $marketplace_ids The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param bool $details true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param null|\DateTime $start_date_time A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param array<array-key, string>|null $seller_skus A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param null|string $next_token String token returned in the response of your previous request. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getInventorySummaries(AccessToken $accessToken, string $region, string $granularity_type, string $granularity_id, array $marketplace_ids, bool $details = false, \DateTime $start_date_time = null, array $seller_skus = null, string $next_token = null) : \AmazonPHP\SellingPartner\Model\FBAInventory\GetInventorySummariesResponse
    {
        [$response] = $this->getInventorySummariesWithHttpInfo($accessToken, $region, $granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token);

        return $response;
    }

    /**
     * Create request for operation 'getInventorySummaries'.
     *
     * @param string $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param string $granularity_id The granularity ID for the inventory aggregation level. (required)
     * @param array<array-key, string> $marketplace_ids The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param bool $details true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param null|\DateTime $start_date_time A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param array<array-key, string>|null $seller_skus A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param null|string $next_token String token returned in the response of your previous request. (optional)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getInventorySummariesRequest(AccessToken $accessToken, string $region, string $granularity_type, string $granularity_id, array $marketplace_ids, bool $details = false, \DateTime $start_date_time = null, array $seller_skus = null, string $next_token = null) : RequestInterface
    {
        // verify the required parameter 'granularity_type' is set
        if ($granularity_type === null || (\is_array($granularity_type) && \count($granularity_type) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $granularity_type when calling getInventorySummaries'
            );
        }
        // verify the required parameter 'granularity_id' is set
        if ($granularity_id === null || (\is_array($granularity_id) && \count($granularity_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $granularity_id when calling getInventorySummaries'
            );
        }
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (\is_array($marketplace_ids) && \count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling getInventorySummaries'
            );
        }

        if (\count($marketplace_ids) > 1) {
            throw new InvalidArgumentException('invalid value for "$marketplace_ids" when calling FbaInventoryApi.getInventorySummaries, number of items must be less than or equal to 1.');
        }

        if ($seller_skus !== null && \count($seller_skus) > 50) {
            throw new InvalidArgumentException('invalid value for "$seller_skus" when calling FbaInventoryApi.getInventorySummaries, number of items must be less than or equal to 50.');
        }

        $resourcePath = '/fba/inventory/v1/summaries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($details)) {
            $details = ObjectSerializer::serializeCollection($details, '', true);
        }

        if ($details !== null) {
            $queryParams['details'] = $details;
        }
        // query params
        if (\is_array($granularity_type)) {
            $granularity_type = ObjectSerializer::serializeCollection($granularity_type, '', true);
        }

        if ($granularity_type !== null) {
            $queryParams['granularityType'] = $granularity_type;
        }
        // query params
        if (\is_array($granularity_id)) {
            $granularity_id = ObjectSerializer::serializeCollection($granularity_id, '', true);
        }

        if ($granularity_id !== null) {
            $queryParams['granularityId'] = $granularity_id;
        }
        // query params
        if (\is_array($start_date_time)) {
            $start_date_time = ObjectSerializer::serializeCollection($start_date_time, '', true);
        }

        if ($start_date_time !== null) {
            $queryParams['startDateTime'] = $start_date_time;
        }
        // query params
        if (\is_array($seller_skus)) {
            $seller_skus = ObjectSerializer::serializeCollection($seller_skus, 'form', true);
        }

        if ($seller_skus !== null) {
            $queryParams['sellerSkus'] = $seller_skus;
        }
        // query params
        if (\is_array($next_token)) {
            $next_token = ObjectSerializer::serializeCollection($next_token, '', true);
        }

        if ($next_token !== null) {
            $queryParams['nextToken'] = $next_token;
        }
        // query params
        if (\is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }

        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = $marketplace_ids;
        }

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'GET',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];

                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['Content-Type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forIAMUser(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

    /**
     * Operation getInventorySummariesWithHttpInfo.
     *
     * @param string $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param string $granularity_id The granularity ID for the inventory aggregation level. (required)
     * @param array<array-key, string> $marketplace_ids The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param bool $details true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param null|\DateTime $start_date_time A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param array<array-key, string>|null $seller_skus A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param null|string $next_token String token returned in the response of your previous request. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return array<array-key, \AmazonPHP\SellingPartner\Model\FBAInventory\GetInventorySummariesResponse>
     */
    private function getInventorySummariesWithHttpInfo(AccessToken $accessToken, string $region, string $granularity_type, string $granularity_id, array $marketplace_ids, bool $details = false, \DateTime $start_date_time = null, array $seller_skus = null, string $next_token = null) : array
    {
        $request = $this->getInventorySummariesRequest($accessToken, $region, $granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token);

        try {
            try {
                $response = $this->client->sendRequest($request);
            } catch (ClientExceptionInterface $e) {
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
                    \sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch ($statusCode) {
                case 200:
                case 400:
                case 403:
                case 404:
                case 429:
                case 500:
                case 503:
                    $content = (string) $response->getBody()->getContents();

                    return [
                        ObjectSerializer::deserialize(
                            $this->configuration,
                            $content,
                            \AmazonPHP\SellingPartner\Model\FBAInventory\GetInventorySummariesResponse::class,
                            []
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = \AmazonPHP\SellingPartner\Model\FBAInventory\GetInventorySummariesResponse::class;
            $content = (string) $response->getBody()->getContents();

            return [
                ObjectSerializer::deserialize(
                    $this->configuration,
                    $content,
                    $returnType,
                    []
                ),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                case 400:
                case 403:
                case 404:
                case 429:
                case 500:
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $this->configuration,
                        $e->getResponseBody(),
                        \AmazonPHP\SellingPartner\Model\FBAInventory\GetInventorySummariesResponse::class,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);

                    break;
            }

            throw $e;
        }
    }
}
