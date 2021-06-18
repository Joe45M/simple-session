<?php

namespace SimpleSession;

class SessionManager
{
    /**
     * @param $key string the key of the session element.
     *
     * @return false|mixed
     */
    public static function get($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : false;
    }

    /**
     * @param $key string the key used for the element.
     * @param $value mixed the value of the element.
     *
     * @return mixed
     */
    public static function set($key, $value)
    {
        return $_SESSION[$key] = $value;
    }

    /**
     * @param $key string the key of the element to check.
     * @return bool whether or not the key is set in the session.
     */
    public static function has($key)
    {
        return isset($_SESSION[$key]);
    }
}