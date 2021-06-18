---
title: Create Guild Channel
category: Guild
order: 7
---

# `createGuildChannel`

```php
$client->guild->createGuildChannel($parameters);
```

## Description

Create a new channel object for the guild. Requires the MANAGE_CHANNELS permission. If setting permission overwrites, only permissions your bot has in the guild can be allowed/denied. Setting MANAGE_ROLES permission in channels is only possible for guild administrators.  Fires a Channel Create Gateway event.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
guild.id | snowflake | true | *null*
name | string | false | *null*
type | integer | false | *null*
topic | string | false | *null*
bitrate | integer | false | *null*
user_limit | integer | false | *null*
rate_limit_per_user | integer | false | *null*
position | integer | false | *null*
permission_overwrites | array | false | *null*
parent_id | snowflake | false | *null*
nsfw | boolean | false | *null*

## Response

Returns the new channel object on success.

Can Return:

* channel
