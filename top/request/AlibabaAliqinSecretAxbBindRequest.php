<?php
/**
 * TOP API: alibaba.aliqin.secret.axb.bind request
 * 
 * @author auto create
 * @since 1.0, 2016.04.25
 */
class AlibabaAliqinSecretAxbBindRequest
{
	/** 
	 * 到期自动解绑时间（需要大于当前时间1分钟以上）
	 **/
	private $endDate;
	
	/** 
	 * 是否需要录音
	 **/
	private $needRecord;
	
	/** 
	 * 合作伙伴Key
	 **/
	private $partnerKey;
	
	/** 
	 * 用户手机号码A。格式：11位的手机号码。
	 **/
	private $phoneNoA;
	
	/** 
	 * 商户号码B。支持手机号码、固定电话等。格式：固话不能有横线，必须都是数字。
	 **/
	private $phoneNoB;
	
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

	public function setNeedRecord($needRecord)
	{
		$this->needRecord = $needRecord;
		$this->apiParas["need_record"] = $needRecord;
	}

	public function getNeedRecord()
	{
		return $this->needRecord;
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

	public function setPhoneNoA($phoneNoA)
	{
		$this->phoneNoA = $phoneNoA;
		$this->apiParas["phone_no_a"] = $phoneNoA;
	}

	public function getPhoneNoA()
	{
		return $this->phoneNoA;
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

	public function getApiMethodName()
	{
		return "alibaba.aliqin.secret.axb.bind";
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
		RequestCheckUtil::checkMaxLength($this->phoneNoA,11,"phoneNoA");
		RequestCheckUtil::checkNotNull($this->phoneNoB,"phoneNoB");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
