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

  public function equivalent($redirect_vo) {
    return $this->source == $redirect_vo->getSource() && $this->destination == $redirect_vo->getDestination() && $this->statusCode == $redirect_vo->getStatusCode();
  }
}