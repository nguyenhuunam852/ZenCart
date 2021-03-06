<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * ObtainTokenRequest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class ObtainTokenRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'client_id' => 'string',
        'client_secret' => 'string',
        'code' => 'string',
        'redirect_uri' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'client_id' => 'client_id',
        'client_secret' => 'client_secret',
        'code' => 'code',
        'redirect_uri' => 'redirect_uri'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'client_id' => 'setClientId',
        'client_secret' => 'setClientSecret',
        'code' => 'setCode',
        'redirect_uri' => 'setRedirectUri'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'client_id' => 'getClientId',
        'client_secret' => 'getClientSecret',
        'code' => 'getCode',
        'redirect_uri' => 'getRedirectUri'
    );
  
    /**
      * $client_id Your application's ID, available from the [application dashboard](https://connect.squareup.com/apps).
      * @var string
      */
    protected $client_id;
    /**
      * $client_secret Your application's secret, available from the [application dashboard](https://connect.squareup.com/apps).
      * @var string
      */
    protected $client_secret;
    /**
      * $code The authorization code to exchange.
      * @var string
      */
    protected $code;
    /**
      * $redirect_uri The redirect URL assigned in the [application dashboard](https://connect.squareup.com/apps).
      * @var string
      */
    protected $redirect_uri;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["client_id"])) {
              $this->client_id = $data["client_id"];
            } else {
              $this->client_id = null;
            }
            if (isset($data["client_secret"])) {
              $this->client_secret = $data["client_secret"];
            } else {
              $this->client_secret = null;
            }
            if (isset($data["code"])) {
              $this->code = $data["code"];
            } else {
              $this->code = null;
            }
            if (isset($data["redirect_uri"])) {
              $this->redirect_uri = $data["redirect_uri"];
            } else {
              $this->redirect_uri = null;
            }
        }
    }
    /**
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }
  
    /**
     * Sets client_id
     * @param string $client_id Your application's ID, available from the [application dashboard](https://connect.squareup.com/apps).
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
        return $this;
    }
    /**
     * Gets client_secret
     * @return string
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }
  
    /**
     * Sets client_secret
     * @param string $client_secret Your application's secret, available from the [application dashboard](https://connect.squareup.com/apps).
     * @return $this
     */
    public function setClientSecret($client_secret)
    {
        $this->client_secret = $client_secret;
        return $this;
    }
    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
  
    /**
     * Sets code
     * @param string $code The authorization code to exchange.
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Gets redirect_uri
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirect_uri;
    }
  
    /**
     * Sets redirect_uri
     * @param string $redirect_uri The redirect URL assigned in the [application dashboard](https://connect.squareup.com/apps).
     * @return $this
     */
    public function setRedirectUri($redirect_uri)
    {
        $this->redirect_uri = $redirect_uri;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
