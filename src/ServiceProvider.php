<?php

namespace Admin\Extend\AdminBlog;

use Admin\ExtendProvider;
use Admin\Core\ConfigExtensionProvider;
use Admin\Extend\AdminBlog\Extension\Config;
use Admin\Extend\AdminBlog\Extension\Install;
use Admin\Extend\AdminBlog\Extension\Navigator;
use Admin\Extend\AdminBlog\Extension\Uninstall;

/**
 * Class ServiceProvider
 * @package Admin\Extend\AdminBlog
 */
class ServiceProvider extends ExtendProvider
{
    /**
     * Extension ID name
     * @var string
     */
    public static string $name = "bfg/admin-blog";

    /**
     * Extension call slug
     * @var string
     */
    static string $slug = "bfg_admin_blog";

    /**
     * Extension description
     * @var string
     */
    public static string $description = "Blog Toolkit";

    /**
     * @var string
     */
    protected string $navigator = Navigator::class;

    /**
     * @var string
     */
    protected string $install = Install::class;

    /**
     * @var string
     */
    protected string $uninstall = Uninstall::class;

    /**
     * @var ConfigExtensionProvider|string
     */
    protected string|ConfigExtensionProvider $config = Config::class;
}

