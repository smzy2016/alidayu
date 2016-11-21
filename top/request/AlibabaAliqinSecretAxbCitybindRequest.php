<?php
/**
 * TOP API: alibaba.aliqin.secret.axb.citybind request
 * 
 * @author auto create
 * @since 1.0, 2016.05.16
 */
class AlibabaAliqinSecretAxbCitybindRequest
{
	/** 
	 * 优先归属城市的号码
	 **/
	private $city;
	
	/** 
	 * 订购结束日期
	 **/
	private $endDate;
	
	/** 
	 * 是否要通话录音
	 **/
	private $needRecord;
	
	/** 
	 * 商户key
	 **/
	private $partnerKey;
	
	/** 
	 * 合作伙伴外部ID
	 **/
	private $partnerOutId;
	
	/** 
	 * 号码A
	 **/
	private $phoneNoA;
	
	/** 
	 * 号码B
	 **/
	private $phoneNoB;
	
	private $apiParas = array();
	
	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

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
		return "alibaba.aliqin.secret.axb.citybind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->city,"city");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->partnerKey,"partnerKey");
		RequestCheckUtil::checkNotNull($this->phoneNoA,"phoneNoA");
		RequestCheckUtil::checkNotNull($this->phoneNoB,"phoneNoB");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
