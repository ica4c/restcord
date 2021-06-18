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

namespace RestCord\Interfaces;

/**
 * Guild Intellisense Helper
 */
interface Guild {

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#add-guild-member
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'user.id' => 'snowflake', 'access_token' => 'string', 'nick' => 'string', 'roles' => 'array', 'mute' => 'boolean', 'deaf' => 'boolean']
	 * @return \RestCord\Model\Guild\GuildMember Returns a 201 Created with the guild member as the body, or 204 No Content if the user is already a member of the guild.
	 */
	public function addGuildMember(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#add-guild-member-role
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'user.id' => 'snowflake', 'role.id' => 'string']
	 * @return array Returns a 204 empty response on success.
	 */
	public function addGuildMemberRole(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#begin-guild-prune
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'days' => 'integer', 'compute_prune_count' => 'boolean', 'include_roles' => 'array', 'reason?' => 'string']
	 * @return array Returns an object with one 'pruned' key indicating the number of members that were removed in the prune operation.
	 */
	public function beginGuildPrune(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#create-guild
	 *
	 * @param array $options ['name' => 'string', 'region?' => 'string', 'icon?' => 'image data', 'verification_level?' => 'integer', 'default_message_notifications?' => 'integer', 'explicit_content_filter?' => 'integer', 'roles?' => 'array', 'channels?' => 'array', 'afk_channel_id?' => 'snowflake', 'afk_timeout?' => 'integer', 'system_channel_id?' => 'snowflake', 'system_channel_flags?' => 'integer']
	 * @return \RestCord\Model\Guild\Guild Returns a guild object on success.
	 */
	public function createGuild(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#create-guild-ban
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'user.id' => 'snowflake', 'delete_message_days?' => 'integer', 'reason?' => 'string']
	 * @return array Returns a 204 empty response on success.
	 */
	public function createGuildBan(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#create-guild-channel
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'name' => 'string', 'type' => 'integer', 'topic' => 'string', 'bitrate' => 'integer', 'user_limit' => 'integer', 'rate_limit_per_user' => 'integer', 'position' => 'integer', 'permission_overwrites' => 'array', 'parent_id' => 'snowflake', 'nsfw' => 'boolean']
	 * @return \RestCord\Model\Channel\Channel Returns the new channel object on success.
	 */
	public function createGuildChannel(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#create-guild-role
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'name' => 'string', 'permissions' => 'string', 'color' => 'integer', 'hoist' => 'boolean', 'mentionable' => 'boolean']
	 * @return \RestCord\Model\Permissions\Role Returns the new role object on success.
	 */
	public function createGuildRole(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#delete-guild
	 *
	 * @param array $options ['guild.id' => 'snowflake']
	 * @return array Returns 204 No Content on success.
	 */
	public function deleteGuild(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#delete-guild-integration
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'integration.id' => 'string']
	 * @return array Returns a 204 empty response on success.
	 */
	public function deleteGuildIntegration(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#delete-guild-role
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'role.id' => 'string']
	 * @return array Returns a 204 empty response on success.
	 */
	public function deleteGuildRole(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'with_counts?' => 'boolean']
	 * @return \RestCord\Model\Guild\Guild Returns the guild object for the given id.
	 */
	public function getGuild(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild-ban
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'user.id' => 'snowflake']
	 * @return \RestCord\Model\Guild\Ban Returns a ban object for the given user or a 404 not found if the ban cannot be found.
	 */
	public function getGuildBan(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild-bans
	 *
	 * @param array $options ['guild.id' => 'snowflake']
	 * @return \RestCord\Model\Guild\Ban[] Returns a list of ban objects for the users banned from this guild.
	 */
	public function getGuildBans(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild-channels
	 *
	 * @param array $options ['guild.id' => 'snowflake']
	 * @return \RestCord\Model\Channel\Channel[] Returns a list of guild channel objects.
	 */
	public function getGuildChannels(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild-integrations
	 *
	 * @param array $options ['guild.id' => 'snowflake']
	 * @return \RestCord\Model\Guild\Integration[] Returns a list of integration objects for the guild.
	 */
	public function getGuildIntegrations(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild-invites
	 *
	 * @param array $options ['guild.id' => 'snowflake']
	 * @return \RestCord\Model\Invite\Invite[] Returns a list of invite objects (with invite metadata) for the guild.
	 */
	public function getGuildInvites(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild-member
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'user.id' => 'snowflake']
	 * @return \RestCord\Model\Guild\GuildMember Returns a guild member object for the specified user.
	 */
	public function getGuildMember(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild-preview
	 *
	 * @param array $options ['guild.id' => 'snowflake']
	 * @return \RestCord\Model\Guild\GuildPreview Returns the guild preview object for the given id.
	 */
	public function getGuildPreview(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild-prune-count
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'days' => 'integer', 'include_roles' => 'array']
	 * @return array Returns an object with one 'pruned' key indicating the number of members that would be removed in a prune operation.
	 */
	public function getGuildPruneCount(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild-roles
	 *
	 * @param array $options ['guild.id' => 'snowflake']
	 * @return \RestCord\Model\Permissions\Role[] Returns a list of role objects for the guild.
	 */
	public function getGuildRoles(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild-vanity-url
	 *
	 * @param array $options ['guild.id' => 'snowflake']
	 * @return \RestCord\Model\Invite\Invite Returns a partial invite object for guilds with that feature enabled.
	 */
	public function getGuildVanityUrl(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild-voice-regions
	 *
	 * @param array $options ['guild.id' => 'snowflake']
	 * @return \RestCord\Model\Voice\VoiceRegion[] Returns a list of voice region objects for the guild.
	 */
	public function getGuildVoiceRegions(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild-welcome-screen
	 *
	 * @param array $options ['guild.id' => 'snowflake']
	 * @return \RestCord\Model\Guild\WelcomeScreen Returns the Welcome Screen object for the guild.
	 */
	public function getGuildWelcomeScreen(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild-widget
	 *
	 * @param array $options ['guild.id' => 'snowflake']
	 * @return array Returns the widget for the guild.
	 */
	public function getGuildWidget(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild-widget-image
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'style' => 'string']
	 * @return array Returns a PNG image widget for the guild.
	 */
	public function getGuildWidgetImage(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#get-guild-widget-settings
	 *
	 * @param array $options ['guild.id' => 'snowflake']
	 * @return \RestCord\Model\Guild\GuildWidget Returns a guild widget object.
	 */
	public function getGuildWidgetSettings(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#list-guild-members
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'limit' => 'integer', 'after' => 'snowflake']
	 * @return \RestCord\Model\Guild\GuildMember[] Returns a list of guild member objects that are members of the guild.
	 */
	public function listGuildMembers(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#modify-current-user-nick
	 *
	 * @param array $options ['guild.id' => 'snowflake', '?nick' => 'string']
	 * @return array Returns a 200 with the nickname on success.
	 */
	public function modifyCurrentUserNick(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#modify-current-user-voice-state
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'channel_id' => 'snowflake', 'suppress?' => 'boolean', 'request_to_speak_timestamp?' => 'ISO8601 timestamp']
	 * @return array
	 */
	public function modifyCurrentUserVoiceState(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#modify-guild
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'name' => 'string', 'region' => 'string', 'verification_level' => 'integer', 'default_message_notifications' => 'integer', 'explicit_content_filter' => 'integer', 'afk_channel_id' => 'snowflake', 'afk_timeout' => 'integer', 'icon' => 'image data', 'owner_id' => 'snowflake', 'splash' => 'image data', 'discovery_splash' => 'image data', 'banner' => 'image data', 'system_channel_id' => 'snowflake', 'system_channel_flags' => 'integer', 'rules_channel_id' => 'snowflake', 'public_updates_channel_id' => 'snowflake', 'preferred_locale' => 'string', 'features' => 'array', 'description' => 'string']
	 * @return \RestCord\Model\Guild\Guild Returns the updated guild object on success.
	 */
	public function modifyGuild(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#modify-guild-channel-positions
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'id' => 'snowflake', 'position' => 'integer', 'lock_permissions' => 'boolean', 'parent_id' => 'snowflake']
	 * @return array Returns a 204 empty response on success.
	 */
	public function modifyGuildChannelPositions(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#modify-guild-member
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'user.id' => 'snowflake', 'nick' => 'string', 'roles' => 'array', 'mute' => 'boolean', 'deaf' => 'boolean', 'channel_id' => 'snowflake']
	 * @return \RestCord\Model\Guild\GuildMember Returns a 200 OK with the guild member as the body.
	 */
	public function modifyGuildMember(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#modify-guild-role
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'role.id' => 'string', 'name' => 'string', 'permissions' => 'string', 'color' => 'integer', 'hoist' => 'boolean', 'mentionable' => 'boolean']
	 * @return \RestCord\Model\Permissions\Role Returns the updated role on success.
	 */
	public function modifyGuildRole(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#modify-guild-role-positions
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'id' => 'snowflake', '?position' => 'integer']
	 * @return \RestCord\Model\Permissions\Role[] Returns a list of all of the guild's role objects on success.
	 */
	public function modifyGuildRolePositions(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#modify-guild-welcome-screen
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'enabled' => 'boolean', 'welcome_channels' => 'array', 'description' => 'string']
	 * @return \RestCord\Model\Guild\WelcomeScreen Returns the updated Welcome Screen object.
	 */
	public function modifyGuildWelcomeScreen(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#modify-guild-widget
	 *
	 * @param array $options ['guild.id' => 'snowflake']
	 * @return \RestCord\Model\Guild\GuildWidget Returns the updated guild widget object.
	 */
	public function modifyGuildWidget(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#modify-user-voice-state
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'user.id' => 'snowflake', 'channel_id' => 'snowflake', 'suppress?' => 'boolean']
	 * @return array
	 */
	public function modifyUserVoiceState(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#remove-guild-ban
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'user.id' => 'snowflake']
	 * @return array Returns a 204 empty response on success.
	 */
	public function removeGuildBan(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#remove-guild-member
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'user.id' => 'snowflake']
	 * @return array Returns a 204 empty response on success.
	 */
	public function removeGuildMember(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#remove-guild-member-role
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'user.id' => 'snowflake', 'role.id' => 'string']
	 * @return array Returns a 204 empty response on success.
	 */
	public function removeGuildMemberRole(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/guild#search-guild-members
	 *
	 * @param array $options ['guild.id' => 'snowflake', 'query' => 'string', 'limit' => 'integer']
	 * @return \RestCord\Model\Guild\GuildMember[] Returns a list of guild member objects whose username or nickname starts with a provided string.
	 */
	public function searchGuildMembers(array $options);

	/**
	 * @param array $options ['guild.id' => 'snowflake', 'nick' => 'string']
	 * @return array Returns the nick
	 */
	public function updateNick(array $options);
}