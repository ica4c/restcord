---
title: Edit Message
category: Channel
order: 14
---

# `editMessage`

```php
$client->channel->editMessage($parameters);
```

## Description

Edit a previously sent message. The fields content, embeds, and flags can be edited by the original message author. Other users can only edit flags and only if they have the MANAGE_MESSAGES permission in the corresponding channel. When specifying flags, ensure to include all previously set flags/bits in addition to ones that you are modifying. Only flags documented in the table below may be modified by users (unsupported flag changes are currently ignored without error).

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
message.id | snowflake | true | *null*
content | string | false | *null*
embeds | array | false | *null*
embed (deprecated) | object | false | *null*
flags | integer | false | *null*
file | file contents | false | *null*
payload_json | string | false | *null*
allowed_mentions | object | false | *null*
attachments | array | false | *null*
components | array | false | *null*

## Response

Possibly No Response

