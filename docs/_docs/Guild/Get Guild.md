---
title: Get Guild
category: Guild
order: 2
---

# `getGuild`

```php
$client->guild->getGuild($parameters);
```

## Description

If with_counts is set to true, this endpoint will also return approximate_member_count and approximate_presence_count for the guild.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
guild.id | snowflake | true | *null*
with_counts? | boolean | false | *null*

## Response

Returns the guild object for the given id.

Can Return:

* guild
