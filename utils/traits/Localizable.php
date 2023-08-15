<?php

trait Localizable
{
  public function __get($name)
  {
    if (in_array($name, $this->localizable)) {
      return $this->{$name . '_' . LANG};
    }
  }
}
