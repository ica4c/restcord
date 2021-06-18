---
title: Start Thread With Message
category: Channel
order: 28
---

# `startThreadWithMessage`

```php
$client->channel->startThreadWithMessage($parameters);
```

## Description

Creates a new thread from an existing message.  Fires a Thread Create Gateway event.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
message.id | snowflake | true | *null*
name | string | false | *null*
auto_archive_duration | integer | false | *null*

## Response

Returns a channel on success, and a 400 BAD REQUEST on invalid parameters.

Can Return:

* channel
