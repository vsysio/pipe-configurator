<?php

interface ProvidesBackendConfigurationSource {

    /**
     * Configuration source object should always be a singleton
     * First instantiation? Create new object and add it to a static class property
     * Subsequent instantiation? Return the object from a static class property
     *
     * @return ProvidesBackendConfigurationSource
     */

    public function getInstance() : ProvidesBackendConfigurationSource;

    /**
     * Return single value
     *
     * @param $key
     * @return mixed
     */
    public function getValue(String $key);

    /**
     * Return set of values
     * If $json = true then return JSON, otherwise return an associate array
     *
     * @param bool $json
     * @return ArrayObject | String
     */
    public function getValues($json = false);

    /**
     * Set the value of $key to $value
     *
     * @param String $key
     * @param $value
     * @return bool
     */

    public function setValue(String $key, $value) : bool;

}

