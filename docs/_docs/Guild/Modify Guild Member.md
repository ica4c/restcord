---
title: Modify Guild Member
category: Guild
order: 13
---

# `modifyGuildMember`

```php
$client->guild->modifyGuildMember($parameters);
```

## Description

Modify attributes of a guild member.  Fires a Guild Member Update Gateway event. If the channel_id is set to null, this will force the target user to be disconnected from voice.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
guild.id | snowflake | true | *null*
user.id | snowflake | true | *null*
nick | string | false | *null*
roles | array | false | *null*
mute | boolean | false | *null*
deaf | boolean | false | *null*
channel_id | snowflake | false | *null*

## Response

Returns a 200 OK with the guild member as the body.

Can Return:

* guild member
