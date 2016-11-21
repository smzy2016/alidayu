<?php
/**
 * TOP API: alibaba.aliqin.secret.miua.citybind request
 * 
 * @author auto create
 * @since 1.0, 2016.05.09
 */
class AlibabaAliqinSecretMiuaCitybindRequest
{
	/** 
	 * 优先选择的城市
	 **/
	private $city;
	
	/** 
	 * 订单结束日期
	 **/
	private $endDate;
	
	/** 
	 * 商户Key
	 **/
	private $partnerKey;
	
	/** 
	 * 标示
	 **/
	private $partnerOutId;
	
	/** 
	 * 真实号码
	 **/
	private $userPhoneNo;
	
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

	public function setUserPhoneNo($userPhoneNo)
	{
		$this->userPhoneNo = $userPhoneNo;
		$this->apiParas["user_phone_no"] = $userPhoneNo;
	}

	public function getUserPhoneNo()
	{
		return $this->userPhoneNo;
	}

	public function getApiMethodName()
	{
		return "alibaba.aliqin.secret.miua.citybind";
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
		RequestCheckUtil::checkNotNull($this->userPhoneNo,"userPhoneNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
