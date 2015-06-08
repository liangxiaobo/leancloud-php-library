<?php 
	/**
	* 统计api
	*/
	class AVStatistics extends AVRestClient
	{
		
		function __construct()
		{
			// if ($arge == "appinfo") {
			// 	$this->_requestUrl = "stats/".$arge;
			// }elseif ($arge == "appmetrics") {
				
			// }
			

			parent::__construct();
		}

		// 获取应用的版本信息
		function findAppInfo()
		{
			$this->_requestUrl = "stats/appinfo";
			$request = $this->request(array(
				'method' => 'GET',
				'requestUrl' => $this->_requestUrl
				));

	  		return $request;
		}

		function findAppmetrics($platform='iOS', $metrics='active_user', $start='', $end='')
		{
			$this->_requestUrl = "stats/appmetrics?platform=".$platform."&start=".$start."&end=".$end."&metrics=".$metrics;
			$request = $this->request(array(
				'method' => 'GET',
				'requestUrl' => $this->_requestUrl
				));

	  		return $request;
		}
	}
?>