---
title: Create Message
category: Channel
order: 6
---

# `createMessage`

```php
$client->channel->createMessage($parameters);
```

## Description

Post a message to a guild text or DM channel.  Fires a Message Create Gateway event. See message formatting for more information on how to properly format messages.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
content | string | false | *null*
tts | boolean | false | *null*
file | file contents | false | *null*
embeds | array | false | *null*
embed (deprecated) | object | false | *null*
payload_json | string | false | *null*
allowed_mentions | object | false | *null*
message_reference | message reference | false | *null*
components | array | false | *null*

## Response

Returns a message object.

Can Return:

* message
