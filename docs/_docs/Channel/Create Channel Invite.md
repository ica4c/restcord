---
title: Create Channel Invite
category: Channel
order: 18
---

# `createChannelInvite`

```php
$client->channel->createChannelInvite($parameters);
```

## Description

Create a new invite object for the channel. Only usable for guild channels. Requires the CREATE_INSTANT_INVITE permission. All JSON paramaters for this route are optional, however the request body is not. If you are not sending any fields, you still have to send an empty JSON object ({}).

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
max_age | integer | false | 86400 (24 hours)
max_uses | integer | false | 0
temporary | bool | false | false
unique | bool | false | false
channel.id | snowflake | true | *null*

## Response

Returns an invite object.

Can Return:

* invite