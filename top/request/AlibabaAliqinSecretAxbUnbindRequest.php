<?php
/**
 * TOP API: alibaba.aliqin.secret.axb.unbind request
 * 
 * @author auto create
 * @since 1.0, 2015.04.10
 */
class AlibabaAliqinSecretAxbUnbindRequest
{
	/** 
	 * 合作伙伴Key
	 **/
	private $partnerKey;
	
	/** 
	 * 绑定关系ID
	 **/
	private $subsId;
	
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

	public function setSubsId($subsId)
	{
		$this->subsId = $subsId;
		$this->apiParas["subs_id"] = $subsId;
	}

	public function getSubsId()
	{
		return $this->subsId;
	}

	public function getApiMethodName()
	{
		return "alibaba.aliqin.secret.axb.unbind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->partnerKey,"partnerKey");
		RequestCheckUtil::checkNotNull($this->subsId,"subsId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
