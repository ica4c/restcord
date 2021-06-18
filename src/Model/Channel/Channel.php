<?php

/*
 * Copyright 2017 Aaron Scherer
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE
 *
 * @package     restcord/restcord
 * @copyright   Aaron Scherer 2017
 * @license     MIT
 */

namespace RestCord\Model\Channel;

/**
 * Channel Model
 */
class Channel {

	/**
	 * application id of the group DM creator if it is bot-created
	 *
	 * @var int|null
	 */
	public $application_id;

	/**
	 * the bitrate (in bits) of the voice channel
	 *
	 * @var int|null
	 */
	public $bitrate;

	/**
	 * default duration for newly created threads, in minutes, to automatically archive the thread after recent activity, can be set to: 60, 1440, 4320, 10080
	 *
	 * @var int|null
	 */
	public $default_auto_archive_duration;

	/**
	 * the id of the guild (may be missing for some channel objects received over gateway guild dispatches)
	 *
	 * @var int|null
	 */
	public $guild_id;

	/**
	 * icon hash
	 *
	 * @var string|null
	 */
	public $icon;

	/**
	 * the id of this channel
	 *
	 * @var int
	 */
	public $id;

	/**
	 * the id of the last message sent in this channel (may not point to an existing or valid message)
	 *
	 * @var int|null
	 */
	public $last_message_id;

	/**
	 * when the last pinned message was pinned. This may be null in events such as GUILD_CREATE when a message is not pinned.
	 *
	 * @var \DateTimeImmutable|null
	 */
	public $last_pin_timestamp;

	/**
	 * thread member object for the current user, if they have joined the thread, only included on certain API endpoints
	 *
	 * @var array|null
	 */
	public $member;

	/**
	 * an approximate count of users in a thread, stops counting at 50
	 *
	 * @var int|null
	 */
	public $member_count;

	/**
	 * an approximate count of messages in a thread, stops counting at 50
	 *
	 * @var int|null
	 */
	public $message_count;

	/**
	 * the name of the channel (1-100 characters)
	 *
	 * @var string|null
	 */
	public $name;

	/**
	 * whether the channel is nsfw
	 *
	 * @var bool|null
	 */
	public $nsfw = false;

	/**
	 * id of the creator of the group DM or thread
	 *
	 * @var int|null
	 */
	public $owner_id;

	/**
	 * for guild channels: id of the parent category for a channel (each parent category can contain up to 50 channels), for threads: id of the text channel this thread was created
	 *
	 * @var int|null
	 */
	public $parent_id;

	/**
	 * explicit permission overwrites for members and roles
	 *
	 * @var array|null
	 */
	public $permission_overwrites;

	/**
	 * sorting position of the channel
	 *
	 * @var int|null
	 */
	public $position;

	/**
	 * amount of seconds a user has to wait before sending another message (0-21600); bots, as well as users with the permission manage_messages or manage_channel, are unaffected
	 *
	 * @var int|null
	 */
	public $rate_limit_per_user;

	/**
	 * the recipients of the DM
	 *
	 * @var array|null
	 */
	public $recipients;

	/**
	 * voice region id for the voice channel, automatic when set to null
	 *
	 * @var string|null
	 */
	public $rtc_region;

	/**
	 * thread-specific fields not needed by other channels
	 *
	 * @var array|null
	 */
	public $thread_metadata;

	/**
	 * the channel topic (0-1024 characters)
	 *
	 * @var string|null
	 */
	public $topic;

	/**
	 * the type of channel
	 *
	 * @var int
	 */
	public $type;

	/**
	 * the user limit of the voice channel
	 *
	 * @var int|null
	 */
	public $user_limit;

	/**
	 * the camera video quality mode of the voice channel, 1 when not present
	 *
	 * @var int|null
	 */
	public $video_quality_mode;

	/**
	 * @param array $content
	 */
	public function __construct(array $content = null) {
		if (null === $content) {
		    return;
		}
		                    
		foreach ($content as $key => $value) {
		    $key = lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $key))));
		    if (property_exists($this, $key)) {
		        $this->{$key} = $value;
		    }
		}
	}
}