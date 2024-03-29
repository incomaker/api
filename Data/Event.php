<?php

namespace Incomaker\Api\Data;

/**
 * Description of Event
 */
class Event {

	private $permId;
	private $sessionId;
	private $campaignId;
	private $clientEventId;
	private $clientContactId;
	private $relatedId;
	private $eventType;
	private $name;
	private $time;
	private $email;
	private $customField = array();

	/**
	 * Create generic object
	 * @param mixed $name event name
	 * @param mixed $permId //cookie incomaker_p
	 * @param mixed $time Time of the event. Optional.
	 */
	function __construct($name, $permId = null, $time = null) {
		$this->name = $name;
		$this->permId = $permId;
		$this->time = $time;
	}

	public function getData() {
		$arrayData = array();

		if (!is_null($this->permId)) {
			$arrayData["permId"] = $this->permId;
		}
		if (!is_null($this->time)) {
			$arrayData["time"] = $this->time;
		}
		if (!is_null($this->campaignId)) {
			$arrayData["campaignId"] = $this->campaignId;
		}
		if (!is_null($this->clientEventId)) {
			$arrayData["clientEventId"] = strval($this->clientEventId);
		}
		if (!is_null($this->clientContactId)) {
			$arrayData["clientContactId"] = strval($this->clientContactId);
		}
		if (!is_null($this->relatedId)) {
			$arrayData["relatedId"] = strval($this->relatedId);
		}
		if (!is_null($this->eventType)) {
			$arrayData["eventType"] = $this->eventType;
		}
		if (!is_null($this->name)) {
			$arrayData["name"] = $this->name;
		}
		if (!is_null($this->sessionId)) {
			$arrayData["sessionId"] = strval($this->sessionId);
		}
		if (!is_null($this->email)) {
			$arrayData["email"] = strval($this->email);
		}
		if (!empty($this->customField)) {
			$arrayData["customField"] = $this->customField;
		}
		return json_encode($arrayData);
	}

	/**
	 * Add or edit new custom field
	 *
	 * @param $index
	 * @param $value
	 */
	public function addCustomField($index, $value) {
		$this->customField[$index] = $value;
	}

	/**
	 * Unset custom field
	 *
	 * @param $index
	 */
	public function deleteCustomField($index) {
		unset($this->customField[$index]);
	}

	function getPermId() {
		return $this->permId;
	}

	function getSessionId() {
		return $this->sessionId;
	}

	function getCampaignId() {
		return $this->campaignId;
	}

	function getClientEventId() {
		return $this->clientEventId;
	}

	function getClientContactId() {
		return $this->clientContactId;
	}

	function getRelatedId() {
		return $this->relatedId;
	}

	function getEventType() {
		return $this->eventType;
	}

	function getName() {
		return $this->name;
	}

	function getTime() {
		return $this->time;
	}

	function getEmail() {
		return $this->email;
	}

	function getCustomField() {
		return $this->customField;
	}

	function setPermId($permId) {
		$this->permId = $permId;
	}

	function setSessionId($sessionId) {
		$this->sessionId = $sessionId;
	}

	function setCampaignId($campaignId) {
		$this->campaignId = $campaignId;
	}

	function setClientEventId($clientEventId) {
		$this->clientEventId = $clientEventId;
	}

	function setClientContactId($clientContactId) {
		$this->clientContactId = $clientContactId;
	}

	function setRelatedId($relatedId) {
		$this->relatedId = $relatedId;
	}

	function setEventType($eventType) {
		$this->eventType = $eventType;
	}

	function setName($name) {
		$this->name = $name;
	}

	function setTime($time) {
		$this->time = $time;
	}

	function setEmail($email) {
		$this->email = $email;
	}

	function setCustomField($customField) {
		$this->customField = $customField;
	}

}
