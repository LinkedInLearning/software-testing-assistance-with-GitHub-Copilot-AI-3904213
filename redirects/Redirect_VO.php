<?php

class Redirect_VO {
  private $source;
  private $destination;
  private $statusCode;

  public function __construct($source, $destination, $statusCode) {
    $this->source = $source;
    $this->destination = $destination;
    $this->statusCode = $statusCode;
  }

  public function getSource() {
    return $this->source;
  }

  public function getDestination() {
    return $this->destination;
  }

  public function getStatusCode() {
    return $this->statusCode;
  }

  public function setSource($source) {
    $this->source = $source;
  }

  public function setDestination($destination) {
    $this->destination = $destination;
  }

  public function setStatusCode($statusCode) {
    $this->statusCode = $statusCode;
  }
}