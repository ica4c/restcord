---
title: List Joined Private Archived Threads
category: Channel
order: 38
---

# `listJoinedPrivateArchivedThreads`

```php
$client->channel->listJoinedPrivateArchivedThreads($parameters);
```

## Description

Threads are ordered by their id, in descending order. Requires the READ_MESSAGE_HISTORY permission.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
before? | snowflake | false | *null*
limit? | integer | false | *null*

## Response

Returns archived threads in the channel that are of type GUILD_PRIVATE_THREAD, and the user has joined.

Can Return:

* type
