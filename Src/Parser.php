<?php

namespace Src;

class Parser
{
    private static $errorsCodes = [
        "CURLE_UNSUPPORTED_PROTOCOL",
        "CURLE_FAILED_INIT",
        "CURLE_URL_MALFORMAT",
        "CURLE_URL_MALFORMAT_USER",
        "CURLE_COULDNT_RESOLVE_PROXY",
        "CURLE_COULDNT_RESOLVE_HOST",
        "CURLE_COULDNT_CONNECT",
        "CURLE_FTP_WEIRD_SERVER_REPLY",
        "CURLE_REMOTE_ACCESS_DENIED",
        "CURLE_FTP_WEIRD_PASS_REPLY",
        "CURLE_FTP_WEIRD_PASV_REPLY",
        "CURLE_FTP_WEIRD_227_FORMAT",
        "CURLE_FTP_CANT_GET_HOST",
        "CURLE_FTP_COULDNT_SET_TYPE",
        "CURLE_PARTIAL_FILE",
        "CURLE_FTP_COULDNT_RETR_FILE",
        "CURLE_QUOTE_ERROR",
        "CURLE_HTTP_RETURNED_ERROR",
        "CURLE_WRITE_ERROR",
        "CURLE_UPLOAD_FAILED",
        "CURLE_READ_ERROR",
        "CURLE_OUT_OF_MEMORY",
        "CURLE_OPERATION_TIMEDOUT",
        "CURLE_FTP_PORT_FAILED",
        "CURLE_FTP_COULDNT_USE_REST",
        "CURLE_RANGE_ERROR",
        "CURLE_HTTP_POST_ERROR",
        "CURLE_SSL_CONNECT_ERROR",
        "CURLE_BAD_DOWNLOAD_RESUME",
        "CURLE_FILE_COULDNT_READ_FILE",
        "CURLE_LDAP_CANNOT_BIND",
        "CURLE_LDAP_SEARCH_FAILED",
        "CURLE_FUNCTION_NOT_FOUND",
        "CURLE_ABORTED_BY_CALLBACK",
        "CURLE_BAD_FUNCTION_ARGUMENT",
        "CURLE_INTERFACE_FAILED",
        "CURLE_TOO_MANY_REDIRECTS",
        "CURLE_UNKNOWN_TELNET_OPTION",
        "CURLE_TELNET_OPTION_SYNTAX",
        "CURLE_PEER_FAILED_VERIFICATION",
        "CURLE_GOT_NOTHING",
        "CURLE_SSL_ENGINE_NOTFOUND",
        "CURLE_SSL_ENGINE_SETFAILED",
        "CURLE_SEND_ERROR",
        "CURLE_RECV_ERROR",
        "CURLE_SSL_CERTPROBLEM",
        "CURLE_SSL_CIPHER",
        "CURLE_SSL_CACERT",
        "CURLE_BAD_CONTENT_ENCODING",
        "CURLE_LDAP_INVALID_URL",
        "CURLE_FILESIZE_EXCEEDED",
        "CURLE_USE_SSL_FAILED",
        "CURLE_SEND_FAIL_REWIND",
        "CURLE_SSL_ENGINE_INITFAILED",
        "CURLE_LOGIN_DENIED",
        "CURLE_TFTP_NOTFOUND",
        "CURLE_TFTP_PERM",
        "CURLE_REMOTE_DISK_FULL",
        "CURLE_TFTP_ILLEGAL",
        "CURLE_TFTP_UNKNOWNID",
        "CURLE_REMOTE_FILE_EXISTS",
        "CURLE_TFTP_NOSUCHUSER",
        "CURLE_CONV_FAILED",
        "CURLE_CONV_REQD",
        "CURLE_SSL_CACERT_BADFILE",
        "CURLE_REMOTE_FILE_NOT_FOUND",
        "CURLE_SSH",
        "CURLE_SSL_SHUTDOWN_FAILED",
        "CURLE_AGAIN",
        "CURLE_SSL_CRL_BADFILE",
        "CURLE_SSL_ISSUER_ERROR",
        "CURLE_FTP_PRET_FAILED",
        "CURLE_FTP_PRET_FAILED",
        "CURLE_RTSP_CSEQ_ERROR",
        "CURLE_RTSP_SESSION_ERROR",
        "CURLE_FTP_BAD_FILE_LIST",
        "CURLE_CHUNK_FAILED"
    ];

    private static $curlResource = false;
    // Host: cartoonsub.com
    // Connection: keep-alive
    // sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96", "Google Chrome";v="96"
    // sec-ch-ua-mobile: ?0
    // sec-ch-ua-platform: "Windows"
    // DNT: 1
    // Upgrade-Insecure-Requests: 1
    // User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36
    // Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
    // Sec-Fetch-Site: none
    // Sec-Fetch-Mode: navigate
    // Sec-Fetch-User: ?1
    // Sec-Fetch-Dest: document
    // Accept-Encoding: gzip, deflate, br
    // Accept-Language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7
    // Cookie: PHPSESSID=390d02eac8ad809411907d360b734419; _ym_uid=1612370314248293594; _ga=GA1.2.1674183073.1612370314; _ym_d=1635591906

