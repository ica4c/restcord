---
title: Follow News Channel
category: Channel
order: 21
---

# `followNewsChannel`

```php
$client->channel->followNewsChannel($parameters);
```

## Description

Follow a News Channel to send messages to a target channel. Requires the MANAGE_WEBHOOKS permission in the target channel.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
webhook_channel_id | snowflake | false | *null*

## Response

Returns a followed channel object.

Can Return:

* followed channel
