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
 * Webhook Intellisense Helper
 */
interface Webhook {

	/**
	 * @see https://discordapp.com/developers/docs/resources/webhook#create-webhook
	 *
	 * @param array $options ['channel.id' => 'snowflake', 'name' => 'string', 'avatar?' => 'image data']
	 * @return \RestCord\Model\Webhook\Webhook Returns a webhook object on success.
	 */
	public function createWebhook(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/webhook#delete-webhook
	 *
	 * @param array $options ['webhook.id' => 'snowflake']
	 * @return array Returns a 204 NO CONTENT response on success.
	 */
	public function deleteWebhook(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/webhook#delete-webhook-message
	 *
	 * @param array $options ['webhook.id' => 'snowflake', 'webhook.token' => 'string', 'message.id' => 'snowflake']
	 * @return array Returns a 204 NO CONTENT response on success.
	 */
	public function deleteWebhookMessage(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/webhook#delete-webhook-with-token
	 *
	 * @param array $options ['webhook.id' => 'snowflake', 'webhook.token' => 'string']
	 * @return array
	 */
	public function deleteWebhookWithToken(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/webhook#edit-webhook-message
	 *
	 * @param array $options ['webhook.id' => 'snowflake', 'webhook.token' => 'string', 'message.id' => 'snowflake', 'content' => 'string', 'embeds' => 'array', 'file' => 'file contents', 'payload_json' => 'string', 'allowed_mentions' => 'object', 'attachments' => 'array', 'components' => 'array']
	 * @return \RestCord\Model\Channel\Message Returns a message object on success.
	 */
	public function editWebhookMessage(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/webhook#execute-github-compatible-webhook
	 *
	 * @param array $options ['webhook.id' => 'snowflake', 'webhook.token' => 'string', 'wait' => 'boolean']
	 * @return array
	 */
	public function executeGithubCompatibleWebhook(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/webhook#execute-slack-compatible-webhook
	 *
	 * @param array $options ['webhook.id' => 'snowflake', 'webhook.token' => 'string', 'wait' => 'boolean']
	 * @return array
	 */
	public function executeSlackCompatibleWebhook(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/webhook#execute-webhook
	 *
	 * @param array $options ['webhook.id' => 'snowflake', 'webhook.token' => 'string', 'wait' => 'boolean', 'thread_id' => 'snowflake', 'content' => 'string', 'username' => 'string', 'avatar_url' => 'string', 'tts' => 'boolean', 'file' => 'file contents', 'embeds' => 'array', 'payload_json' => 'string', 'allowed_mentions' => 'object', 'components' => 'array']
	 * @return array
	 */
	public function executeWebhook(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/webhook#get-channel-webhooks
	 *
	 * @param array $options ['channel.id' => 'snowflake']
	 * @return \RestCord\Model\Webhook\Webhook[] Returns a list of channel webhook objects.
	 */
	public function getChannelWebhooks(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/webhook#get-guild-webhooks
	 *
	 * @param array $options ['guild.id' => 'snowflake']
	 * @return \RestCord\Model\Webhook\Webhook[] Returns a list of guild webhook objects.
	 */
	public function getGuildWebhooks(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/webhook#get-webhook
	 *
	 * @param array $options ['webhook.id' => 'snowflake']
	 * @return \RestCord\Model\Webhook\Webhook Returns the new webhook object for the given id.
	 */
	public function getWebhook(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/webhook#get-webhook-message
	 *
	 * @param array $options ['webhook.id' => 'snowflake', 'webhook.token' => 'string', 'message.id' => 'snowflake']
	 * @return \RestCord\Model\Channel\Message Returns a previously-sent webhook message from the same token.
	 */
	public function getWebhookMessage(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/webhook#get-webhook-with-token
	 *
	 * @param array $options ['webhook.id' => 'snowflake', 'webhook.token' => 'string']
	 * @return array
	 */
	public function getWebhookWithToken(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/webhook#modify-webhook
	 *
	 * @param array $options ['webhook.id' => 'snowflake', 'name' => 'string', 'avatar' => 'image data', 'channel_id' => 'snowflake']
	 * @return \RestCord\Model\Webhook\Webhook Returns the updated webhook object on success.
	 */
	public function modifyWebhook(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/webhook#modify-webhook-with-token
	 *
	 * @param array $options ['webhook.id' => 'snowflake', 'webhook.token' => 'string']
	 * @return array
	 */
	public function modifyWebhookWithToken(array $options);
}