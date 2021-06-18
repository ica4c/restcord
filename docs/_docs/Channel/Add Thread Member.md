---
title: Add Thread Member
category: Channel
order: 31
---

# `addThreadMember`

```php
$client->channel->addThreadMember($parameters);
```

## Description

Adds another member to a thread. Requires the ability to send messages in the thread. Also requires the thread is not archived.  Fires a Thread Members Update Gateway event.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
user.id | snowflake | true | *null*

## Response

Returns a 204 empty response on success.

