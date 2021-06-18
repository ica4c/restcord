---
title: Get Channel
category: Channel
order: 1
---

# `getChannel`

```php
$client->channel->getChannel($parameters);
```

## Description

Get a channel by ID.   If the channel is a thread, a thread member object is included in the returned result.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*

## Response

Returns a channel object.

Can Return:

* channel
* thread member
