---
title: Get Gateway Bot
category: Gateway
order: 2
---

# `getGatewayBot`

```php
$client->gateway->getGatewayBot($parameters);
```

## Description

Unlike the Get Gateway, this route should not be cached for extended periods of time as the value is not guaranteed to be the same per-call, and changes as the bot joins/leaves guilds.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
total | integer | false | *null*
remaining | integer | false | *null*
reset_after | integer | false | *null*
max_concurrency | integer | false | *null*

## Response

Returns an object based on the information in Get Gateway, plus additional metadata that can help during the operation of large or sharded bots.

