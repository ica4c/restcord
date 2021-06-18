---
title: Leave Thread
category: Channel
order: 32
---

# `leaveThread`

```php
$client->channel->leaveThread($parameters);
```

## Description

Removes the current user from a thread. Also requires the thread is not archived.  Fires a Thread Members Update Gateway event.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*

## Response

Returns a 204 empty response on success.

