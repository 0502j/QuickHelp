<?php

namespace QuickHelp\REST\Http;

use Exception;

class HttpClient
{
    public static function executeRequest(HttpRequest $httpRequest)
    {
        $response = null;
        $ch = curl_init();
        try {
            curl_setopt($ch, CURLOPT_URL, $httpRequest->getURL());
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $httpRequest->method);
            if (!empty($httpRequest->body)) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $httpRequest->body);
            }
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $responseBody = curl_exec($ch);
            if (!empty(curl_error($ch))) {
                throw new Exception(curl_error($ch), 400);
            }
            $responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE) ?: 200;
            $responseContentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE) ?: HttpContentTypes::JSON;
            $response = new HttpResponse($responseCode, $responseBody, $responseContentType);
        } finally {
            curl_close($ch);
        }
        return $response;
    }
}
