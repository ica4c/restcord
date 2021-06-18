---
title: Bulk Delete Messages
category: Channel
order: 16
---

# `bulkDeleteMessages`

```php
$client->channel->bulkDeleteMessages($parameters);
```

## Description

Delete multiple messages in a single request. This endpoint can only be used on guild channels and requires the MANAGE_MESSAGES permission.  Fires a Message Delete Bulk Gateway event.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
messages | array | false | *null*

## Response

Returns a 204 empty response on success.

