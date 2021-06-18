---
title: Get Reactions
category: Channel
order: 11
---

# `getReactions`

```php
$client->channel->getReactions($parameters);
```

## Description

Get a list of users that reacted with this emoji. 
The emoji must be URL Encoded or the request will fail with 10014: Unknown Emoji. To use custom emoji, you must encode it in the format name:id with the emoji name and emoji id.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
message.id | snowflake | true | *null*
emoji | string | true | *null*
after | snowflake | false | *null*
limit | integer | false | 25

## Response

Returns an array of user objects on success.

Can Return:

* user
