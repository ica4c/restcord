---
title: Modify Channel
category: Channel
order: 2
---

# `modifyChannel`

```php
$client->channel->modifyChannel($parameters);
```

## Description

Update a channel&#039;s settings.  All JSON parameters are optional.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*

## Response

Returns a channel on success, and a 400 BAD REQUEST on invalid parameters.

Can Return:

* channel
