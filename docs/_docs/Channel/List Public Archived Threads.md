---
title: List Public Archived Threads
category: Channel
order: 36
---

# `listPublicArchivedThreads`

```php
$client->channel->listPublicArchivedThreads($parameters);
```

## Description

When called on a GUILD_TEXT channel, returns threads of type GUILD_PUBLIC_THREAD. When called on a GUILD_NEWS channel returns threads of type GUILD_NEWS_THREAD. Threads are ordered by archive_timestamp, in descending order. Requires the READ_MESSAGE_HISTORY permission.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
before? | ISO8601 timestamp | false | *null*
limit? | integer | false | *null*

## Response

Returns archived threads in the channel that are public.

Can Return:

* type
* type
