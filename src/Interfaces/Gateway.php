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
 * Gateway Intellisense Helper
 */
interface Gateway {

	/**
	 * @see https://discordapp.com/developers/docs/topics/gateway#get-gateway
	 *
	 * @param array $options []
	 * @return array Returns an object with a single valid WSS URL, which the client can use for Connecting.
	 */
	public function getGateway(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/topics/gateway#get-gateway-bot
	 *
	 * @param array $options ['total' => 'integer', 'remaining' => 'integer', 'reset_after' => 'integer', 'max_concurrency' => 'integer']
	 * @return array Returns an object based on the information in Get Gateway, plus additional metadata that can help during the operation of large or sharded bots.
	 */
	public function getGatewayBot(array $options);
}