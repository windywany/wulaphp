<?php
/**
 * for redis cache
 */
bind('get_redis_cache', function ($cache, $cfg) {
	if (!$cache) {
		$cache = \wulaphp\cache\RedisCache::getInstance($cfg);
	}

	return $cache;
}, 100, 2);
/**
 * for memcached cache
 */
bind('get_memcached_cache', function ($cache, $cfg) {
	if (!$cache) {
		$cache = \wulaphp\cache\MemcachedCache::getInstance($cfg);
	}

	return $cache;
}, 100, 2);