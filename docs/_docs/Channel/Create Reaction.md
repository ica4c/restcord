---
title: Create Reaction
category: Channel
order: 8
---

# `createReaction`

```php
$client->channel->createReaction($parameters);
```

## Description

Create a reaction for the message. This endpoint requires the &#039;READ_MESSAGE_HISTORY&#039; permission to be present on the current user. Additionally, if nobody else has reacted to the message using this emoji, this endpoint requires the &#039;ADD_REACTIONS&#039; permission to be present on the current user. 
The emoji must be URL Encoded or the request will fail with 10014: Unknown Emoji. To use custom emoji, you must encode it in the format name:id with the emoji name and emoji id.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
message.id | snowflake | true | *null*
emoji | string | true | *null*

## Response

Returns a 204 empty response on success.

