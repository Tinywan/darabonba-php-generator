<?php

// This file is auto-generated, don't edit it. Thanks.
namespace Tea\PHP\Tests;

use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Response;
use AlibabaCloud\Tea\Exception\TeaUnableRetryError;

/**
 * top annotation
 */
class Client {
    protected $_a;

    /**
     * Init Func
     */

    /**
     * testAPI
     * @return void
     * @throws \Exception
     */
    public function testAPI(){
        $_runtime = [];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry($_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                return null;
            }
            catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * testFunc
     * @return void
     * @throws \Exception
     */
    public static function testFunc(){
    }
}
