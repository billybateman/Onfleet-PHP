<?php

/*
 * Onfleet API wrapper (CodeIgniter Library)
 *
 * Onfleet's application programming interface (API) provides the communication link
 * between your application and Onfleet API.
 *
 * @author   Billy Bateman <billy@codekush.com>
 * @license  http://www.opensource.org/licenses/bsd-license.php New BSD license
 * @link     https://github.com/billybateman/Onfleet-PHP
 * @date     2015-07-07
 */

class Onfleet {

    /*
     * API URL
     */
    const http_api_url = 'https://onfleet.com/api/v2/';	
   
    /**
     * Base settings
     */   
	private $_api_key = '';
	private $_api_name = '';
    protected $params = array();
    protected $url;
    
    /**
     * initial api construct
     * return null
     */
    public function __construct($config = array())
    {
        $this->_api_key = $config->item("api_key");
        $this->_api_name = $config->item("api_name");
    }    
		
    /**
     * List organizations
     *
     * @return object
    */
    public function organizations()
    {
        return $this->request('get', self::http_api_url.'organization', $this->_api_key);
    }
	
	/**
     * Organizations details
     *
	 * $params array
	 *
     * @return object
    */
    public function organization_details($params = array())
    {
        $id = $params['id'];
		
		return $this->request('get', self::http_api_url.'organizations/'.$id, $this->_api_key);
    }	
			
	/**
     * List administrators
     *
     * @return object
    */
    public function admins()
    {
        return $this->request('get', self::http_api_url.'admins', $this->_api_key);
    }
	
	/**
     * Admin Details
     *
	 * $params array
	 *
     * @return object
    */
    public function admin_details($params = array())
    {
        $id = $params['id'];
		
		return $this->request('get', self::http_api_url.'admins/'.$id, $this->_api_key);
    }
	
	/**
     * Create admin
     *
	 * $params array
	 *
     * @return object
    */
    public function admin_create($params = array())
    {
        return $this->request('post', self::http_api_url.'admins', $this->_api_key, $params);
    }
	
	/**
     * Update admin
     *
	 * $params array
	 *
     * @return object
    */
    public function admin_update($params = array(), $id)
    {		
		return $this->request('put', self::http_api_url.'admins/'.$id, $this->_api_key, $params);
    }

	/**
     * Delete admin
     *
	 * $params array
	 *
     * @return object
    */
    public function admin_delete($params = array())
    {
        $id = $params['id'];
		
		return $this->request('delete', self::http_api_url.'admins/'.$id, $this->_api_key);
    }

	/**
     * List workers
     *
     * @return object
    */
    public function workers($params = array())
    {
        return $this->request('get', self::http_api_url.'workers', $this->_api_key, $params);
    }
	
	/**
     * Worker Details
     *
	 * $params array
	 *
     * @return object
    */
    public function worker_details($params = array())
    {
        $id = $params['id'];
		
		return $this->request('get', self::http_api_url.'workers/'.$id."?analytics=true", $this->_api_key, $params);
    }
	
	/**
     * Create worker
     *
	 * $params array
	 *
     * @return object
    */
    public function worker_create($params = array())
    {
        return $this->request('post', self::http_api_url.'workers', $this->_api_key, $params);
    }
	
	/**
     * Update worker
     *
	 * $params array
	 *
     * @return object
    */
    public function worker_update($params = array())
    {
        $id = $params['id'];
		
		return $this->request('put', self::http_api_url.'workers/'.$id, $this->_api_key, $params);
    }

	/**
     * Delete worker
     *
	 * $params array
	 *
     * @return object
    */
    public function worker_delete($params = array())
    {
        $id = $params['id'];
		
		return $this->request('delete', self::http_api_url.'workers/'.$id, $this->_api_key);
    }
	
	/**
     * List teams
     *
     * @return object
    */
    public function teams()
    {
        return $this->request('get', self::http_api_url.'teams', $this->_api_key);
    }
	
	/**
     * Team Details
     *
	 * $params array
	 *
     * @return object
    */
    public function team_details($params = array())
    {
        $id = $params['id'];
		
		return $this->request('get', self::http_api_url.'teams/'.$id, $this->_api_key);
    }	
	
	
	/**
     * Destination Details
     *
	 * $params array
	 *
     * @return object
    */
    public function destination_details($params = array())
    {
        $id = $params['id'];
		
		return $this->request('get', self::http_api_url.'destinations/'.$id, $this->_api_key);
    }
	
