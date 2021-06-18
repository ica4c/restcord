---
title: Modify Guild Channel Positions
category: Guild
order: 8
---

# `modifyGuildChannelPositions`

```php
$client->guild->modifyGuildChannelPositions($parameters);
```

## Description

Modify the positions of a set of channel objects for the guild. Requires MANAGE_CHANNELS permission.  Fires multiple Channel Update Gateway events.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
guild.id | snowflake | true | *null*
id | snowflake | false | *null*
position | integer | false | *null*
lock_permissions | boolean | false | *null*
parent_id | snowflake | false | *null*

## Response

Returns a 204 empty response on success.

