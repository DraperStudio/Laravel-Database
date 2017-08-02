<?php


declare(strict_types=1);

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Traits\Repositories\Decorators\Cache;

trait SlugTrait
{
    public function findBySlug($slug, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['slug', $slug]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findBySlug($slug, $columns);

        return $this->put($key, $records);
    }

    public function requireBySlug($slug, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['slug', $slug]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->requireBySlug($slug, $columns);

        return $this->put($key, $records);
    }

    public function updateBySlug($slug, array $data)
    {
        $key = $this->buildCacheKey(['slug', $slug]);

        if ($this->getFromCache($key)) {
            $this->cache->forget($key);
        }

        $records = $this->repository->updateBySlug($slug, $data);

        return $this->put($key, $records);
    }

    public function deleteBySlug($slug)
    {
        $key = $this->buildCacheKey(['slug', $slug]);

        if ($this->getFromCache($key)) {
            $this->cache->forget($key);
        }

        $records = $this->repository->deleteBySlug($slug);

        return $this->put($key, $records);
    }
}
