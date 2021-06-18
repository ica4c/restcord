---
title: List Active Threads
category: Channel
order: 35
---

# `listActiveThreads`

```php
$client->channel->listActiveThreads($parameters);
```

## Description

Threads are ordered by their id, in descending order.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*

## Response

Returns all active threads in the channel, including public and private threads.

