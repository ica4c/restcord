---
title: Join Thread
category: Channel
order: 30
---

# `joinThread`

```php
$client->channel->joinThread($parameters);
```

## Description

Adds the current user to a thread. Also requires the thread is not archived.  Fires a Thread Members Update Gateway event.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*

## Response

Returns a 204 empty response on success.