	/**
     * Create destination
     *
	 * $params array
	 *
     * @return object
    */
    public function destination_create($params = array())
    {
        return $this->request('post', self::http_api_url.'destinations', $this->_api_key, $params);
    }	
	
	/**
     * Recipient Search By Name
     *
	 * $params array
	 *
     * @return object
    */
    public function recipient_search_name($params = array())
    {
        $name = $params['name'];
		
		return $this->request('get', self::http_api_url.'recipients/name/'.$name, $this->_api_key);
    }
	
	/**
     * Recipient Search By Phone
     *
	 * $params array
	 *
     * @return object
    */
    public function recipient_search_phone($params = array())
    {
        $phone = $params['phone'];
		
		return $this->request('get', self::http_api_url.'recipients/phone/'.$phone, $this->_api_key);
    }
	
	/**
     * Recipient details
     *
	 * $params array
	 *
     * @return object
    */
    public function recipient_details($params = array())
    {
        $id = $params['id'];
		
		return $this->request('get', self::http_api_url.'recipients/'.$id, $this->_api_key);
    }
	
	/**
     * Create recipient
     *
	 * $params array
	 *
     * @return object
    */
    public function recipient_create($params = array())
    {
        return $this->request('post', self::http_api_url.'recipients', $this->_api_key, $params);
    }
	
	/**
     * Update recipient
     *
	 * $params array
	 *
     * @return object
    */
    public function recipient_update($params = array())
    {
        $id = $params['id'];
		
		return $this->request('put', self::http_api_url.'recipients/'.$id, $this->_api_key, $params);
    }
	
	/**
     * List tasks
     *
	 * $params array
     * $params['state'] integer (0 = Unnasigned 1 = Assigned 2 = Active 3 = Completed)
     *
	 *
     * @return object
    */
    public function tasks($params = array())
    {
        return $this->request('get', self::http_api_url.'tasks', $this->_api_key, $params);
    }
	
	/**
     * Task details
     *
	 * $params array
	 *
     * @return object
    */
    public function task_details($params = array())
    {
        $id = $params['id'];
		
		return $this->request('get', self::http_api_url.'tasks/'.$id, $this->_api_key);
    }
	
	/**
     * Create task
     *
	 * $params array
	 *
     * @return object
    */
    public function task_create($params = array())
    {
        return $this->request('post', self::http_api_url.'tasks', $this->_api_key, $params);
    }
	
	/**
     * Update task
     *
	 * $params array
	 *
     * @return object
    */
    public function task_update($params = array())
    {
        $id = $params['id'];
		
		return $this->request('put', self::http_api_url.'tasks/'.$id, $this->_api_key, $params);
    }

	/**
     * Delete task
     *
	 * $params array
	 *
     * @return object
    */
    public function task_delete($params = array())
    {
        $id = $params['id'];
		
		return $this->request('delete', self::http_api_url.'tasks/'.$id, $this->_api_key);
    }
	
	/**
     * List webhooks
     *
     * @return object
    */
    public function webhooks()
    {
        return $this->request('get', self::http_api_url.'webhooks', $this->_api_key);
    }
	
	/**
     * Create webhook
     *
	 * $params array
	 * $params[url'] string
	 * $params['trigger'] integer
	 *
     * @return object
    */
    public function webhook_create($params = array())
    {
        return $this->request('post', self::http_api_url.'webhooks', $this->_api_key, $params);
    }

	/**
     * Delete webhook
     *
	 * $params array
	 *
     * @return object
    */
    public function webhook_delete($params = array())
    {
        $id = $params['id'];
		
		return $this->request('delete', self::http_api_url.'webhooks/'.$id, $this->_api_key);
    }

    /**
     * request data
     * Connect to API URL
     *
     * @param array
     * return string
     */
    protected function request($method, $url, $api_key, $params = array())
    {
        $params = json_encode($params); 
		//print_r($params);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		if($method == 'post'){
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		}
		if($method == 'put'){
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		}
		if($method == "delete"){
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		}
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERPWD, "$api_key:");
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		$output = curl_exec($ch);
		$info = curl_getinfo($ch);
		curl_close($ch);

		return $output;
    }
}