<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Recording\AddOnResult;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string sid
 * @property string addOnResultSid
 * @property string accountSid
 * @property string label
 * @property string addOnSid
 * @property string addOnConfigurationSid
 * @property string contentType
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 * @property string referenceSid
 * @property array subresourceUris
 */
class PayloadInstance extends InstanceResource {
    /**
     * Initialize the PayloadInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid The SID of the Account that created the resource
     * @param string $referenceSid The SID of the recording to which the
     *                             AddOnResult resource that contains the payload
     *                             belongs
     * @param string $addOnResultSid The SID of the AddOnResult to which the
     *                               payload belongs
     * @param string $sid The unique string that identifies the resource to fetch
     * @return \Twilio\Rest\Api\V2010\Account\Recording\AddOnResult\PayloadInstance 
     */
    public function __construct(Version $version, array $payload, $accountSid, $referenceSid, $addOnResultSid, $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'sid' => Values::array_get($payload, 'sid'),
            'addOnResultSid' => Values::array_get($payload, 'add_on_result_sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'label' => Values::array_get($payload, 'label'),
            'addOnSid' => Values::array_get($payload, 'add_on_sid'),
            'addOnConfigurationSid' => Values::array_get($payload, 'add_on_configuration_sid'),
            'contentType' => Values::array_get($payload, 'content_type'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'referenceSid' => Values::array_get($payload, 'reference_sid'),
            'subresourceUris' => Values::array_get($payload, 'subresource_uris'),
        );

        $this->solution = array(
            'accountSid' => $accountSid,
            'referenceSid' => $referenceSid,
            'addOnResultSid' => $addOnResultSid,
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return \Twilio\Rest\Api\V2010\Account\Recording\AddOnResult\PayloadContext Context for this PayloadInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new PayloadContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['referenceSid'],
                $this->solution['addOnResultSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a PayloadInstance
     * 
     * @return PayloadInstance Fetched PayloadInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Deletes the PayloadInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->proxy()->delete();
    }

    /**
     * Magic getter to access properties
     * 
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Api.V2010.PayloadInstance ' . implode(' ', $context) . ']';
    }
}