---
title: Unpin Message
category: Channel
order: 25
---

# `unpinMessage`

```php
$client->channel->unpinMessage($parameters);
```

## Description

Unpin a message in a channel. Requires the MANAGE_MESSAGES permission.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
message.id | snowflake | true | *null*

## Response

Returns a 204 empty response on success.

