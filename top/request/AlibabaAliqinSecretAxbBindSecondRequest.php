<?php
/**
 * TOP API: alibaba.aliqin.secret.axb.bind.second request
 * 
 * @author auto create
 * @since 1.0, 2016.04.29
 */
class AlibabaAliqinSecretAxbBindSecondRequest
{
	/** 
	 * 到期自动解绑时间
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
	 * 商户号码B。支持手机号码、固定电话等。格式：固话不能有横线，必须是全数字。
	 **/
	private $secretNoB;
	
	/** 
	 * 绑定关系ID
	 **/
	private $subsId;
	
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

	public function setSecretNoB($secretNoB)
	{
		$this->secretNoB = $secretNoB;
		$this->apiParas["secret_no_b"] = $secretNoB;
	}

	public function getSecretNoB()
	{
		return $this->secretNoB;
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
		return "alibaba.aliqin.secret.axb.bind.second";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->partnerKey,"partnerKey");
		RequestCheckUtil::checkNotNull($this->secretNoB,"secretNoB");
		RequestCheckUtil::checkNotNull($this->subsId,"subsId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
