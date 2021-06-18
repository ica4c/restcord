---
title: Create Channel Invite
category: Channel
order: 19
---

# `createChannelInvite`

```php
$client->channel->createChannelInvite($parameters);
```

## Description

Create a new invite object for the channel. Only usable for guild channels. Requires the CREATE_INSTANT_INVITE permission. All JSON parameters for this route are optional, however the request body is not. If you are not sending any fields, you still have to send an empty JSON object ({}).  Fires an Invite Create Gateway event.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
max_age | integer | false | 86400
max_uses | integer | false | 0
temporary | boolean | false | *null*
unique | boolean | false | *null*
target_type | integer | false | *null*
target_user_id | snowflake | false | *null*
target_application_id | snowflake | false | *null*

## Response

Returns an invite object.

Can Return:

* invite
