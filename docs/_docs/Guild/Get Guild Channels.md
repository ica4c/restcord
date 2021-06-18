---
title: Get Guild Channels
category: Guild
order: 6
---

# `getGuildChannels`

```php
$client->guild->getGuildChannels($parameters);
```

## Description

Does not include threads.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
guild.id | snowflake | true | *null*

## Response

Returns a list of guild channel objects.

Can Return:

* channel
