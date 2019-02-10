<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017/6/2
 * Time: 下午7:40
 */

namespace PhpComp\Shm;

/**
 * Interface ShmInterface
 * @package PhpComp\Shm
 *
 * @property string $driver
 */
interface ShmInterface
{
    /**
     * open shared memory resource
     */
    public function open();

    /**
     * @param string $data
     * @return bool
     */
    public function write($data);

    /**
     * @param string $data
     * @return bool
     */
    public function prepend($data);

    /**
     * @param string $data
     * @return bool
     */
    public function append($data);

    /**
     * @param int $size
     * @return string
     */
    public function read($size = 0);

    /**
     * clear
     * @return bool
     */
    public function clear();

    /**
     * close
     * @return bool
     */
    public function close();

    /**
     * @return string
     */
    public function getDriver();

    /**
     * @return int
     */
    public function getKey();

    /**
     * @return int
     */
    public function getErrCode();

    /**
     * @return string
     */
    public function getErrMsg();

    /**
     * @return array
     */
    public function getError();

    /**
     * @return bool
     */
    public static function isSupported();
}
