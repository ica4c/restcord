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
 * Oauth2 Intellisense Helper
 */
interface Oauth2 {

	/**
	 * @see https://discordapp.com/developers/docs/topics/oauth2#get-current-authorization-information
	 *
	 * @param array $options ['application' => 'object', 'scopes' => 'array', 'expires' => 'ISO8601 timestamp', 'user?' => 'object']
	 * @return array Returns info about the current authorization.
	 */
	public function getCurrentAuthorizationInformation(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/topics/oauth2#get-current-bot-application-information
	 *
	 * @param array $options []
	 * @return \GuzzleHttp\Command\Result Returns the bot's application object without flags.
	 */
	public function getCurrentBotApplicationInformation(array $options);
}