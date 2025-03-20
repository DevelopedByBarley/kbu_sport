<?php

namespace Core;

class Request
{

  public static function all()
  {
    return $_POST;
  }

  public static function key($key)
  {
    return $_POST[$key];
  }

  public static function unset($key)
  {
    unset($_POST[$key]);
  }


  public static function validate($rules, $post = null)
  {
    $post = $post ? $post : $_POST;
    return Validator::validate($post, $rules);
  }

  public static function setNull($key)
  {
    if (!isset($_POST[$key]) || empty($_POST[$key])) {
      $_POST[$key] = null;
    }
  }
}
