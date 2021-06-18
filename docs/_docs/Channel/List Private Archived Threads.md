---
title: List Private Archived Threads
category: Channel
order: 37
---

# `listPrivateArchivedThreads`

```php
$client->channel->listPrivateArchivedThreads($parameters);
```

## Description

Threads are ordered by archive_timestamp, in descending order. Requires both the READ_MESSAGE_HISTORY and MANAGE_THREADS permissions.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
before? | ISO8601 timestamp | false | *null*
limit? | integer | false | *null*

## Response

Returns archived threads in the channel that are of type GUILD_PRIVATE_THREAD.

Can Return:

* type