    public function curlSimpleInit()
    {
        self::$curlResource = curl_init();
        $startHeaders = [
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36',
            'Accept'     => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
            'Connection' => 'keep-alive',
        ];

        $headers = [];
        foreach ($startHeaders as $key => $value) {
            $headers[] = sprintf('%s: %s', $key, $value);
        }
        
        curl_setopt_array(
            self::$curlResource,
            [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_AUTOREFERER    => true,
                CURLOPT_TIMEOUT        => 120,
                CURLOPT_HTTPHEADER     => $headers,
            ]
        );

        return self::$curlResource;
    }

    public function getPage(string $url, array $params = []): array
    {
        $results = [];
        if (empty($url)) {
            $results = [
                'errors' => 'Не передан url адрес',
            ];
            return $results;
        }

        $curl = $this->curlSimpleInit();
        curl_setopt_array(
            $curl,
            [
                CURLOPT_URL            => $url,
                CURLOPT_HEADER         => $params['headers'] ?? false,
                CURLOPT_FOLLOWLOCATION => $params['follow'] ?? true,
            ]
        );

        $content = curl_exec($curl);
        $info = curl_getinfo($curl);
        $results = [
            'content' => $content,
            'info'    => $info,
        ];
        return $results;
        $sUserAgent = !empty($arParams["useragent"]) ? $arParams["useragent"] : "Mozilla/5.0 (Windows NT 6.3; W…) Gecko/20100101 Firefox/57.0";
        $iTimeout = !empty($arParams["timeout"]) ? $arParams["timeout"] : 5;
        $iConnectTimeout = !empty($arParams["connecttimeout"]) ? $arParams["connecttimeout"] : 5;
        $bHead = !empty($arParams["head"]) ? $arParams["head"] : false;
        $sCookieFile = !empty($arParams["cookie"]["file"]) ? $arParams["cookie"]["file"] : false;
        $bCookieSession = !empty($arParams["cookie"]["session"]) ? $arParams["cookie"]["session"] : false;
        $sProxyIp = !empty($arParams["proxy"]["ip"]) ? $arParams["proxy"]["ip"] : false;
        $iProxyPort = !empty($arParams["proxy"]["port"]) ? $arParams["proxy"]["port"] : false;
        $sProxyType = !empty($arParams["proxy"]["type"]) ? $arParams["proxy"]["type"] : false;
        $arHeaders = !empty($arParams["headers"]) ? $arParams["headers"] : false;
        $sPost = !empty($arParams["post"]) ? $arParams["post"] : false;

        if ($sCookieFile) {
            file_put_contents(__DIR__ . "/" . $sCookieFile, "");
        }

        $rCh = curl_init();
        curl_setopt($rCh, CURLOPT_URL, $url);
        curl_setopt($rCh, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($rCh, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($rCh, CURLOPT_USERAGENT, $sUserAgent);
        curl_setopt($rCh, CURLOPT_TIMEOUT, $iTimeout);
        curl_setopt($rCh, CURLOPT_CONNECTTIMEOUT, $iConnectTimeout);

        if ($bHead) {
            curl_setopt($rCh, CURLOPT_HEADER, true);
            curl_setopt($rCh, CURLOPT_NOBODY, true);
        }

        if (strpos($url, "https") !== false) {
            curl_setopt($rCh, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($rCh, CURLOPT_SSL_VERIFYPEER, true);
        }

        if ($sCookieFile) {
            curl_setopt($rCh, CURLOPT_COOKIEJAR, __DIR__ . "/" . $sCookieFile);
            curl_setopt($rCh, CURLOPT_COOKIEFILE, __DIR__ . "/" . $sCookieFile);

            if ($bCookieSession) {
                curl_setopt($rCh, CURLOPT_COOKIESESSION, true);
            }
        }

        if ($sProxyIp && $iProxyPort && $sProxyType) {
            curl_setopt($rCh, CURLOPT_PROXY, $sProxyIp . ":" . $iProxyPort);
            curl_setopt($rCh, CURLOPT_PROXYTYPE, $sProxyType);
        }

        if ($arHeaders) {
            curl_setopt($rCh, CURLOPT_HTTPHEADER, $arHeaders);
        }

        if ($sPost) {
            curl_setopt($rCh, CURLOPT_POSTFIELDS, $sPost);
        }

        curl_setopt($rCh, CURLINFO_HEADER_OUT, true);

        $sContent = curl_exec($rCh);
        $arInfo = curl_getinfo($rCh);

        $arError = false;

        if ($sContent === false) {
            $arData = false;

            $arError["message"] = curl_error($rCh);
            $arError["code"] = self::$errorsCodes[curl_errno($rCh)];
        } else {
            $arData["content"] = $sContent;
            $arData["info"] = $arInfo;
        }

        curl_close($rCh);

        return [
            "data" => $arData,
            "error" => $arError
        ];
    }

    public function getContent(string $url): string
    {
        return '';
    }
}