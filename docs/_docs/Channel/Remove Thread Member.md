---
title: Remove Thread Member
category: Channel
order: 33
---

# `removeThreadMember`

```php
$client->channel->removeThreadMember($parameters);
```

## Description

Removes another member from a thread. Requires the MANAGE_THREADS permission, or the creator of the thread if it is a GUILD_PRIVATE_THREAD. Also requires the thread is not archived.  Fires a Thread Members Update Gateway event.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
user.id | snowflake | true | *null*

## Response

Returns a 204 empty response on success.

