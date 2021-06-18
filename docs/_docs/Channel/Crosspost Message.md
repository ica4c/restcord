---
title: Crosspost Message
category: Channel
order: 7
---

# `crosspostMessage`

```php
$client->channel->crosspostMessage($parameters);
```

## Description

Crosspost a message in a News Channel to following channels. This endpoint requires the &#039;SEND_MESSAGES&#039; permission, if the current user sent the message, or additionally the &#039;MANAGE_MESSAGES&#039; permission, for all other messages, to be present for the current user.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
channel.id | snowflake | true | *null*
message.id | snowflake | true | *null*

## Response

Possibly No Response

