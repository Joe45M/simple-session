<?php

use SimpleSession\SessionManager;

/**
 * @param $key mixed
 *
 * @return false|mixed
 */
function session_get($key)
{
    return SessionManager::get($key);
}

/**
 * @param $key
 * @param $value
 * @return mixed
 */
function session_set($key, $value)
{
    return SessionManager::set($key, $value);
}

/**
 * @param $key
 * @return bool
 */
function session_has($key)
{
    return SessionManager::has($key);
}

?>