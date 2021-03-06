<?php
/**
 * CheddarGetter
 * @category CheddarGetter
 * @package CheddarGetter
 * @author Marc Guyer <marc@cheddargetter.com>
 */
/**
 * Adapter interface for requesting the CheddarGetter service
 * @category CheddarGetter
 * @package CheddarGetter
 * @author Christophe Coevoet <stof@notk.org>
 * @example example/example.php
 */

interface CheddarGetter_Client_AdapterInterface {

	/**
	 * Execute CheddarGetter API request
	 *
	 * @param string $url Url to the API action
     * @param string $username Username
     * @param string $password Password
	 * @param array|null $args HTTP post key value pairs
	 * @return string Body of the response from the CheddarGetter API
	 * @throws CheddarGetter_Client_Exception
	 */
	function request($url, $username, $password, array $args = null);

}
