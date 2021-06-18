---
title: Pin Message
category: Channel
order: 24
---

# `pinMessage`

```php
$client->channel->pinMessage($parameters);
```

## Description

Pin a message in a channel. Requires the MANAGE_MESSAGES permission.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
message.id | snowflake | true | *null*

## Response

Returns a 204 empty response on success.

