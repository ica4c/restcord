---
title: Edit Channel Permissions
category: Channel
order: 17
---

# `editChannelPermissions`

```php
$client->channel->editChannelPermissions($parameters);
```

## Description

Edit the channel permission overwrites for a user or role in a channel. Only usable for guild channels. Requires the MANAGE_ROLES permission. Only permissions your bot has in the guild or channel can be allowed/denied (unless your bot has a MANAGE_ROLES overwrite in the channel).  For more information about permissions, see permissions.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
overwrite.id | string | true | *null*
allow | string | false | *null*
deny | string | false | *null*
type | integer | false | *null*

## Response

Returns a 204 empty response on success.

