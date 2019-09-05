<?php
namespace SingleQuote\FileManager\Observers;

class FileObserver
{

    /**
     * Create observer
     *
     * @param object $config
     */
    public static function create(object $config)
    {
        try {
            cache()->tags([
                'laravel-filemanager:files',
                'laravel-filemanager:disk-size'
            ])->flush();
        } catch (\Exception $ex) {
        }
    }

    /**
     * Update observer
     *
     * @param object $config
     */
    public static function update(object $config)
    {
        try {
            cache()->tags([
                'laravel-filemanager:files',
                'laravel-filemanager:disk-size'
            ])->flush();
        } catch (\Exception $ex) {
        }
    }

    /**
     * Observer delete
     *
     * @param object $config
     */
    public static function delete(object $config)
    {
        try {
            cache()->tags([
                'laravel-filemanager:files',
                'laravel-filemanager:disk-size'
            ])->flush();
        } catch (\Exception $ex) {
        }
    }

    /**
     * Observer delete
     *
     * @param object $config
     */
    public static function shared(object $config)
    {
        try {
            cache()->tags([
                'laravel-filemanager:files',
                'laravel-filemanager:disk-size'
            ])->flush();
        } catch (\Exception $ex) {
        }
    }
}
