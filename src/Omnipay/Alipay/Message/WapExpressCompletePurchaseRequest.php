<?php
/**
 * Created by sqiu.
 * CreateTime: 14-1-2 下午11:29
 *
 */
namespace Omnipay\Alipay\Message;

use DOMDocument;
use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Common\Message\AbstractRequest;

class WapExpressCompletePurchaseRequest extends ExpressCompletePurchaseRequest
{

    protected $endpoint = 'http://notify.alipay.com/trade/notify_query.do?';

    protected $endpoint_https = 'https://mapi.alipay.com/gateway.do?service=notify_verify&';

    /**
     * Get the raw data array for this message. The format of this varies from gateway to
     * gateway, but will usually be either an associative array, or a SimpleXMLElement.
     *
     * @return mixed
     */
    public function getData()
    {
        $this->validate('request_params', 'partner', 'ca_cert_path', 'sign_type', 'key');
        $this->validateRequestParams('out_trade_no', 'trade_no');
        return $this->getParameters();
    }


}
