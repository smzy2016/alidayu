<?php
/**
 * TOP API: alibaba.aliqin.secret.miua.bind request
 * 
 * @author auto create
 * @since 1.0, 2016.05.10
 */
class AlibabaAliqinSecretMiuaBindRequest
{
	/** 
	 * 到期自动解绑时间（需要大于当前时间1分钟以上）
	 **/
	private $endDate;
	
	/** 
	 * 合作伙伴Key
	 **/
	private $partnerKey;
	
	/** 
	 * 扩展返回ID
	 **/
	private $partnerOutId;
	
	/** 
	 * 用户手机号码A。格式：11位的手机号码。
	 **/
	private $phoneNoA;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setPartnerKey($partnerKey)
	{
		$this->partnerKey = $partnerKey;
		$this->apiParas["partner_key"] = $partnerKey;
	}

	public function getPartnerKey()
	{
		return $this->partnerKey;
	}

	public function setPartnerOutId($partnerOutId)
	{
		$this->partnerOutId = $partnerOutId;
		$this->apiParas["partner_out_id"] = $partnerOutId;
	}

	public function getPartnerOutId()
	{
		return $this->partnerOutId;
	}

	public function setPhoneNoA($phoneNoA)
	{
		$this->phoneNoA = $phoneNoA;
		$this->apiParas["phone_no_a"] = $phoneNoA;
	}

	public function getPhoneNoA()
	{
		return $this->phoneNoA;
	}

	public function getApiMethodName()
	{
		return "alibaba.aliqin.secret.miua.bind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->partnerKey,"partnerKey");
		RequestCheckUtil::checkNotNull($this->phoneNoA,"phoneNoA");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
