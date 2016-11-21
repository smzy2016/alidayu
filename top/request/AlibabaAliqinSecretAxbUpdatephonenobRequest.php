<?php
/**
 * TOP API: alibaba.aliqin.secret.axb.updatephonenob request
 * 
 * @author auto create
 * @since 1.0, 2016.05.09
 */
class AlibabaAliqinSecretAxbUpdatephonenobRequest
{
	/** 
	 * 商户Key
	 **/
	private $partnerKey;
	
	/** 
	 * 手机号码
	 **/
	private $phoneNoB;
	
	/** 
	 * 之前的订单号
	 **/
	private $subid;
	
	private $apiParas = array();
	
	public function setPartnerKey($partnerKey)
	{
		$this->partnerKey = $partnerKey;
		$this->apiParas["partner_key"] = $partnerKey;
	}

	public function getPartnerKey()
	{
		return $this->partnerKey;
	}

	public function setPhoneNoB($phoneNoB)
	{
		$this->phoneNoB = $phoneNoB;
		$this->apiParas["phone_no_b"] = $phoneNoB;
	}

	public function getPhoneNoB()
	{
		return $this->phoneNoB;
	}

	public function setSubid($subid)
	{
		$this->subid = $subid;
		$this->apiParas["subid"] = $subid;
	}

	public function getSubid()
	{
		return $this->subid;
	}

	public function getApiMethodName()
	{
		return "alibaba.aliqin.secret.axb.updatephonenob";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->partnerKey,"partnerKey");
		RequestCheckUtil::checkNotNull($this->phoneNoB,"phoneNoB");
		RequestCheckUtil::checkNotNull($this->subid,"subid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
