---
title: Start Thread Without Message
category: Channel
order: 29
---

# `startThreadWithoutMessage`

```php
$client->channel->startThreadWithoutMessage($parameters);
```

## Description

Creates a new thread that is not connected to an existing message. The created thread is always a GUILD_PRIVATE_THREAD.  Fires a Thread Create Gateway event.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
name | string | false | *null*
auto_archive_duration | integer | false | *null*

## Response

Returns a channel on success, and a 400 BAD REQUEST on invalid parameters.

Can Return:

* channel
