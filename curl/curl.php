<?php

class curl
{
	private $ch = null;
	private $url = null;
	public function __construct($url)
	{
		if($url)
		{
			//init curl request and set return value to string
			$this->ch = curl_init();
			curl_setopt($this->ch,CURLOPT_URL,$url);		//初始化的时候设置url
			curl_setopt($this->ch,CURLOPT_RETURNTRANSFER,1);     //直接以字符串的形式输出采集到的数据
		}
	}

	//destroy curl request when come to the end
	public function __destruct()
	{
		curl_close($this->ch);
	}

	//设置http头信息
	public function setHeader($isSetHeader)
	{
		if($isSetHeader)
		{
			curl_setopt($this->ch,CURLOPT_HEADER,$header);
		}else{
			curl_setopt($this->ch,CURLOPT_HEADER,0);
		}
		return $this;
	}

	//设置 ssl验证
	public function setSSLVerify($isVerify)
	{
		if(false == $isVerify)
		{
			//设置不验证证书
			curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, false); 
        	curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, false); 
		}else{
		
		}
		return $this;
	}
	
	
	//get some thing 
	public function httpGet()
	{
		$data = curl_exec($this->ch);
		return $data;
	}
	
	//post something
	public function httpPost()
	{
	
	}


}
$url = "https://www.baidu.com";
$ch = new curl($url);
echo $ch->setHeader(true)->setSSLVerify(false)->httpGet();
?>
