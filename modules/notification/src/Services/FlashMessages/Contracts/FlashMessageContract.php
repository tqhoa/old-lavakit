<?php

namespace Inspire\Notification\Services\FlashMessages\Contracts;

/**
 * Interface FlashMessageContract
 * @package Inspire\Notification\Services\FlashMessages\Contracts
 * @copyright 2019 Inspire Group
 * @author hoatq <tqhoa8th@gmail.com
 */
interface FlashMessageContract
{
    /**
     * Creates a success level flash message
     *
     * @param string $message
     * @return mixed
     * @copyright 2019 LUCY VN
     * @author Pencii Team <hoatq@lucy.ne.jp>
     */
    public function success(string $message);
    
    /**
     * Creates a info level flash message
     *
     * @param string $message
     * @return mixed
     * @copyright 2019 LUCY VN
     * @author Pencii Team <hoatq@lucy.ne.jp>
     */
    public function info(string $message);
    
    /**
     * Creates a error level flash message
     *
     * @param string $message
     * @return mixed
     * @copyright 2019 LUCY VN
     * @author Pencii Team <hoatq@lucy.ne.jp>
     */
    public function error(string $message);
    
    /**
     * Creates a warning level flash message
     *
     * @param string $message
     * @return mixed
     * @copyright 2019 LUCY VN
     * @author Pencii Team <hoatq@lucy.ne.jp>
     */
    public function warning(string $message);
    
    /**
     * Set the title of a flash message
     *
     * @param string $title
     * @return mixed
     * @copyright 2019 LUCY VN
     * @author Pencii Team <hoatq@lucy.ne.jp>
     */
    public function title(string $title);
    
    /**
     * Creates a general flash message.
     *
     * @param string $message
     * @param string $level
     * @param string|null $title
     * @return mixed
     * @copyright 2019 LUCY VN
     * @author Pencii Team <hoatq@lucy.ne.jp>
     */
    public function flashMessage(string $message, string $level, string $title = null);
    
    /**
     * Add an "important" flash to the session.
     *
     * @return mixed
     * @copyright 2019 LUCY VN
     * @author Pencii Team <hoatq@lucy.ne.jp>
     */
    public function important();
}
